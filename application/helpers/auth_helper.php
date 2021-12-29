<?php
function isLogin(){

	$CI = &get_instance();
	if (!$CI->session->userdata("is_login")){
		redirect(base_url('login'));
		exit;
	}
}

function getnamauserlogin(): string{
	$CI = &get_instance();
	return $CI->session->userdata("nama_user");
}

function getNumberUserLogin(): string {
	$CI = &get_instance();
	return $CI->session->userdata("kode_user");
}

function getUsernameLogin(): string {
	$CI = &get_instance();
	return $CI->session->userdata("username");
}

function getRoleUserLogin(): string{
	$CI = &get_instance();
	return $CI->session->userdata("role");
}
function getDateUserLogin(){
	$CI = &get_instance();
	return $CI->session->userdata("jam_login");
}
//
//function check_admin(){
//	$CI= &get_instance();
//	if ($CI->session->userdata("role") == 'Pengguna'){
//		redirect('dashboard');
//	}
//
//}
