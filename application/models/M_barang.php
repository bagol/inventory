<?php

/**
 * 
 */
class M_barang extends CI_Model
{
	
	function getBarang(){
		return $this->db->get('barang');
	}

	function getBarangWhere($where){
		return $this->db->get_where('barang', $where);
	}

	function getBarangId(){
		$this->db->select('kd_barang');
		$this->db->order_by('kd_barang', 'DESC');
		return $this->db->get('barang');
	}

	function insertBarang($data){
		return $this->db->insert('barang', $data);
	}

	function updateBarang($where,$data){
		$this->db->set($data);
		$this->db->where('kd_barang',$where);
		return $this->db->update('barang');
	}

	function addStok($where,$stok){
		$where = $this->db->escape($where);
		$stok = $this->db->escape($stok);
		return $this->db->query('update barang set stok = stok +'.$stok.'where kd_barang ='.$where);
	}

	function deleteBarang($where){
		$this->db->where($where);
		return $this->db->delete('barang');
	}

	function cekStok($where){
		$this->db->select('stok');
		return $this->db->get_where('barang', $where);
	}
}