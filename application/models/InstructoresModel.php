<?php

class UsuariosModel extends CI_Model{

    public $table = "usuarios";
    public $table_id = "id";

    public function __construct()
    {
        
    }

    //funcion que permite devolver una fila de un registro de la base de datos mediante un identificador 
    function find($id){
        $this->db->select();
        $this->db->from($this->table);
        $this->db->where($this->table_id, $id);

        $query = $this->db->get();
        return $query->row();

    }
    //funcion que permite devolver todos los registros de una tabla
    function findAll(){
        $this->db->select();
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->result();


    }

    //funcion que permite guardar un registro mediante un identificador
    function insert($data){
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
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
    
}