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
		$data['title'] = 'Dashboard |'.$this->session->userdata('role');
		$this->load->view('template/header', $data);
		$this->load->view('toko/index');
		$this->load->view('template/footer');
	}

	function permintaan(){
		$data['title'] = 'Permintaan Stok |'.$this->session->userdata('role');
		$this->load->view('template/header', $data);
		$this->load->view('toko/permintaan/index');
		$this->load->view('template/footer');
	}

	function laporan(){
		$data['title'] = 'Laporan |'.$this->session->userdata('role');
		$this->load->view('template/header', $data);
		$this->load->view('admin/laporan/index');
		$this->load->view('template/footer');
	}
}

/* End of file Admin_toko.php */
/* Location: ./application/controllers/Admin_toko.php */