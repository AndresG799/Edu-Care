<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {


	public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('UsuariosModel');
        $this->load->helper('form');
    }

    public function index(){

    }

    public function guardar(){
      $this->load->view('Usuarios/guardar.php');

      if($this->input->server("REQUEST_METHOD") == "POST")
      {
          $data["nombre"] = $this->input->post("nombre");
          $this->UsuariosModel->insert($data);
      }

    }

    public function eliminar(){

    }
}
