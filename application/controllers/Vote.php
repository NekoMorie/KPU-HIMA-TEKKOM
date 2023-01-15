<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vote extends CI_Controller 
{
    function __construct()
    {
        parent::__construct();

        if (!$this->session->userdata('token')) {
            redirect('auth');
        }

        // Load form validation library
        $this->load->library('form_validation');

        // Load model
        $this->load->model('view_model');
    }
    public function index()
	{
        $data['peserta'] = $this->view_model->getId($this->session->userdata('user_id'));
        $data['statusvote'] = $this->view_model->getVote($this->session->userdata('user_id'));
        $data['paslon'] = $this->view_model->getPaslon();
        // var_dump($data);
        // die();

        $this->form_validation->set_rules('vote', 'Vote', 'required');
        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Halaman Vote';
            $this->load->view('template/header.php');
            $this->load->view('tampilan/vote.php',$data);
            $this->load->view('template/footer.php');
        } else {
            $this->vote();
        }
    }
    private function vote()
    {
        $vote = $this->input->post('vote');
        $cekvote = $this->view_model->getVote($this->session->userdata('user_id'));
        if ($cekvote == 0) {
            $data = [
                'peserta_id' => $this->session->userdata('user_id'),
                'paslon_id' => $vote
            ];
            $this->db->insert('tb_vote', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Anda Berhasil di Simpan</div>');
            redirect('vote');
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Anda hanya berhak memilih satu kali</div>');
            redirect('vote');
        }
    }
}