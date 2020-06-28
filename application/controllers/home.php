<?php

    class home extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->library('session');
            if($this->session->userdata('login')==null){
                $this->session->set_userdata('hideOrShow','none');
            }else{
                $this->session->set_userdata('hideOrShow','block');
            }
    
        }
        public function index(){
            $this->load->view('assets/header.php');
            $this->load->view('v_home.php');
            $this->load->view('assets/footer.php');
        }

        public function logout(){
            $this->session->sess_destroy();
            redirect('/home');
        }
       

    
    }
?>