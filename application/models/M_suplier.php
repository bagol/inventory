<?php

/**
 * 
 */
class M_suplier extends CI_Model
{
	
	function getSuplier($where = ''){
		if($where !== ''){

		}else{
			return $this->db->get('suplier');
		}
	}
}