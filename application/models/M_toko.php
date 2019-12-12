<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_toko extends CI_Model {

	function getToko($where = ''){
		if($where !== ''){

		}else{
			return $this->db->get('toko');
		}
	}

}

/* End of file M_toko.php */
/* Location: ./application/models/M_toko.php */