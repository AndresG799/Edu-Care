<?php

class UsuariosModel extends CI_Model{

    public $table = "usuarios";
    public $table_id = "id";

    public function __construct()
    {
        
    }

    function find($table_id){
        /*$this->db->select();
        $this->db->from($this->table);
        $this->db->where($this->table_id, $id);

        $query = $this->db->get();
        return $query->row();*/

        $this->db->where($this->table_id, $table_id);
        return $user = $this->db->get($this->table)->row_array();

    }

    /*function findAll(){
        $this->db->select();
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->result();

        


    }   
    */
    
    function findAll(){

        return $users = $this->db->get($this->table)->result_array();

    }  
    





    //funcion que permite guardar un registro mediante un identificador
    function insert($data){
        $this->db->insert($this->table, $data);
        /*return $this->db->insert_id();*/
    }
    //funcion que permite actualizar un registro mediante un identificador 
    function update($id, $data){
        $this->db->where($this->table_id, $id);
        $this->db->update($this->table, $data);

        
    }
    //funcion que permite borrar un registro mediante un identificador
    function delete($id){
        $this->db->where($this->table_id, $id);
        $this->db->delete($this->table);
       
    }


    function conexionbd(){
        $this->load->database();
        session_start();
        //recepción de datos enviados mediante POST desde ajax
        $usuario = (isset($_POST['usuario'])) ? $_POST['usuario'] : '';
        $password = (isset($_POST['password'])) ? $_POST['password'] : '';

        //$pass = md5($password); //encriptación de la contraseña dada por el usuario.
        //consultas realizadas a la base de datos.
        /*$this->db->select('*');
        $this->db->from('usuarios');
        $this->db->where('usuario', $usuario);
        $this->db->where('password', $pass);
        $result = $this->db->get();*/
        $user = $this->db->get_where ('usuarios',array('usuario'=>$usuario,'password'=>md5($password)));
        $is = $user->num_rows();
        $_SESSION["s_usuario"] = $usuario;
        /*if($is>= 1){
            $data = $user->fetchAll(PDO::FETCH_ASSOC);
            $_SESSION["s_usuario"] = $usuario;
        }else{
            $_SESSION["s_usuario"] = null;
            $data=null;
        }*/
        //print json_encode($data);
        $this->db->close();
    }


}