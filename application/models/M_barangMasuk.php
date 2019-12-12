<?php

/**
 * 
 */
class M_barangMasuk extends CI_Model
{
	
	function getBarangMasuk(){
		return $this->db->get('transaksi_masuk');
	}

	function getBarangMasukNow($now){
		$sekarang = $this->db->escape($now);
		return $this->db->query("SELECT a.kd_barang_masuk as kode_transaksi,b.kd_barang as kode_barang,b.nama as nama_barang,c.nama as nama_suplier, a.tanggal as tanggal,a.jumlah as jumlah FROM barang_masuk a INNER JOIN barang b on a.kd_barang=b.kd_barang INNER JOIN suplier c ON a.kd_suplier=c.kd_suplier  WHERE month(tanggal) = ".$sekarang);
	}
}