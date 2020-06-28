<?php

    class Buku_tamu extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->library('session');
            $this->load->model('m_data');
        }
        public function index(){
            $data = array(
                'judul'=>'komentar',
                'data_komentar'=>$this->m_data->data_komentar(),
            );
            $this->load->view('assets/header.php');
            $this->load->view('v_buku_tamu.php',$data);
            $this->load->view('assets/footer.php');
        }

        public function addBuku(Type $var = null)
        {
            $this->form_validation->set_rules('judul', 'Judul', 'required|trim',array('required' => 'judul tidak boleh kosong.'));
            
            $this->form_validation->set_rules('isikomentar', 'Komentar', 'required|trim',array('required' => 'komentar tidak boleh kosong.'));
            
             if($this->form_validation->run() == false){
                $this->index();
            }else{
            $tujuan=$this->input->post('tujuan');
                if(empty($tujuan)){
                    $tujuanAll = 'umum';
                }else{
                    $tujuanAll = implode("_",$tujuan);
                }
            $data = array(
               
                'judul'=>htmlspecialchars($this->input->post('judul',true)),
                'komentar'=>htmlspecialchars($this->input->post('isikomentar',true)),
                'tujuan' => $tujuanAll,
                'username'=>htmlspecialchars($this->session->userdata('username'),true)
               
            );
            $this->m_data->input_komentar($data,'komentar');
            redirect('/Buku_tamu');
            }
        }



    }
?>