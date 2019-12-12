<?php

/**
 * 
 */
class M_barangMasuk extends CI_Model
{
	
	function getBarangMasuk(){
		return $this->db->get('transaksi_masuk');
	}
}