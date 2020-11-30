<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Instructores extends CI_Controller {


	public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('InstructoresModel');
        $this->load->helper('form');
        $this->load->helper('url');
        
    }

    function create(){
        $this->form_validation->set_rules('primer_nombre', 'Name', 'required', array('required' => '<div class="alert alert-danger" role="alert"> El campo %s es obligatorio </div>'));
        /*$this->form_validation->set_rules('email', 'Email', 'required|valid_email', array('required' => '<div class="alert alert-danger" role="alert"> El campo %s es obligatorio </div>'));*/

        if($this->form_validation->run() == false){
            $this->load->view("layouts/header");
            $this->load->view("layouts/aside");
            $this->load->view('admin/instruct/add');
            $this->load->view("layouts/footer");
        
        }
        else{
            $data = [
                'primer_nombre' => $this->input->post('primer_nombre'),
                'segundo_nombre' => $this->input->post('segundo_nombre'),
                'primer_apellido' => $this->input->post('primer_apellido'),
                'segundo_apellido' => $this->input->post('segundo_apellido'),
                'IdAsignatura' => $this->input->post('nom_asignatura'),
    
            ];
            $this->InstructoresModel->insert($data);
        }

       
        
    }
    
    function update($id){
        /*$users = $this->InstructoresModel->find($id);
        $data = array();
        $data['users'] = $users;*/
        $data['users'] = $this->InstructoresModel->find($id);
        $data['dropdowns'] = $this->InstructoresModel->dropdown_menu();

        $this->form_validation->set_rules('primer_nombre', 'Name', 'required', array('required' => '<div class="alert alert-danger" role="alert"> El campo %s es obligatorio </div>'));

        if($this->form_validation->run() == FALSE){
            $this->load->view("layouts/header");
            $this->load->view("layouts/aside");
            $this->load->view('admin/Instruct/update', $data);
            $this->load->view("layouts/footer");
        }
        else {
            //update user record
            $formArray = array();
            $formArray['primer_nombre'] = $this->input->post('primer_nombre');
            $formArray['segundo_nombre'] = $this->input->post('segundo_nombre');
            $formArray['primer_apellido'] = $this->input->post('primer_apellido');
            $formArray['segundo_apellido'] = $this->input->post('segundo_apellido');
            $formArray['IdAsignatura'] = $this->input->post('IdAsignatura');
            $this->InstructoresModel->update($id, $formArray);
           
        }
        
       
    
    }

    function index(){
        

        $users = $this->InstructoresModel->findAll();
        $data = array();
        $data['users'] = $users;
        $this->load->view("layouts/header");
        $this->load->view("layouts/aside");
        $this->load->view('admin/Instruct/list', $data);
        $this->load->view("layouts/footer");
    }   

    function viewinfo1(){
        $this->load->view("layouts/header");
        $this->load->view("layouts/aside");
        $this->load->view('instructinfo/infoview1');
        $this->load->view("layouts/footer");


        
    }

    function delete(){
        
        $_id = $this->input->post('IdInstructor', true);
        
        if(empty($_id)){
            $this->session->set_flashdata('failure', 'record not found in database');
        }
        else{
            $this->InstructoresModel->delete($_id);
            $this->session->set_flashdata('success', 'Record deleted successfully');
            /*redirect(base_url('Usuarios/index'));*/

        }
        
    }
}
