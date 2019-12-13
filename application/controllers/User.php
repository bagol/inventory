<?php
include('Admin.php');
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends Admin {

	public function addUser()
	{
		$data = array(
			'kd_user'	=> $this->input->post('kd_user'),
			'nama'	=> $this->input->post('nama'),
			'email'	=> $this->input->post('email'),
			'no_tlp'	=> $this->input->post('no_tlp'),
			'password'	=> password_hash($this->input->post('password'), PASSWORD_DEFAULT,['cons' => 12]),
			'role'	=> $this->input->post('role')
		);
		if($this->M_user->insertUser($data)){
			$this->session->set_flashdata('msg_berhasil','Data user Berhasil ditambahkan');
			redirect('Admin/user');
		}else{
			$this->session->set_flashdata('msg_gagal','Data user Gagal ditambahkan !!!');
			redirect($_SERVER['HTTP_REFERER']);
		}
	}

	public function editUser()
	{
		$data = array(
			'nama'	=> $this->input->post('nama'),
			'email'	=> $this->input->post('email'),
			'no_tlp'	=> $this->input->post('no_tlp'),
			'password'	=> password_hash($this->input->post('password'), PASSWORD_DEFAULT,['cons' => 12]),
			'role'	=> $this->input->post('role')
		);
		if ($this->M_user->updateUser(['kd_user'	=> $this->input->post('kd_user')],$data)) {
			$this->session->set_flashdata('msg_berhasil','Data User Berhasil diubah');
			redirect('Admin/user','refresh');
		}else{
			$this->session->set_flashdata('msg_gagal','Data User Gagal diubah');
			redirect($_SERVER['HTTP_REFERER']);
		}
	}

	public function deleteUser(){
		$kd_user = $this->uri->segment(3);
		if ($this->M_user->deleteUser(['kd_user' => $kd_user])) {
			$this->session->set_flashdata('msg_berhasil','Data User Berhasil dihapus');
			redirect('Admin/user','refresh');
		}else{
			$this->session->set_flashdata('msg_gagal','Data User Gagal dihapus');
			redirect($_SERVER['HTTP_REFERER']);
		}
	}

}

/* End of file User.php */
/* Location: ./application/controllers/User.php */