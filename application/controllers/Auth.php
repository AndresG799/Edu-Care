<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('LoginModel');
        $this->load->helper('form');
        $this->load->helper('url');
        //Carga de la librerira session.
        $this->load->library('session');
    }
	public function index()
	{

        $roles= $this->LoginModel->getRol();
        $data = array();
        $data['roles'] = $roles;
		$this->load->view("layouts/header");
        $this->load->view("layouts/aside", $data);
        $this->load->view('main_page');
        $this->load->view("layouts/footer");
		
    }
    function logout()
    {
        $data = $this->session->all_userdata();
        foreach($data as $row => $rows_value)
        {
            $this->session->unset_userdata($row);
        }
        redirect('login');
    }
}