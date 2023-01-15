<?php 
class view_model extends CI_Model {

        public function getId($id)
        {
            $this->db->select('*');
            $this->db->from('tb_peserta');
            $this->db->where('id', $id);
            return $this->db->get()->row_array();
        }
        public function getVote($id)
        {
            $this->db->select('*');
            $this->db->from('tb_vote');
            $this->db->where('peserta_id', $id);
            return $this->db->get()->num_rows();
        }
        public function getPaslon()
        {
            $this->db->select('*');
            $this->db->from('tb_paslon');
            return $this->db->get()->result_array();
        }
        public function getSuara($id)
        {
            $this->db->select('*');
            $this->db->from('tb_vote');
            $this->db->where('paslon_id', $id);
            return $this->db->get()->num_rows();
        }
        public function getAllSuara()
        {
            $this->db->select('*');
            $this->db->from('tb_vote');
            return $this->db->get()->num_rows();
        }
        public function getAllPeserta(){
            $this->db->select('*');
            $this->db->from('tb_peserta');
            return $this->db->get()->num_rows();
        }
}


?>