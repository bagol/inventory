<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include('Admin.php');
class Barang extends Admin {

	public function addBarang()
	{
		$data = array(
			'kd_barang' => $this->input->post('kode_barang'), 
			'nama'		=> $this->input->post('nama'),
			'stok'		=> $this->input->post('stok'),
			'deskripsi'	=> $this->input->post('deskripsi'),
			'gambar'	=> $this->uploadGambar('gambar')
		);
		if($this->M_barang->insertBarang($data)){
			$this->session->set_flashdata('msg_berhasil','Data Barang Berhasil ditambahkan');
			redirect('Admin/barang');
		}else{
			$this->session->set_flashdata('msg_gagal','Data Barang Gagal ditambahkan !!!');
			redirect($_SERVER['HTTP_REFERER']);
		}
	}

	function editBarang(){
		$kd_barang = $this->input->post('kode_barang');
		$data = array(
			'nama'		=> $this->input->post('nama'),
			'deskripsi'	=> $this->input->post('deskripsi'),
			'gambar'	=> $this->uploadGambar('gambar')
		);
		if ($this->M_barang->updateBarang($kd_barang, $data)) {
			$this->session->set_flashdata('msg_berhasil','Data Barang Berhasil diubah');
			redirect('Admin/barang');
		}else{
			$this->session->set_flashdata('msg_gagal','Data Barang Gagal diubah !!!');
			redirect($_SERVER['HTTP_REFERER']);
		}
	}

	function hapusBarang(){
		$kd_barang = $this->uri->segment(3);
		if($this->M_barang->deleteBarang(['kd_barang' => $kd_barang])){
			$this->session->set_flashdata('msg_berhasil','Data Barang Berhasil dihapus');
			redirect('Admin/barang');
		}else{
			$this->session->set_flashdata('msg_gagal','Data Barang Gagal Dihapus');
			redirect('Admin/barang');
		}
	}

	function uploadGambar($namaForm){
		$config['upload_path']          = './images/produk/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 5000;
        $config['file_name']			= time();

        $this->load->library('upload', $config);

        if ( $this->upload->do_upload($namaForm))
        {
    		return $this->upload->data('file_name');
        }

        return 'default.png';
	}

	function addBarangMasuk(){
		$kode_barang = $this->input->post('kd_barang');
		$stok =$this->input->post('jumlah');
		if($this->M_barang->addStok($kode_barang,$stok)){
			$data = array(
				'kd_barang_masuk' => $this->input->post('kode_barang_masuk'), 
				'kd_barang' => $kode_barang, 
				'kd_suplier' => $this->input->post('kd_suplier'), 
				'tanggal'	=> date_format(date_create(), 'Y-m-d'),
				'jumlah'	=> $this->input->post('jumlah')
			);
			if ($this->M_barangMasuk->insertTransaksiMasuk($data)) {
				$this->session->set_flashdata('msg_berhasil','Transaksi Berhasil');
				redirect('Admin/barang_masuk');
			}else{
				$this->session->set_flashdata('msg_gagal','Transaksi Gagal');
				redirect('Admin/barang_masuk');
			}
		}
	}

	function addBarangKeluar(){
		$kode_barang = $this->input->post('kd_barang');
		$stok =$this->input->post('jumlah');
		$cekstok = $this->M_barang->cekStok(['kd_barang' => $kode_barang])->row();
		
		if($stok <= (int)$cekstok->stok){
			if($this->M_barangKeluar->subStock($kode_barang,$stok)){
				$data = array(
					'kd_barang_keluar' => $this->input->post('kode_barang_keluar'), 
					'kd_barang' => $kode_barang, 
					'toko' => $this->input->post('kd_toko'), 
					'tanggal'	=> date_format(date_create(), 'Y-m-d'),
					'jumlah'	=> $this->input->post('jumlah')
				);
				if ($this->M_barangKeluar->insertTransaksiKeluar($data)) {
					$this->session->set_flashdata('msg_berhasil','Transaksi Berhasil');
					redirect('Admin/barang_keluar');
				}else{
					$this->session->set_flashdata('msg_gagal','Transaksi Gagal');
					redirect('Admin/barang_keluar');
				}
			}
		}else{
			$this->session->set_flashdata('msg_gagal','Transaksi Gagal Stok Tidak cukup');
			redirect('Admin/barang_keluar');
		}
		
	}

}

/* End of file Barang.php */
/* Location: ./application/controllers/Barang.php */