<?php
class M_Karyawan extends CI_Model
{
    //Get Data Karyawan | Manager
    public function getDataManager()
    {
        $this->db->select('*');
        $this->db->from('tbl_karyawan');
        $this->db->where('jabatan_karyawan','Manager');
        $result = $this->db->get()->result_array();

        return $result;
    }

    //Get Data Karyawan | Supervisor
    public function getDataSupervisor()
    {
        $this->db->select('*');
        $this->db->from('tbl_karyawan');
        $this->db->where('jabatan_karyawan','Supervisor');
        $result = $this->db->get()->result_array();

        return $result;
    }

    //Get Data Karyawan | Staff
    public function getDataStaff()
    {
        $this->db->select('*');
        $this->db->from('tbl_karyawan');
        $this->db->where('jabatan_karyawan','Staff');
        $result = $this->db->get()->result_array();

        return $result;
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

    //Add Data Karyawan
    public function addDataKaryawan($data)
    {
        $this->db->insert('tbl_karyawan', $data);
        // var_dump($data);
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
    public function deleteKaryawan($id){
        $this->db->where_in('id_karyawan', $id);

        return $this->db->delete('tbl_karyawan');
    }
}