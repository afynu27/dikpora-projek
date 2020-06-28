<?php

    class M_data extends CI_Model{
        public function input_data($data,$table)
        {
            $this->db->insert($table,$data);
        }

        public function input_komentar($data,$table)
        {
            $this->db->insert($table,$data);
        }

        public function data_komentar()
        {
            $query = $this->db->query("select * from komentar");
            return $query->result();
        }

    }

?>