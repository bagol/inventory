<?php

/**
 * 
 */
class M_barang extends CI_Model
{
	
	function getBarang(){
		return $this->db->get('barang');
	}

	function barangMasukWhere(){

	}
}