<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesan extends CI_Controller 
{
    public function index()
	{
        $data['title'] = 'Pesan';
        $this->load->view('template/header.php',$data);
        $this->load->view('tampilan/pesan.php',$data);
        $this->load->view('template/footer.php');
    }
}