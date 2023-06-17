<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		notLogin();
	}
	
	public function index()
	{
		//Cek validasi data
        $this->form_validation->set_rules('namaKaryawan','Username','required');
        $this->form_validation->set_rules('nikKaryawan','Username','required');
		$this->form_validation->set_rules('tlpKaryawan','Username','required');
		$this->form_validation->set_rules('alamatKaryawan','Username','required');
		$this->form_validation->set_rules('jabatanKaryawan','Username','required');
		$this->form_validation->set_rules('gajiKaryawan','Username','required');

		if ($this->form_validation->run() == false) {
            $data['page_title'] = 'Data Karyawan';
			$this->load->model('m_karyawan');
            $this->load->view('admin/businesslogic/v_karyawan', $data);
        } else {
			//Validasi Lolos
            $this->_tambahDataKaryawan();
        }
	}

    private function _tambahDataKaryawan()
	{
		$this->load->model('m_karyawan');
		$data = array (
			'nik_karyawan' => $this->input->post('nikKaryawan'),
			'nama_karyawan' => $this->input->post('namaKaryawan'),
			'alamat_karyawan' => $this->input->post('alamatKaryawan'),
			'no_tlp' => $this->input->post('tlpKaryawan'),
			'jabatan_karyawan' => $this->input->post('jabatanKaryawan'),
			'gaji_pokok' => str_replace( '.', '', $this->input->post('gajiKaryawan'))
		);

		$this->m_karyawan->addDataKaryawan($data);

		$this->session->set_flashdata('flash', 'ditambahkan');
		redirect('admin/dashboard');
	}

	public function manager()
    {	
		$data['page_title'] = 'Data | Manager';
		$this->load->model('m_karyawan');
		$data['data_manager'] = $this->m_karyawan->getDataManager();
		$data['data_bonus'] = $this->m_karyawan->getDataBonus();
        
		$this->load->view('admin/businesslogic/v_karyawan_manager', $data);
    }

	public function supervisor()
    {
		$data['page_title'] = 'Data | Supervisor';
		$this->load->model('m_karyawan');
		$data['data_supervisor'] = $this->m_karyawan->getDataSupervisor();
		$data['data_bonus'] = $this->m_karyawan->getDataBonus();
		
		$this->load->view('admin/businesslogic/v_karyawan_supervisor', $data);
    }

	public function staff()
    {
		$data['page_title'] = 'Data | Staff';
		$this->load->model('m_karyawan');
		$data['data_staff'] = $this->m_karyawan->getDataStaff();
		$data['data_bonus'] = $this->m_karyawan->getDataBonus();
		
		$this->load->view('admin/businesslogic/v_karyawan_staff', $data);
    }

	public function editKaryawan($id)
    {
		$data['page_title'] = 'Data | Edit';
		$this->load->model('m_karyawan');
		$where = array('id_karyawan' =>$id);
		$data['data_edit'] = $this->m_karyawan->getDataEdit($where,'tbl_karyawan')->result();
		$this->load->view('admin/businesslogic/v_edit_karyawan', $data);

    
    }

	public function updateDataKaryawan()
	{	
		$id = $this->input->post('id_karyawan');
		$this->load->model('m_karyawan');
        $data = array(
			'nik_karyawan' => $this->input->post('nikKaryawan'),
			'nama_karyawan' => $this->input->post('namaKaryawan'),
			'alamat_karyawan' => $this->input->post('alamatKaryawan'),
			'no_tlp' => $this->input->post('tlpKaryawan'),
			'jabatan_karyawan' => $this->input->post('jabatanKaryawan'),
			'gaji_pokok' => str_replace( '.', '', $this->input->post('gajiKaryawan'))
        );

        $where = array(
            'id_karyawan' => $this->input->post('id_karyawan')
        );


        $this->m_karyawan->updateKaryawan($where, $data);
       
		$this->session->set_flashdata('flash', 'berhasil-diupdate');
		redirect('admin/karyawan/editkaryawan/'. $id);
    }

	public function deleteKaryawan($id)
    {	
		$this->load->model('m_karyawan');
	    $this->m_karyawan->deleteKaryawan($id);
        $this->session->set_flashdata('flash', 'dihapus');
		
		redirect('admin/dashboard');
    }
}