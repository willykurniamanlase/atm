<?php

class Dashboard extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		//isLogin();
		date_default_timezone_set('Asia/Jakarta');

	}

	public function index(){
		$data = [
			'title' => "Dashboard",
			'page' => 'content/dashboard'
		];

		$this->load->view('layout/main', $data);
	}

}
