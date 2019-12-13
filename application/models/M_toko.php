<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_toko extends CI_Model {

	function getToko($where = ''){
		if($where != ''){
			return $this->db->get_where('toko', $where);
		}else{
			return $this->db->get('toko');
		}
	}

	function getTokoId(){
		$this->db->select('kd_toko');
		$this->db->order_by('kd_toko', 'DESC');
		return $this->db->get('toko');
	}

	function insertToko($data){
		return $this->db->insert('toko', $data);
	}

	function updateToko($where,$data){
		$this->db->where($where);
		return $this->db->update('toko', $data);
	}

	function deleteToko($where){
		$this->db->where($where);
		return $this->db->delete('toko');
	}

}

/* End of file M_toko.php */
/* Location: ./application/models/M_toko.php */