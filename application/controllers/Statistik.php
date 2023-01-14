<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Statistik extends CI_Controller 
{
    public function index()
	{
        $this->load->view('template/header.php');
        $this->load->view('tampilan/statistik.php');
        $this->load->view('template/footer.php');
    }
}