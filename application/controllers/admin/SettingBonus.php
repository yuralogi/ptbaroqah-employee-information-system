<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SettingBonus extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		notLogin();
		isAdmin();
	}
	
	public function index()
	{	
		
		//Cek validasi data
        $this->form_validation->set_rules('bonusManager','Username','required|max_length[3]');
        $this->form_validation->set_rules('bonusSupervisor','Username','required|max_length[3]');
		$this->form_validation->set_rules('bonusStaff','Username','required|max_length[3]');
		$this->form_validation->set_rules('pph','Username','required|max_length[3]');

		if ($this->form_validation->run() == false) {
            $data['page_title'] = 'Setting | Bonus';
			$this->load->model('m_karyawan');
			$data['data_bonus'] = $this->m_karyawan->getDataBonus();
			
            $this->load->view('admin/businesslogic/v_setting_bonus', $data);
        } else {
			//Validasi Lolos
            $this->_updateBonus();
        }

	}

	private function _updateBonus()
	{
		$data = array (
			'bonus_manager' => $this->input->post('bonusManager'),
			'bonus_supervisor' => $this->input->post('bonusSupervisor'),
			'bonus_staff' => $this->input->post('bonusStaff'),
			'pph' => $this->input->post('pph')
		);

		$this->M_Karyawan->updateBonus($data);

		$this->session->set_flashdata('flash', 'berhasil-diupdate');
		redirect('admin/settingbonus');
	}

    
}