<?php

    class M_login extends CI_Model{
       

        public function cekAkun($user,$pass)
        {
            $this->db->select('*');
            $this->db->from('akun');
            $this->db->where('username', $user);
            $this->db->where('password', $pass);
            if($query = $this->db->get()){
                return $query->row_array();
            }else{
                return false;
            }
        }
        
    }

?>