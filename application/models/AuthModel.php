<?php

class AuthModel extends CI_Model
{
	public function periksaUser($username, $password){
		$this->db->where('username', $username);
		$user = $this->db->get("user")->row();
		if (!$user){
			return false;
		}
		$passwordFromDB = $user->password;
		if (!password_verify($password, $passwordFromDB)){
			return false;
		}
		return $user;
	}
	public function user_login(){
		$this->ci->load->model('UserModel');
		$kodeUser = $this->ci->session->userdata('kode_user');
		$user_data = $this->ci->UserModel->get($kodeUser)->row();
		return $user_data;
	}

}
