<?php

class User extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		//isLogin();
		$this->load->model(['UserModel']);
	}
	public function index(){
		$data = [
			'title' => 'List User',
			'page' => 'content/user'
		];
		$this->load->view('layout/main' , $data);
	}
}
