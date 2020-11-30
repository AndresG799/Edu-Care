<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if($this->session->userdata('id'))
        {
            redirect('private_area');
        }
        $this->load->library('form_validation');
        $this->load->library('encrypt');
        $this->load->helper('url');

        $this->load->model('RegisterModel');
    }

    function index()
    {
        $this->load->view("layouts/header");
        $this->load->view("layouts/aside");
        $this->load->view('loginform/register');
        $this->load->view('Layouts/footer');
       
    
    }

    function validation()
    {
        $this->form_validation->set_rules('user_name', 'Name', 'required|trim');
        $this->form_validation->set_rules('user_email', 'Email Address', 'required|trim|valid_email|is_unique[codeigniter_register.email]');
        $this->form_validation->set_rules('user_password', 'Password', 'required');
        if($this->form_validation->run())
        {
            $verification_key = md5(rand());
            $encrypted_password = $this->encrypt->encode($this->input->post('user_password'));
            $data = array(
                'name'  => $this->input->post('user_name'),
                'email'  => $this->input->post('user_email'),
                'password' => $encrypted_password,
                'verification_key' => $verification_key,
                'type_user' => 1,
            );
            $id = $this->RegisterModel->insert($data);
            if($id > 0)
            {
                $subject = "Please verify email for login";
                $message = "
                <p>Hola ".$this->input->post('user_name')."</p>
                <p>Este es un correo de verificacion enviado de la plataforma Educare. Para completar el registro y loguearse en el sistema. Primero necesitamos que verifiques tu correo mediante este link <a href='".base_url()."register/verify_email/".$verification_key."'>link</a>.</p>
                <p>Una ves verifiques el correo podras ingresar al sistema.</p>
                <p>Gracias!, Educare-Staff</p>
                ";
                

                $config = array(
                    'protocol' => 'smtp',
                    'smtp_host' => 'ssl://smtp.googlemail.com',
                    'smtp_port' => 465,
                    'smtp_user' => 'educarestaffteam@gmail.com',
                    'smtp_pass' => 'minato1128',
                    'mailtype'  => 'html', 
                    'charset'   => 'iso-8859-1'
                );

                $this->email->initialize($config);
                $this->email->from('info@webslesson.info');
                $this->email->subject($subject);
                $this->email->message($message);
                $this->email->to($this->input->post('user_email'));
                echo $this->email->print_debugger();
                if($this->email->send())
                {
                    $this->session->set_flashdata('message', 'Check in your email for email verification mail');
                    //$this->session->set_userdata('username', 'Your user name');
                    redirect('loginform/register', 'refresh');
                }
            }
        }
        else
        {
            $this->index();
        }
    }

    function verify_email()
    {
        if($this->uri->segment(3))
        {
            $verification_key = $this->uri->segment(3);
            if($this->RegisterModel->verify_email($verification_key))
            {
                $data['message'] = '<h1 align="center">Your Email has been successfully verified, now you can login from <a href="'.base_url().'login">here</a></h1>';
            }
            else
            {
                $data['message'] = '<h1 align="center">Invalid Link</h1>';
            }
            $this->load->view('loginform/email_verification', $data);
        }
    }

}

?>