<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller 
{
    public function index()
	{
		// $this->form_validation->set_rules('nim', 'Nomor Induk', 'required');
		// $this->form_validation->set_rules('tgl_lahir', 'Tanggal lahir', 'required');
		// if($this->form_validation->run() == FALSE){
		// 	$this->load->view('auth/login');
		// }else{
		// 	$this->_login();
		// }
		$this->load->view('auth/login');

	}
	public function _login(){
		
	}
	public function logout()
	{
		$this->load->view('auth/login');
	}
}