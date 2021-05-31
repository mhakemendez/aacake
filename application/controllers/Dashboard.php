<?php

class Dashboard extends CI_Controller 
{
    function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('uname')) {
            redirect('login');
        }
    }
    
    public function index()
        
    {

        $this->load->model('Dashboard_Model');
        $data['gallery'] = $this->Dashboard_Model->fetch();

        $this->load->view('dashboard/dashboard-header');
        $this->load->view('dashboard',$data);
        $this->load->view('dashboard/dashboard-footer');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');

    }

    

}
