<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesan extends CI_Controller 
{
    public function index()
	{
        $this->load->view('template/header.php');
        $this->load->view('tampilan/pesan.php');
        $this->load->view('template/footer.php');
    }
}