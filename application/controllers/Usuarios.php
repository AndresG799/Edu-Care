<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {


	public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('UsuariosModel');
        $this->load->helper('form');
        $this->load->helper('url');
    }

    public function create(){
        $this->form_validation->set_rules('name', 'Name', 'required', array('required' => '<div class="alert alert-danger" role="alert"> El campo %s es obligatorio </div>'));
        /*$this->form_validation->set_rules('email', 'Email', 'required|valid_email', array('required' => '<div class="alert alert-danger" role="alert"> El campo %s es obligatorio </div>'));*/

        if($this->form_validation->run() == false){
            $this->load->view('registerform/create');
        }
        else{
            /*$data = [
                'nombre' => $this->input->post('name')
    
            ];
            $this->UsuariosModel->insert($data);*/

            $formArray = array();
            $formArray['nombre'] = $this->input->post('name');
            $this->UsuariosModel->insert($formArray);
        }
       
       
        
    }
    
    function update($id){
        $users = $this->UsuariosModel->find($id);
        $data = array();
        $data['users'] = $users;

        $this->form_validation->set_rules('name', 'Name', 'required', array('required' => '<div class="alert alert-danger" role="alert"> El campo %s es obligatorio </div>'));

        if($this->form_validation->run() == FALSE){
            $this->load->view('editform/edit', $data);
        }
        else {
            //update user record
            $formArray = array();
            $formArray['nombre'] = $this->input->post('name');
            $this->UsuariosModel->update($id, $formArray);
           
        }
        
       
    
    }

    function index(){
        $users = $this->UsuariosModel->findAll();
        $data = array();
        $data['users'] = $users;
        $this->load->view('listform/list', $data);
    }

    //Otra funcion que permite guardar un registro
    /*public function guardar(){
      $this->load->view('Usuarios/guardar.php');

      if($this->input->server("REQUEST_METHOD") == "POST")
      {
          $data["nombre"] = $this->input->post("nombre");
          $this->UsuariosModel->insert($data);
      }

    }
    */


    /*public function delete($id){
        
        //$_id = $this->input->post('id', true);
        $user = $this->UsuariosModel->find($id);

        if(empty($user)){
            $this->session->set_flashdata('failure', 'record not found in database');
        }
        $this->UsuariosModel->delete($id);
        $this->session->set_flashdata('success', 'Record deleted successfully');
        redirect(base_url('Usuarios/index'));

    }*/

    public function delete(){
        
        $_id = $this->input->post('id', true);
        
        if(empty($_id)){
            $this->session->set_flashdata('failure', 'record not found in database');
        }
        else{
            $this->UsuariosModel->delete($_id);
            $this->session->set_flashdata('success', 'Record deleted successfully');
            /*redirect(base_url('Usuarios/index'));*/

        }
        

    }


}
