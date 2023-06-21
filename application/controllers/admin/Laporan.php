<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		notLogin();
	}

	public function index()
	{	
		isAdmin();
        if ($this->input->post("bulan") == null) {
            $data['page_title'] = 'Rekap | Data';
			$this->load->view('admin/businesslogic/v_laporan', $data);
        } else {
            //validasi lolos
            $this->_rekapData();
        }
	}

	private function  _rekapData()
	{	
		isAdmin();
		if($this->input->post("bulan") == null){
			redirect('admin/laporan');
		} else{
			$this->load->model('m_karyawan');
			$bulan = $this->input->post("bulan");
			$this->m_karyawan->archiveKaryawan($bulan);
		}
	}


	public function showDataRekap()
	{
		if($this->input->post("bulan") == null){
			$data['page_title'] = 'Data Laporan';
			$this->load->model('m_karyawan');
			$data['data_rekap'] = $this->m_karyawan->getDataRekap();
			$data['data_bonus'] = $this->m_karyawan->getDataBonus();
			$this->load->view('admin/businesslogic/v_daftar_laporan', $data);
		} else{
			
			$this->load->model('m_karyawan');
			$bulan = $this->input->post("bulan");
			$jabatan = $this->input->post('jabatanKaryawan');

			$data['page_title'] = 'Data Laporan Gaji';

			$data['data_bonus'] = $this->m_karyawan->getDataBonus();
			$data['data_rekap'] = $this->m_karyawan->selectionDataRekap($bulan, $jabatan);
			$this->load->view('admin/businesslogic/v_daftar_laporan', $data);
			
		}
	}

	public function cetakLaporan()
	{	
		isAdmin();
		if ($this->input->post("bulan") == null) {
			redirect('admin/laporan/showdatarekap');
		}

		$this->load->model('m_karyawan');
		$bulan = $this->input->post("bulan");
		$jabatan = $this->input->post('jabatanKaryawan');

		$dataBonus = $this->m_karyawan->getDataBonus();
		$dataRekap = $this->m_karyawan->selectionDataRekap($bulan, $jabatan);
		
		if($dataRekap == null){
			$this->session->set_flashdata('flash', 'cetak-kosong');
			redirect('admin/laporan/showdatarekap');
		}

		$mpdf = new \Mpdf\Mpdf();
		$mpdf->WriteHTML('<h1 align="center">Gaji Karyawan Periode '  . tanggal_indonesia(date("F", mktime(0, 0, 0, substr($bulan, -2), 10))) .' '. date('Y') . '</h1>');
		
		$html = '<!DOCTYPE html>
        <html lang="en">
        <head>
            <title>Data Gaji</title>
        </head>
        <body>
            <table border="1" cellpadding="10" cellspacing="0">
                <tr>
					<th>No</th>
					<th>Nik</th>
					<th>Nama</th>
					<th>Alamat</th>
					<th>No Tlp</th>
					<th>Jabatan</th>
					<th>Gaji Pokok</th>
					<th>Gaji Total</th>
					<th>Bonus</th>
					<th>PPh</th>
					
                </tr>';

                $i = 1;
                foreach($dataRekap as $row){
                    $html .= '<tr>
                        <td>'. $i++ .'</td>
                        <td>'. $row['nik_karyawan'] .'</td>
                        <td>'. $row['nama_karyawan'] .'</td>
                        <td>'. $row['alamat_karyawan'] .'</td>
                        <td>'. $row['no_tlp'] .'</td>
						<td>'. $row['jabatan_karyawan'] .'</td>
                        <td>'. number_format($row['gaji_pokok'], 2,',','.') .'</td>
						<td>'. number_format($row['gaji_total'], 2,',','.') .'</td>
						<td>'. $dataBonus[$row['jabatan_karyawan']] .'%'. '</td>
						<td>'. $dataBonus['PPh'] .'%'. '</td>
						
                    </tr>';
                }
        $html .= '</table>
        </body>
        </html>';
        
        $time = 'Dokumen di cetak pada tanggal : '. date('d F Y H:i:s');
		
		$mpdf->WriteHTML($html);
      	$mpdf->WriteHTML($time);
		$mpdf->Output();
	}
}