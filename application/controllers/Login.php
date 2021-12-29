<?php

class Login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
		$this->load->model('AuthModel');
	}
	public function index(){
		$this->load->view('login');
	}

	public function prosesLogin(){
		$username = $this->input->post("username");
		$password = $this->input->post("password");
		$user = $this->AuthModel->periksaUser($username, $password);
		if (!$user){
			$this->session->set_flashdata('error', 'Login Gagal, Password atau Username Salah!');
			redirect('login');
		}else{
			$session = [
				'kode_user' => $user->kode_user,
				'username' => $user->username,
				'nama_user' => $user->nama,
				'role' => $user->role,
				'jam_login' => date('d F Y, h:i:s'),
				'is_login' => true
			];
			$this->session->set_flashdata('success', 'Login Berhasil');
			$this->session->set_flashdata($session);
			redirect('dashboard');

		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('login');
	}

}
