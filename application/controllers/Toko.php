<?php
include('Admin.php');
/**
 * 
 */
class Toko extends Admin
{
	function addToko(){
		$data = array(
			'kd_toko' => $this->input->post('kd_toko'),
			'nama' => $this->input->post('nama'),
			'no_tlp' => $this->input->post('no_tlp'),
			'email' => $this->input->post('email'), 
			'alamat' => $this->input->post('alamat')
		);
		if($this->M_toko->insertToko($data)){
			$this->session->set_flashdata('msg_berhasil','Data Toko Berhasil ditambahkan');
			redirect('Admin/toko');
		}else{
			$this->session->set_flashdata('msg_gagal','Data Toko Gagal ditambahkan !!!');
			redirect($_SERVER['HTTP_REFERER']);
		}
	}

	function editToko(){
		$data = array(
			'nama' => $this->input->post('nama'),
			'no_tlp' => $this->input->post('no_tlp'),
			'email' => $this->input->post('email'), 
			'alamat' => $this->input->post('alamat')
		);
		if ($this->M_toko->updateToko(['kd_toko' => $this->input->post('kd_toko')], $data)) {
			$this->session->set_flashdata('msg_berhasil','Data Toko Berhasil diubah');
			redirect('Admin/toko');
		}else{
			$this->session->set_flashdata('msg_gagal','Data Toko Gagal diubah !!!');
			redirect($_SERVER['HTTP_REFERER']);
		}
	}

	function deleteToko(){
		if($this->M_toko->deleteToko(['kd_toko' => $this->uri->segment(3)])){
			$this->session->set_flashdata('msg_berhasil','Data Toko Berhasil dihapus');
			redirect('Admin/toko');
		}else{
			$this->session->set_flashdata('msg_gagal','Data Toko Gagal Dihapus');
			redirect('Admin/toko');
		}
	}
}