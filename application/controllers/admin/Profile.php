<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		notLogin();
	}
	
	public function index()
	{
        $data['page_title'] = 'Profile';
        $this->load->view('admin/businesslogic/v_profile', $data);
      
	}

}