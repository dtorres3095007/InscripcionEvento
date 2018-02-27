<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class pages_model extends CI_Model {

    var $inscripciones_tabla = "inscripciones";
    var $inscripciones_mul_tabla = "inscripciones_multiples";

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function guardar($nombres, $apellidos, $empresa_trabaja, $correo, $empresa_paga, $codigo_emp_paga, $telefono, $direccion, $postal, $ciudad_pais, $otrotaller, $comentarios, $id_inscrip) {
        $this->db->insert($this->inscripciones_tabla, array(
            "nombres" => $nombres,
            "apellidos" => $apellidos,
            "empresa_trabaja" => $empresa_trabaja,
            "codigo_empresa_paga" => $codigo_emp_paga,
            "telefono" => $telefono,
            "direccion" => $direccion,
            "codigo_postal" => $postal,
            "otro_taller" => $otrotaller,
            "comentarios" => $comentarios,
            "id_inscripcion" => $id_inscrip,
            "correo" => $correo,
            "empresa_paga" => $empresa_paga,
            "ciudad_pais" => $ciudad_pais,
        ));

        return 0;
    }

    public function guardar_multiple($nombres, $apellidos, $id_inscrip) {
        $this->db->insert($this->inscripciones_mul_tabla, array(
            "nombres" => $nombres,
            "apellidos" => $apellidos,
            "id_inscripcion" => $id_inscrip,
        ));

        return 0;
    }
    
     public function traer_ultimo_registro($nombres,$apellidos) {
        $this->db->select("id");
        $this->db->from($this->inscripciones_tabla);
        $this->db->order_by("id", "desc");
        $this->db->where('nombres', $nombres);
        $this->db->where('apellidos', $apellidos);
        $query = $this->db->get();
          $row = $query->row();
        return $row->id;
    }


}
