<?php

/**
 * 
 */
class Admin extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		if($this->session->userdata('role') != 'admin'){
			redirect('Login/cek_session');
		}
		$this->load->model('M_barangMasuk');
	}

	function index(){
		$data['jml_transaksiMasuk'] = $this->M_barangMasuk->getBarangMasuk()->num_rows();
		$this->load->view('template/header');
		$this->load->view('admin/index',$data);
		$this->load->view('template/footer');
	}

	function barang_masuk(){
		$data['barang_masuk'] = $this->M_barangMasuk->getBarangMasuk()->result_array();
		$this->load->view('template/header');
		$this->load->view('admin/barang_masuk',$data);
		$this->load->view('template/footer');
		
		
	}
}