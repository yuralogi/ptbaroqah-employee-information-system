<?php
class M_Karyawan extends CI_Model
{
    //Get Data Karyawan | Manager
    public function getDataManager()
    {
        $this->db->select('*');
        $this->db->from('tbl_karyawan');
        $this->db->where('jabatan_karyawan','Manager');

        return $this->db->get()->result_array();
    }

    //Get Data Karyawan | Supervisor
    public function getDataSupervisor()
    {
        $this->db->select('*');
        $this->db->from('tbl_karyawan');
        $this->db->where('jabatan_karyawan','Supervisor');

        return $this->db->get()->result_array();
    }

    //Get Data Karyawan | Staff
    public function getDataStaff()
    {
        $this->db->select('*');
        $this->db->from('tbl_karyawan');
        $this->db->where('jabatan_karyawan','Staff');
        return $this->db->get()->result_array();
    }

    //Get Data Edit
    public function getDataEdit($where,$table)
    {
        return $this->db->get_where($table,$where);
    }
    
    //Get Data Bonus
    public function getDataBonus()
    {
        $result = $this->db->get('tbl_gaji')->result_array();
        
        foreach($result as $value){
            
            $bonus_manager = $value['bonus_manager'];
            $bonus_supervisor = $value['bonus_supervisor'];
            $bonus_staff = $value['bonus_staff'];
            $pph = $value['pph'];
            
        }
    
        $data = array(
            'Manager' => $bonus_manager,
            'Supervisor' => $bonus_supervisor,
            'Staff' => $bonus_staff,
            'PPh' => $pph
        );
    
        return $data;
    }

    //Get All Data KAryawan
    public function getDataAllKaryawan($jabatan)
    {
        $this->db->select('jabatan_karyawan');
        $this->db->where('jabatan_karyawan',$jabatan);
        return $this->db->get('tbl_karyawan')->num_rows();
    }

    //Add Data Karyawan
    public function addDataKaryawan($data)
    {
        $this->db->insert('tbl_karyawan', $data);
    }


    //Update Data Bonus
    public function updateBonus($data)
    {
        if($this->db->get('tbl_gaji')->result_array() == null){
            return $this->db->insert('tbl_gaji', $data);
        }else{
            return $this->db->update('tbl_gaji', $data);
        }
       
    }

    //Update Data Karyawan
    public function updateKaryawan($where ,$data)
    {
        $this->db->where_in('id_karyawan', $where);
        return $this->db->update('tbl_karyawan', $data);
    }

    //Delete Data Karyawan
    public function deleteKaryawan($id)
    {
        $this->db->where_in('id_karyawan', $id);
        return $this->db->delete('tbl_karyawan');
    }

    //Moonthly Data Archive
    public function archiveKaryawan($bulan)
    {   
        $this->db->select('waktu_rekap');
        $this->db->where('waktu_rekap', $bulan);
        $query = $this->db->get('tbl_karyawan_rekap');

        if($query->num_rows() != 0){
            $this->session->set_flashdata('flash', 'sudah-rekap');
            redirect('admin/laporan');
        }else{
                  
        foreach($this->db->get('tbl_karyawan')->result_array() as $value){
           
                $data_bonus = $this->getDataBonus();
                $bonus = $data_bonus[$value['jabatan_karyawan']] / 100 * $value['gaji_pokok']; 
                $pph = $data_bonus['PPh'] / 100 * $value['gaji_pokok'];
                $gaji_total = $value['gaji_pokok'] + $bonus - $pph;   
                   
                $data = array (
                    'nik_karyawan' => $value['nik_karyawan'],
                    'nama_karyawan' => $value['nama_karyawan'],
                    'alamat_karyawan' => $value['alamat_karyawan'],
                    'no_tlp' => $value['no_tlp'],
                    'jabatan_karyawan' => $value['jabatan_karyawan'],
                    'gaji_pokok' => $value['gaji_pokok'],
                    'gaji_total' => $gaji_total,
                    'waktu_rekap' => $bulan
                );
            $this->db->insert('tbl_karyawan_rekap', $data);
            }
            $this->session->set_flashdata('flash', 'berhasil-rekap');
            redirect('admin/laporan');   
        }
    }

    //Get Data Rekap
    public function getDataRekap()
    {
        $this->db->select('*');
        $this->db->from('tbl_karyawan_rekap');
        $result = $this->db->get()->result_array();
    
        return $result;
    }

    public function selectionDataRekap($bulan, $jabatan)
    {
        $this->db->select('*');
        $this->db->from('tbl_karyawan_rekap');
        $this->db->where('waktu_rekap', $bulan);
        if($jabatan != "All-In"){
            $this->db->where('jabatan_karyawan', $jabatan);
        }
        
        $result = $this->db->get()->result_array();

        return $result;
    }
}