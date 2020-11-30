<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if($this->session->userdata('id'))
        {
            redirect('private_area');
        }
        $this->load->library('form_validation');
        $this->load->library('encrypt');
        $this->load->model('LoginModel');
        $this->load->helper('url');
    }

    function index()
    {
        $this->load->view("layouts/header");
        $this->load->view('loginform/login');
        $this->load->view("layouts/aside");
        $this->load->view("layouts/footer");
    }

    function validation()
    {
        $this->form_validation->set_rules('user_email', 'Email Address', 'required|trim|valid_email');
        $this->form_validation->set_rules('user_password', 'Password', 'required');
        if($this->form_validation->run())
        {
            $result = $this->LoginModel->can_login($this->input->post('user_email'), $this->input->post('user_password'));
            //$this->LoginModel->getRol();
            if($result == '')
            {
                redirect(base_url(), 'refresh');
            }
            else
            {
                $this->session->set_flashdata('message',$result);
                redirect('login');
            }
        }
        else
        {
            $this->index();
        }
    }

}

?>