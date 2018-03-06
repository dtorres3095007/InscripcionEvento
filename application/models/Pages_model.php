<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pages_model extends CI_Model {

    var $inscripciones_tabla = "inscripciones";
    var $inscripciones_mul_tabla = "inscripciones_multiples";

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function guardar($nombres, $apellidos, $empresa_trabaja, $correo, $empresa_paga, $codigo_emp_paga, $telefono, $direccion, $postal, $ciudad_pais, $otrotaller, $comentarios, $id_inscrip, $identificacion, $identificaciontipo, $nacionalidad, $profesion, $cargo, $nivel_formacion) {
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
            "identificacion" => $identificacion,
            "tipo_identificacion" => $identificaciontipo,
            "nacionalidad" => $nacionalidad,
            "profesion" => $profesion,
            "cargo" => $cargo,
            "nivel_formacion" => $nivel_formacion,
        ));

        return 0;
    }

    public function guardar_multiple($nombres, $apellidos, $id_inscrip, $identificacion, $identificaciontipo) {
        $this->db->insert($this->inscripciones_mul_tabla, array(
            "nombres" => $nombres,
            "apellidos" => $apellidos,
            "id_inscripcion" => $id_inscrip,
            "identificacion" => $identificacion,
            "tipo_identificacion" => $identificaciontipo,
        ));

        return 0;
    }

    public function traer_ultimo_registro($identificacion) {
        $this->db->select("id");
        $this->db->from($this->inscripciones_tabla);
        $this->db->order_by("id", "desc");
        $this->db->where('identificacion', $identificacion);
        $query = $this->db->get();
        $row = $query->row();
        return $row->id;
    }

    public function Existe_identificacion($identificacion) {
        $this->db->select('count(*) as cantidad');
        $this->db->from($this->inscripciones_tabla);
        $this->db->where('identificacion', $identificacion);
        $result = $this->db->get();
        $cantidad = $result->result_array();
        if ($cantidad[0]["cantidad"] == 0) {
            return false;
        } else {
            return true;
            ;
        }
    }

}
