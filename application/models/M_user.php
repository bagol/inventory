<?php


/**
 * 
 */
class M_user extends CI_Model
{
	
	function getUser($data){
		return $this->db->get_where('user',$data);
	}

	function getUserAll(){
		return $this->db->get('user');
	}
}