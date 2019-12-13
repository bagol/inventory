<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_toko extends CI_Controller {

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

/* End of file Admin_toko.php */
/* Location: ./application/controllers/Admin_toko.php */