<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Logout extends CI_Controller
{

    public function index()
    {
        $this->session->unset_userdata('token');
        $this->session->unset_userdata('user_id');
        redirect('auth');
    }
}
