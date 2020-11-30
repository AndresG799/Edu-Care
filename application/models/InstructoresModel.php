<?php

class InstructoresModel extends CI_Model{

    public $table = "instructores";
    public $table_id = "IdInstructor";

    public function __construct()
    {
        
    }

    function find($table_id){

        $this->db->where($this->table_id, $table_id);
        return $this->db->get($this->table)->row_array();

    }

    
    function findAll(){

        return $this->db->get($this->table)->result_array();

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
    //funcion que permite obtener las distintas asignaturas mediante la consulta inner join

    function dropdown_menu(){
        /*$this->db->select('descripcion ');
        $this->db->from('asignatura as a');
        $this->db->join('instructores as i', 'a.idAsignatura = i.IdAsignatura');
        $this->db->group_by('a.descripcion');*/
        $this->db->select('descripcion');
        $this->db->from('asignatura');
        $query= $this->db->get();
        return $query->result();
    }


}