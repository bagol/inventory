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
		$this->load->model('M_suplier');
		$this->load->model('M_barang');
		$this->load->model('M_barangKeluar');
		$this->load->model('M_toko');
		$this->load->model('M_user');
	}

	function index(){
		$data['title'] = 'Dashboard | '.$this->session->userdata('role');
		$data['jml_transaksiMasuk'] = $this->M_barangMasuk->getBarangMasuk()->num_rows();
		$data['jml_transaksiKeluar'] = $this->M_barangKeluar->getBarangKeluar()->num_rows();
		$data['total_barang'] = $this->M_barang->getBarang()->num_rows();
		$data['total_toko'] = $this->M_toko->getToko()->num_rows();
		$data['total_suplier'] = $this->M_suplier->getSuplier()->num_rows();
		$data['total_user'] = $this->M_user->getUserAll()->num_rows();
		$data['transaksi_bulan_ini'] = $this->M_barangMasuk->getBarangMasukNow(12)->result_array();
		$data['transaksi_keluar_bulan_ini'] = $this->M_barangKeluar->getTransaksiKeluarNow(12)->result_array();
		$this->load->view('template/header',$data);
		$this->load->view('admin/index',$data);
		$this->load->view('template/footer');
	}

	function barang_masuk(){
		$data['title'] = 'barang masuk | '.$this->session->userdata('role');
		$data['barang_masuk'] = $this->M_barangMasuk->getBarangMasuk()->result_array();
		$this->load->view('template/header',$data);
		$this->load->view('admin/barang_masuk/barang_masuk',$data);
		$this->load->view('template/footer');
	}

	function addBarangMasuk(){
		$data['supliers'] = $this->M_suplier->getSuplier()->result_array();
		$data['title'] = 'Tambah Barang Masuk | '.$this->session->userdata('role');
		$data['barang'] = $this->M_barang->getBarang()->result_array();
		$this->load->view('template/header',$data);
		$this->load->view('admin/barang_masuk/add_barang_masuk',$data);
		$this->load->view('template/footer');
	}

	function suplier(){
		$data['title'] = 'Data Suplier | '.$this->session->userdata('role');
		$data['supliers'] = $this->M_suplier->getSuplier()->result_array();
		$this->load->view('template/header',$data);
		$this->load->view('admin/suplier/data_suplier',$data);
		$this->load->view('template/footer');
	}

	function addSuplier(){
		$data['title'] = 'Data Suplier | '.$this->session->userdata('role');
		$this->load->view('template/header',$data);
		$this->load->view('admin/suplier/addSuplier',$data);
		$this->load->view('template/footer');
	}

	function barang_keluar(){
		$data['title'] = 'barang keluar | '.$this->session->userdata('role');
		$data['barang_keluar'] = $this->M_barangKeluar->getBarangKeluar()->result_array();
		$this->load->view('template/header',$data);
		$this->load->view('admin/barang_keluar/barang_keluar',$data);
		$this->load->view('template/footer');
	}

	function addBarangKeluar(){
		$data['tokos'] = $this->M_toko->getToko()->result_array();
		$data['title'] = 'Tambah Barang Keluar | '.$this->session->userdata('role');
		$data['barang'] = $this->M_barang->getBarang()->result_array();
		$this->load->view('template/header',$data);
		$this->load->view('admin/barang_keluar/add_barang_keluar',$data);
		$this->load->view('template/footer');
	}

	function user(){
		$data['title'] = 'Data User | '.$this->session->userdata('role');
		$data['supliers'] = $this->M_user->getUserAll()->result_array();
		$this->load->view('template/header',$data);
		$this->load->view('admin/user/data_user',$data);
		$this->load->view('template/footer');
	}

	function addUser(){
		$data['title'] = 'Tambah Data User | '.$this->session->userdata('role');
		$this->load->view('template/header',$data);
		$this->load->view('admin/user/addUser',$data);
		$this->load->view('template/footer');
	}

	function toko(){
		$data['title'] = 'Data Toko | '.$this->session->userdata('role');
		$data['tokos'] = $this->M_toko->getToko()->result_array();
		$this->load->view('template/header',$data);
		$this->load->view('admin/toko/data_toko',$data);
		$this->load->view('template/footer');
	}
	function addToko(){
		$data['title'] = 'Tambah Data Toko | '.$this->session->userdata('role');
		$this->load->view('template/header',$data);
		$this->load->view('admin/toko/addToko',$data);
		$this->load->view('template/footer');
	}
}