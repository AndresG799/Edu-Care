<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('UsuariosModel');
        $this->load->helper('form');
        $this->load->helper('url');
        //Carga de la librerira session.
        $this->load->library('session');
    }
	public function index()
	{
		//$this->load->view('welcome_message');
		
        $this->load->view('Estructura/head.php');
        $this->load->view('Estructura/header.php');
        $this->load->view('Estructura/slider.php');
        $this->load->view('Estructura/content.php');
        $this->load->view('Estructura/footer.php');


	
		

    }
    
    public function login(){

        //Carga de la vista Login.
        $this->load->view('loginform/login');
        if(!isset($_SESSION)){
            session_start();
        }
        $usuario = (isset($_POST['usuario'])) ? $_POST['usuario'] : '';
        $password = (isset($_POST['password'])) ? $_POST['password'] : '';

        $pass = md5($password); //encriptación de la contraseña dada por el usuario.
        //consultas realizadas a la base de datos.
        /*$this->db->select('*');
        $this->db->from('usuarios');
        $this->db->where('usuario', $usuario);
        $this->db->where('password', $pass);
        $result = $this->db->get()->result();*/
        //$num_results = $this->db->count_all_results();
        //$sql="SELECT * FROM usuarios WHERE usuario='$usuario' AND password='$pass' "; 
        
        $query = $this->db->query("SELECT * FROM usuarios WHERE usuario='$usuario' AND password='$pass' ");
        
        //$user = $this->db->get_where ('usuarios',array('usuario'=>$usuario,'password'=>md5($password)));
        //$is = $user->num_rows();
        //print_r($this->db->last_query());    
        //echo $query->num_rows();
        
        //print_r($result);
        if($query->num_rows()>= 0){
            foreach($query->result_array() as $row){
                $data = $row;
                $_SESSION["s_usuario"] = $usuario;
            }
            
            //$data = $_SESSION["s_usuario"];
            
        }else{
            $_SESSION["s_usuario"] = null;
            $data=null;
        }
        //print json_encode($data);
        $this->db->close();
        //session_destroy();
        
    }
    public function welcomelogin(){

        //Carga de la vista Login.
        $this->load->view('loginform/pag_inicio');
        
        
    }

    public function dashboard(){
        $this->load->view("layouts/header");
		$this->load->view("layouts/aside");
        //$this->load->view("layouts/dashboard");
        $this->load->view("layouts/test");
		//$this->load->view("layouts/footer");
    }
}
