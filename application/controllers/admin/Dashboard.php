<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		notLogin();
	}
	
	public function index()
	{	
		$this->load->model('m_karyawan');
		$data['jabatan_manager'] = $this->m_karyawan->getDataAllKaryawan('Manager');
		$data['jabatan_supervisor'] = $this->m_karyawan->getDataAllKaryawan('Supervisor');
		$data['jabatan_staff'] = $this->m_karyawan->getDataAllKaryawan('Staff');
		$data['page_title'] = 'Dasboard';
		
		$this->load->view('admin/dashboard/index', $data);
	}
}