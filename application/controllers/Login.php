<?php
    class Login extends CI_controller{
        public function __construct(){
            parent::__construct();
            $this->load->model('m_data');
            $this->load->model('m_login');
            $this->load->library('session');
        // public function index(){
           
         }

        public function login(){
            $this->load->view('assets/header.php');
            $this->load->view('v_login.php');
            $this->load->view('assets/footer.php');
        }

        public function registrasi(){
            $this->load->view('assets/header.php');
            $this->load->view('v_registrasi.php');
            $this->load->view('assets/footer.php');
        }

       
// ddddddddddddddddddddddddddddddddddddddd
public function addUser(){
    $this->form_validation->set_rules('nama', 'Name', 'required|trim',array('required' => 'Nama tidak boleh kosong.'));
    $this->form_validation->set_rules('username', 'Name', 'required|trim|is_unique[akun.username]',[
        'is_unique' => 'Username telah digunakan!',
        'required' => 'Username tidak boleh kosong.'
        ]);
    $this->form_validation->set_rules('telpon', 'Number', 'required|trim',array('required' => 'nomer telpon  tidak boleh kosong.'));
    $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[akun.email]',[
        'is_unique' => 'Email telah digunakan!',
        'required' => 'Email tidak boleh kosong.'
        ]);
    $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]|matches[repassword]',[
        'matches' => 'Password dan re-Password tidak sama!',
        'min_length' => 'Password terlalu pendek!',
        'required' => 'Password tidak boleh kosong.'
        ]);
    $this->form_validation->set_rules('repassword', 'Password', 'required|trim|matches[password]',array('required' => 're-Password tidak boleh kosong.','matches' => 'Password dan re-Password tidak sama!'));

    if($this->form_validation->run() == false){
   $this->registrasi();
}
else{
    $data = array(
               
        'username'=>htmlspecialchars($this->input->post('username',true)),
        'nama'=>htmlspecialchars($this->input->post('nama',true)),
        'email'=>htmlspecialchars($this->input->post('email',true)),
        'nomer_telpon'=>htmlspecialchars($this->input->post('telpon',true)),
        'password'=>htmlspecialchars($this->input->post('password',true))
        
    );
    $this->m_data->input_data($data,'akun');
    redirect('/Login/login');
}
}
// sssssssssssssssssssssssssssssssssss
        public function logValidate()
        {
            
            $this->form_validation->set_rules('username', 'Name', 'required',array('required' => 'username tidak boleh kosong.'));
            $this->form_validation->set_rules('password', 'password', 'required',array('required' => 'Password tidak boleh kosong.'));
            
            $username = htmlspecialchars($this->input->post('username',true));
            $password = htmlspecialchars($this->input->post('password',true));

            if($this->form_validation->run() != false){
                
                $res = $this->m_login->cekAkun($username,$password);
                
                if($res){
                            $this->session->set_userdata('nama',$res['nama']);
                            $this->session->set_userdata('username',$res['username']);
                            $this->session->set_userdata('login',true);
                            redirect('/home');
                }else{
                    $this->session->set_flashdata('pesan_flash', 'Akun tidak di temukan');
                    $this->login();
                }
            }else{
                $this->login();
            }
                      
                }
            
    }
?>