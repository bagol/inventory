<?php

/**
 * 
 */
class Login extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_user');

	}

	function index(){
		$this->load->view('login/index');
	}

	function verifikasi(){
		$username = $this->input->post('username');
	
		$user = $this->M_user->getUser(['nama' => $username])->num_rows();
		if($user > 0){
			$user = $this->M_user->getUser(['nama' => $username])->row();

			if (password_verify($this->input->post('password'), $user->password)) {
				$user =[
					'username' => $user->nama,
					'role'	   => $user->role
				];
				$this->session->set_userdata($user);
				redirect('Login/cek_session');
			}else{
				$this->session->set_flashdata('msg_gagal','Password Salah');
				redirect('Login/cek_session');
			}
		}else{
			$this->session->set_flashdata('msg_gagal',"Username Tidak Terdaftar !!!");
			redirect('Login/cek_session');
		}
		
	}

	function cek_session(){

		
		if ($this->session->userdata('role') === 'admin') {
			redirect('Admin');
		}else if($this->session->userdata('role') === 'admin_toko'){
			redirect('Admin_toko');
		}else{
			redirect('Login');
		}
	}

	function logOut(){

		$this->session->unset_userdata(['role','username']);
		$this->session->sess_destroy();
		redirect('Login','refresh');
	}
}