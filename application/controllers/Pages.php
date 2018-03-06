<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Pages_model');
    }

    public function index() {
        //CARGO LAS VISTAS NECESARIAS PARA PINTAR LA PAGINA WEB
        $this->load->view('templates/header.php');
        $this->load->view('pages/index.php');
        $this->load->view('templates/footer.php');
    }

    public function GuardarInscripcion() {
        $nump = $this->input->post('nump');
        $nombres = $this->input->post('nombres');
        $apellidos = $this->input->post('apellidos');
        $identificacion = $this->input->post('identificacion');
        $tipo_identificacion = $this->input->post('tipo_identificacion');


        $nacionalidad = $this->input->post('nacionalidad');
        $profesion = $this->input->post('profesion');
        $cargo = $this->input->post('cargo');
        $nivel_formacion = $this->input->post('formacion');

        $empresa_trabaja = $this->input->post('empresa_trabaja');
        //$codigo_emp_paga = $this->input->post('codigo_emp_paga');
        $codigo_emp_paga = "SINCODIGO";
        $telefono = $this->input->post('telefono');
        $direccion = $this->input->post('direccion');
        $postal = $this->input->post('postal');
        $otrotaller = $this->input->post('otrotaller');
        $comentarios = $this->input->post('comentarios');
        $id_inscrip = 0;
        $correo = $this->input->post('correo');
        $empresa_paga = $this->input->post('empresa_paga');
        $ciudad_pais = $this->input->post('ciudad_pais');
        $valida_nombre = $this->solo_letras($nombres);
        $valida_apellidos = $this->solo_letras($apellidos);
        if (empty($nombres) || ctype_space($nombres)) {
            echo json_encode(1);
            return;
        } else if (empty($apellidos) || ctype_space($apellidos)) {
            echo json_encode(2);
            return;
        } else if (empty($tipo_identificacion) || ctype_space($tipo_identificacion)) {
            echo json_encode(13);
            return;
        } else if (empty($identificacion) || ctype_space($identificacion)) {
            echo json_encode(14);
            return;
        }else if (empty($nacionalidad) || ctype_space($nacionalidad)) {
            echo json_encode(16);
            return;
        }else if (empty($profesion) || ctype_space($profesion)) {
            echo json_encode(17);
            return;
        }else if (empty($nivel_formacion) || ctype_space($nivel_formacion)) {
            echo json_encode(18);
            return;
        }  else if (empty($empresa_trabaja) || ctype_space($empresa_trabaja)) {
            echo json_encode(3);
            return;
        } else if (empty($codigo_emp_paga) || ctype_space($codigo_emp_paga)) {
            echo json_encode(4);
            return;
        } else if (empty($telefono) || ctype_space($telefono)) {
            echo json_encode(5);
            return;
        } else if (empty($direccion) || ctype_space($direccion)) {
            echo json_encode(6);
            return;
        } else if (empty($postal) || ctype_space($postal)) {
            echo json_encode(7);
            return;
        } else if (empty($correo) || ctype_space($correo)) {
            echo json_encode(8);
            return;
        } else if (empty($ciudad_pais) || ctype_space($ciudad_pais)) {
            echo json_encode(10);
            return;
        } else if ($valida_nombre == false) {
            echo json_encode(11);
            return;
        } else if ($valida_apellidos == FALSE) {
            echo json_encode(12);
            return;
        }

        $resultado = $this->Pages_model->guardar($nombres, $apellidos, $empresa_trabaja, $correo, $empresa_paga, $codigo_emp_paga, $telefono, $direccion, $postal, $ciudad_pais, $otrotaller, $comentarios, $id_inscrip, $identificacion, $tipo_identificacion, $nacionalidad, $profesion, $cargo, $nivel_formacion);
        if ($nump > 0) {
            $id_inscrip = $this->Pages_model->traer_ultimo_registro($identificacion);

            for ($i = 0; $i < $nump; $i++) {
                $n = "nombres" . $i;
                $a = "apellidos" . $i;
                $tiden = "tipo_identificacion" . $i;
                $iden = "identificacion" . $i;
                $nombres = $this->input->post($n);
                $apellidos = $this->input->post($a);
                $identificacion = $this->input->post($iden);
                $tipo_identificacion = $this->input->post($tiden);
                $resultado = $this->Pages_model->guardar_multiple($nombres, $apellidos, $id_inscrip, $identificacion, $tipo_identificacion);
            }
        }
        echo json_encode($resultado);
        return;
    }

    public function solo_letras($cadena) {
        $permitidos = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ ";
        for ($i = 0; $i < strlen($cadena); $i++) {
            if (strpos($permitidos, substr($cadena, $i, 1)) === false) {
                //no es válido; 
                return false;
            }
        }
        //si estoy aqui es que todos los caracteres son validos 
        return true;
    }

}
