<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Statistik extends CI_Controller 
{
    function __construct()
    {
        parent::__construct();

        // Load model
        $this->load->model('view_model');
    }
    public function index()
	{
        $data['paslon'] = $this->view_model->getPaslon();
        $data['totalsuara'] = $this->view_model->getAllSuara();
        $data['peserta'] = $this->view_model->getAllPeserta();
        $data['title'] = 'Statistik';
        $this->load->view('template/header.php',$data);
        $this->load->view('tampilan/statistik.php', $data);
        $this->load->view('template/footer.php');
    }
}