<?php

class UserModel extends CI_Model
{
	var $table = 'user';

	public function getAll(){
		$query = $this->db->get($this->table);
		return $query->result();
	}


//	public function user_login(){
//		$this->ci->load->model('UserModel');
//		$kodeUser = $this->ci->session->userdata('kode_user');
//		$user_data = $this->ci->UserModel->get($kodeUser)->row();
//		return $user_data;
//	}


}
