<?php


/**
 * 
 */
class M_user extends CI_Model
{
	
	function getUser($where){
		return $this->db->get_where('user',$where);
	}

	function getUserAll(){
		return $this->db->get('user');
	}

	function insertUser($data){
		return $this->db->insert('user', $data);
	}

	function updateUser($where,$data){
		$this->db->where($where);
		return $this->db->update('user', $data);
	}

	function deleteUser($where){
		$this->db->where($where);
		return $this->db->delete('user');
	}
}