<?php
include('Admin.php');
defined('BASEPATH') OR exit('No direct script access allowed');

class Suplier extends Admin {

	function addSuplier(){
		$data = array(
			'kd_suplier'	=> $this->input->post('kd_suplier'),
			'nama'	=> $this->input->post('nama'),
			'no_tlp'	=> $this->input->post('no_tlp'),
			'email'	=> $this->input->post('email'),
			'alamat'	=> $this->input->post('alamat')
		);

		if($this->M_suplier->insertSuplier($data)){
			$this->session->set_flashdata('msg_berhasil','Data Suplier Berhasil ditambahkan');
			redirect('Admin/suplier','refresh');
		}else{
			$this->session->set_flashdata('msg_gagal','Data Suplier Gagal ditambahkan');
			redirect($_SERVER['HTTP_REFERER']);
		}
	}

	function editSuplier(){
		$data = array(
			'nama' => $this->input->post('nama'), 
			'no_tlp' => $this->input->post('no_tlp'),
			'email' => $this->input->post('email'),
			'alamat' => $this->input->post('alamat'),
		);
		$kd_suplier = $this->input->post('kd_suplier');

		if ($this->M_suplier->updateSuplier(['kd_suplier' => $kd_suplier],$data)) {
			$this->session->set_flashdata('msg_berhasil','Data Suplier Berhasil diubah');
			redirect('Admin/suplier','refresh');
		}else{
			$this->session->set_flashdata('msg_gagal','Data Suplier Gagal diubah');
			redirect($_SERVER['HTTP_REFERER']);
		}

	}

	function deleteSuplier(){
		$kd_suplier = $this->uri->segment(3);
		if ($this->M_suplier->deleteSuplier(['kd_suplier' => $kd_suplier])) {
			$this->session->set_flashdata('msg_berhasil','Data Suplier Berhasil dihapus');
			redirect('Admin/suplier','refresh');
		}else{
			$this->session->set_flashdata('msg_gagal','Data Suplier Gagal dihapus');
			redirect($_SERVER['HTTP_REFERER']);
		}
	}

}

/* End of file Suplier.php */
/* Location: ./application/controllers/Suplier.php */