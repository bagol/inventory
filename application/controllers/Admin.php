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
		$kode = $this->M_barangMasuk->getTransaksiMasukId()->row();
		$kode = substr($kode->kode_barang_masuk, 3) + 1;
		$data['kode_transaksi'] = 'BM-'.$kode;
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
		$kode = $this->M_suplier->getSuplierId()->row();
		$kode = substr($kode->kd_suplier,2) + 1;
		$data['kode_suplier'] = 'S-'.$kode;
		$data['title'] = 'Data Suplier | '.$this->session->userdata('role');
		$this->load->view('template/header',$data);
		$this->load->view('admin/suplier/addSuplier',$data);
		$this->load->view('template/footer');
	}

	function editSuplier(){
		$data['suplier'] = $this->M_suplier->getSuplier(['kd_suplier' => $this->uri->segment(3)])->row();
		$data['title'] = 'Ubah Data Suplier | '.$this->session->userdata('role');
		$this->load->view('template/header',$data);
		$this->load->view('admin/suplier/editSuplier',$data);
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
		$kode = $this->M_barangKeluar->getTransaksikeluarId()->row();
		$kode = substr($kode->kode_transaksi, 3) + 1;
		$data['kode'] = 'BK-'.$kode;
		$data['tokos'] = $this->M_toko->getToko()->result_array();
		$data['title'] = 'Tambah Barang Keluar | '.$this->session->userdata('role');
		$data['barang'] = $this->M_barang->getBarang()->result_array();
		$this->load->view('template/header',$data);
		$this->load->view('admin/barang_keluar/add_barang_keluar',$data);
		$this->load->view('template/footer');
	}

	function user(){
		$data['title'] = 'Data User | '.$this->session->userdata('role');
		$data['users'] = $this->M_user->getUserAll()->result_array();
		$this->load->view('template/header',$data);
		$this->load->view('admin/user/data_user');
		$this->load->view('template/footer');
	}

	function addUser(){
		$data['title'] = 'Tambah Data User | '.$this->session->userdata('role');
		$this->load->view('template/header',$data);
		$this->load->view('admin/user/addUser',$data);
		$this->load->view('template/footer');
	}

	function editUser(){
		$data['user'] = $this->M_user->getUser(['kd_user' => $this->uri->segment(3)])->row();
		$data['title'] = 'Tambah Data User | '.$this->session->userdata('role');
		$this->load->view('template/header',$data);
		$this->load->view('admin/user/editUser',$data);
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
		$kd_toko = $this->M_toko->getTokoId()->row();
		$kd_toko = substr($kd_toko->kd_toko, 2) + 1;
		$data['kd_toko'] = 'T-'.$kd_toko;
		$data['title'] = 'Tambah Data Toko | '.$this->session->userdata('role');
		$this->load->view('template/header',$data);
		$this->load->view('admin/toko/addToko');
		$this->load->view('template/footer');
	}

	function editToko(){
		$data['toko'] = $this->M_toko->getToko(['kd_toko' => $this->uri->segment(3)])->row();
		$data['title'] = 'Tambah Data Toko | '.$this->session->userdata('role');
		$this->load->view('template/header',$data);
		$this->load->view('admin/toko/editToko',$data);
		$this->load->view('template/footer');
	}

	function barang(){
		$data['title'] = 'Data Barang | '.$this->session->userdata('role');
		$data['barangs'] = $this->M_barang->getBarang()->result_array();
		$this->load->view('template/header',$data);
		$this->load->view('admin/barang/data_barang',$data);
		$this->load->view('template/footer');
	}

	function addBarang(){
		$kode = $this->M_barang->getBarangId()->row();
		$kode = substr($kode->kd_barang,2);
		$hasil = $kode + 1;
		$data['kode_barang'] = 'B-'.$hasil;
		$data['title'] = 'Tambah Data Barang | '.$this->session->userdata('role');
		$this->load->view('template/header',$data);
		$this->load->view('admin/barang/addBarang',$data);
		$this->load->view('template/footer');
	}

	function editBarang(){
		$data['title'] = 'Ubah Data Barang | '.$this->session->userdata('role');
		$data['barang'] = $this->M_barang->getBarangWhere(['kd_barang' => $this->uri->segment(3)])->row();
		$this->load->view('template/header',$data);
		$this->load->view('admin/barang/updateBarang',$data);
		$this->load->view('template/footer');
	}
}