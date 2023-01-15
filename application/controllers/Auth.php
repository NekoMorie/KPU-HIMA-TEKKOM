<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller 
{
    public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('token')) {
			redirect('auth');
		}
		$this->load->library('form_validation');
	}
	public function index()
	{
		$this->form_validation->set_rules('token', 'Token', 'required');
		$data['title']= 'Login';
		if ($this->form_validation->run() == false) {
			$this->load->view('auth/login',$data);
		} else {
			$this->_login();
		}
		// $this->_login();
	}
	public function _login(){
		$toked = $this->input->post('token');

		$users = $this->db->get_where('tb_peserta', ['token' => $toked])->row_array();
		// var_dump($users);
		// die;

		if ($users) {
			if ($users['token'] == $toked) {
				$data = [
					'token' => $users['token'],
					'user_id' => $users['id']
				];
				$this->session->set_userdata($data);
				redirect('vote');
			} 
		} else {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Mohon Maaf, Token anda tidak teregistrasi</div>');
			redirect('');
		}
	}
}