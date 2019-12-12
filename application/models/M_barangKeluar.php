<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_barangKeluar extends CI_Model {

	function getBarangKeluar($where = ''){
		if($where !== ''){

		}else{
			return $this->db->get('transaksi_keluar');
		}
	}

}

/* End of file M_barangKeluar.php */
/* Location: ./application/models/M_barangKeluar.php */