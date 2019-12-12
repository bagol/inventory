<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_barangKeluar extends CI_Model {

	function getBarangKeluar($where = ''){
		if($where !== ''){

		}else{
			return $this->db->get('transaksi_keluar');
		}
	}

	function getTransaksiKeluarNow($now){
		$sekarang = $this->db->escape($now);
		return $this->db->query('SELECT a.kd_barang_keluar as transaksi_keluar,b.kd_barang as kode_barang,b.nama as nama_barang,c.nama as nama_toko,a.jumlah as jumlah FROM barang_keluar a INNER JOIN barang b on a.kd_barang=b.kd_barang INNER JOIN toko c on a.toko=c.kd_toko where month(a.tanggal) ='.$sekarang);
	}
}

/* End of file M_barangKeluar.php */
/* Location: ./application/models/M_barangKeluar.php */