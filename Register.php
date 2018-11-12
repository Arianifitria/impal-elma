<?php

class Register extends CI_Controller {

        function __construct(){
                parent::__construct();  
                        $this->load->model('m_register');
                        $this->load->helper('url');
        }
 
        function index(){
                $this->load->view('register');
        }
        
 
        function register(){
            $id_akun = $this->input->post('id_akun');
            $nama_akun = $this->input->post('nama_akun'); 
            $pass_akun = $this->input->post('pass_akun');
            $email_akun = $this->input->post('email_akun');
            $status = $this->input->post('status');
            $data = array(
                    'id_akun' => $id_akun,
                    'nama_akun' => $nama_akun,
                    'pass_akun' => $pass_akun,
                    'email_akun' => $email_akun,
                    'status' => $status
                    );
            $this->m_register->input_data($data,'akun');
            redirect('Login/index');
            
        }
}