<?php

/**
 * 
 */
class Toko extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		if($this->session->userdata('role') != 'admin_toko'){
			redirect('Login/cek_session');
		}
	}

	function index(){
		$this->load->view('toko/index');
	}
}