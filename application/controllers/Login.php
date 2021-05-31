<?php

class Login extends CI_Controller 
{
    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('uname')) {
            redirect('dashboard');
        }
    }
    
    public function index()
        
    {
        $this->load->view('templates/header');
        $this->load->view('login');
        $this->load->view('templates/footer');
    }

    public function login_validation()

    {

        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));

       $this->load->model('Login_Model');
       $check = $this->Login_Model->login($username,$password);

        if ($check) 
        {
            $data = array(
                'upass'     =>  $password,  
                'uname'     =>  $username
                
            );
            
            $this->session->set_userdata($data);
            redirect('dashboard');
        }

       else
       {
           redirect('login');
       }

    }

}
