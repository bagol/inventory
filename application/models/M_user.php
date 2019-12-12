<?php


/**
 * 
 */
class M_user extends CI_Model
{
	
	function getUser($data){
		return $this->db->get_where('user',$data);
	}
}