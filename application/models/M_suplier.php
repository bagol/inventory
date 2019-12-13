<?php

/**
 * 
 */
class M_suplier extends CI_Model
{
	
	function getSuplier($where = ''){
		if($where != ''){
			return $this->db->get_where('suplier',$where);
		}else{
			return $this->db->get('suplier');
		}
	}

	function getSuplierId(){
		$this->db->select('kd_suplier');
		$this->db->order_by('kd_suplier', 'DESC');
		return $this->db->get('suplier');
	}

	function insertSuplier($data){
		return $this->db->insert('suplier', $data);
	}

	function updateSuplier($where,$data){
		$this->db->where($where);
		return $this->db->update('suplier', $data);

	}

	function deleteSuplier($where){
		$this->db->where($where);
		return $this->db->delete('suplier');
	}
}