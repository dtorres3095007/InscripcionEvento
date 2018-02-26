<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class inventario_model extends CI_Model {

    var $table_inventario = "inventario";
    var $table_computador = "computador";
    var $table_portatil = "portatil";
    var $select_column = "*";

    public function make_query() {
        $this->db->select($this->select_column);
        $this->db->from($this->table_inventario);
    }

    public function Listar() {
        $this->db->select("u2.valor modelo,u.valor recurso,u1.valor marca,p.serial,p.descripcion,p.fecha_ingreso,p.fecha_garantia,p.estado,p.id,u3.valor estado_recurso,p.estado_recurso estado_aux");
        $this->db->from('inventario p');
        $this->db->join('valor_parametro u', 'p.tipo=u.id');
        $this->db->join('valor_parametro u1', 'p.id_marca=u1.id');
        $this->db->join('valor_parametro u3', 'p.estado_recurso=u3.id_aux');
        $this->db->join('valor_parametro u2', 'p.id_modelo=u2.id');
        $this->db->where('p.estado', "1");

        $query = $this->db->get();
        return $query->result_array();
    }

    public function Listar_audiovisual_general() {
        $this->db->select("u2.valor modelo,u.valor recurso,u1.valor marca,p.serial,p.descripcion,p.fecha_ingreso,p.fecha_garantia,p.estado,p.id,u3.valor estado_recurso,p.codigo_interno");
        $this->db->from('inventario p');
        $this->db->join('valor_parametro u', 'p.tipo=u.id');
        $this->db->join('valor_parametro u1', 'p.id_marca=u1.id');
        $this->db->join('valor_parametro u3', 'p.estado_recurso=u3.id_aux');
        $this->db->join('valor_parametro u2', 'p.id_modelo=u2.id');
        $this->db->join('responsables r', 'p.id=r.id_dispositivo');
        $this->db->where('p.estado', "1");
        $this->db->where('r.id_cargo', "ResAud");
        $this->db->where('r.estado', "1");
        $this->db->where('r.estado_responsable', "ResAct");


        $query = $this->db->get();
        return $query->result_array();
    }

    public function Listar_audiovisual_general_tipo($tipo) {
        $this->db->select("u2.valor modelo,u.valor recurso,u1.valor marca,p.serial,p.descripcion,p.fecha_ingreso,p.fecha_garantia,p.estado,p.id,u3.valor estado_recurso,p.codigo_interno");
        $this->db->from('inventario p');
        $this->db->join('valor_parametro u', 'p.tipo=u.id');
        $this->db->join('valor_parametro u1', 'p.id_marca=u1.id');
        $this->db->join('valor_parametro u3', 'p.estado_recurso=u3.id_aux');
        $this->db->join('valor_parametro u2', 'p.id_modelo=u2.id');
        $this->db->join('responsables r', 'p.id=r.id_dispositivo');
        $this->db->where('p.estado', "1");
        $this->db->where('r.id_cargo', "ResAud");
        $this->db->where('p.estado_recurso', "RecAct");
        $this->db->where('p.tipo', $tipo);
        $this->db->where('r.estado', "1");
        $this->db->where('r.estado_responsable', "ResAct");
        $query = $this->db->get();
        return $query->result_array();
    }

    public function Existe_serial($serial) {
        $this->db->select('count(*) as cantidad');
        $this->db->from($this->table_inventario);
        $this->db->where('serial', $serial);
        $this->db->where('estado', "1");
        $result = $this->db->get();
        $cantidad = $result->result_array();
        if ($cantidad[0]["cantidad"] == 0) {
            return false;
        } else {
            return true;
            ;
        }
    }
    public function Existe_codigo_interno($codigo) {
        $this->db->select('count(*) as cantidad');
        $this->db->from($this->table_inventario);
        $this->db->where('codigo_interno', $codigo);
        $this->db->where('estado', "1");
        $result = $this->db->get();
        $cantidad = $result->result_array();
        if ($cantidad[0]["cantidad"] == 0) {
            return false;
        } else {
            return true;
            ;
        }
    }
    public function obtener_inventario_id($id) {
        $this->make_query();
        $this->db->where('estado', "1");
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function guardar($recurso, $serial, $marca, $modelo, $fecha_ingreso, $fecha_garantia, $valor, $descripcion, $usuario, $fecha,$codigo_interno) {
        $this->db->insert($this->table_inventario, array(
            "serial" => $serial,
            "descripcion" => $descripcion,
            "fecha_ingreso" => $fecha_ingreso,
            "fecha_garantia" => $fecha_garantia,
            "valor" => $valor,
            "tipo" => $recurso,
            "id_modelo" => $modelo,
            "id_marca" => $marca,
            "usuario_crea" => $usuario,
            "fecha_crea" => $fecha,
             "codigo_interno" => $codigo_interno,
        ));

        return 4;
    }

    public function guardar_responsable($id_inventario, $fecha_entrega, $cargo, $usuario) {

        $this->db->insert("responsables", array(
            "id_dispositivo" => $id_inventario,
            "fecha_entrega" => $fecha_entrega,
            "id_cargo" => $cargo,
            "id_usuario_entrega" => $usuario,
        ));

        return 1;
    }

    public function guardar_mantenimiento($id_inventario, $fecha_entrega, $id_tipo, $usuario) {

        $this->db->insert("mantenimiento", array(
            "id_inventario" => $id_inventario,
            "fecha" => $fecha_entrega,
            "id_tipo" => $id_tipo,
            "id_usuario" => $usuario,
        ));

        return 1;
    }

    public function obtener_responsable_actual($id_inventario) {
        $this->db->select("*");
        $this->db->from("responsables");
        $this->db->where('estado', "1");
        $this->db->where('id_dispositivo', $id_inventario);
        $this->db->where('estado_responsable', "ResAct");
        $query = $this->db->get();
        return $query->result_array();
    }

    public function Listar_Responsables($id) {
        $this->db->select("r.fecha_entrega,r.fecha_retiro,u.valor cargo,u.valorx ubicacion,u2.valor estado");
        //  $this->db->select("r.fecha_entrega,r.fecha_retiro,r.id_persona as nombrecompleto,r.id_cargo,r.id_departamento,r.estado_responsable");

        $this->db->from('responsables r');
        $this->db->join('valor_parametro u', 'r.id_cargo=u.id_aux');
        $this->db->join('valor_parametro u2', 'r.estado_responsable=u2.id_aux');
        $this->db->where('r.estado', "1");
        $this->db->where('r.id_dispositivo', $id);
        $query = $this->db->get();
        return $query->result();
    }

    public function Listar_Manteniminetos($id) {
        $this->db->select("r.fecha,p.usuario usuario,u.valor tipo,u.valorx descripcion,u1.valor estado,r.id,u1.id_aux estado_valor");

        $this->db->from('mantenimiento r');
        $this->db->join('valor_parametro u', 'r.id_tipo=u.id');
        $this->db->join('valor_parametro u1', 'r.estado_mant=u1.id_aux');
        $this->db->join('personas p', 'r.id_usuario=p.id');
        $this->db->where('r.estado', "1");
        $this->db->where('r.id_inventario', $id);
        $query = $this->db->get();
        return $query->result();
    }

    public function Modificar_responsable($id, $id_usuario_traslado, $fecha, $cargo) {
        $this->db->set('estado_responsable', "ResTras");
        $this->db->set('fecha_retiro', $fecha);

        $this->db->set('id_cargo_traslado', $cargo);
        $this->db->set('id_usuario_retira', $id_usuario_traslado);
        $this->db->where('id', $id);
        $this->db->update("responsables");

        return 1;
    }

    public function Modificar_estado_recurso($id, $estado) {
        $this->db->set('estado_recurso', $estado);
        $this->db->where('id', $id);
        $this->db->update("inventario");

        return 1;
    }

    public function Terminar_Mantenimiento($id,$inventario) {
        $this->db->set('estado_mant', 'Mat_Term');
        $this->db->where('id', $id);
        $this->db->update("mantenimiento");
        $total = $this->contar_Manteniminetos($inventario);
        if ($total == 0) {
            $this->Modificar_estado_recurso($inventario, "RecAct");
        }

        return 1;
    }

    public function contar_Manteniminetos($id) {
        $this->db->select("COUNT(id) total");
        $this->db->from('mantenimiento r');
        $this->db->where('estado_mant', "Mat_Curs");
        $this->db->where('id_inventario', $id);
        $query = $this->db->get();
          $row = $query->row();
        return $row->total;
    }

    public function obtener_Datos_inventario($id) {
        $this->make_query();
        $this->db->where('estado', "1");
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function obtener_Datos_portatil($id) {
        $this->db->select("i.id,i.disco_duro,i.memoria,u.valor procesador,u1.valor sistema_operativo");
        $this->db->from('portatil i');
        $this->db->join('valor_parametro u', 'i.procesador=u.id');
        $this->db->join('valor_parametro u1', 'i.sistema_operativo=u1.id');

        $this->db->where('i.estado', "1");
        $this->db->where('i.id_inventario', $id);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function obtener_Datos_computador($id, $tipo) {
        $this->db->select("n1.serial torre,n2.serial mouse,n3.serial teclado,n4.serial monitor,i.id,i.disco_duro,i.memoria,u.valor procesador,u1.valor sistema_operativo");
        $this->db->from('computador i');
        $this->db->join('valor_parametro u', 'i.procesador=u.id');
        $this->db->join('valor_parametro u1', 'i.sistema_operativo=u1.id');
        $this->db->join('inventario n1', 'i.id_torre=n1.id');
        $this->db->join('inventario n2', 'i.id_mouse=n2.id');
        $this->db->join('inventario n3', 'i.id_teclado=n3.id');
        $this->db->join('inventario n4', 'i.id_monitor=n4.id');

        $this->db->where('i.estado', "1");
        if ($tipo == "Torre") {
            $this->db->where('i.id_torre', $id);
        } else if ($tipo == "Mouse") {
            $this->db->where('i.id_mouse', $id);
        } else if ($tipo == "Teclado") {
            $this->db->where('i.id_teclado', $id);
        } else if ($tipo == "Monitor") {
            $this->db->where('i.id_monitor', $id);
        }

        $query = $this->db->get();
        return $query->result_array();
    }

    public function obtener_informacion_inventario($id) {
        $this->db->select("i.id,i.serial,i.descripcion,i.valor,i.tipo,u.valor modelo,u1.valor marca,fecha_ingreso,fecha_garantia,u2.valor tipo_valor,i.codigo_interno");
        $this->db->from('inventario i');
        $this->db->join('valor_parametro u', 'i.id_modelo=u.id');
        $this->db->join('valor_parametro u1', 'i.id_marca=u1.id');
        $this->db->join('valor_parametro u2', 'i.tipo=u2.id');
        $this->db->where('i.estado', "1");
        $this->db->where('i.id', $id);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function obtener_Datos_serial($serial) {
        $this->make_query();
        $this->db->where('estado', "1");
        $this->db->where('serial', $serial);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function Modificar($marca, $modelo, $recurso, $serial, $descripcion, $id) {
        $this->db->set('id_marca', $marca);
        $this->db->set('id_modelo', $modelo);
        $this->db->set('tipo', $recurso);
        $this->db->set('serial', $serial);
        $this->db->set('descripcion', $descripcion);

        $this->db->where('id', $id);
        $this->db->update($this->table_inventario);

        return 1;
    }

    public function dar_baja($id, $salida) {

        $this->db->set('fecha_garantia', $salida);
        $this->db->where('id', $id);
        $this->db->update($this->table_inventario);
        return 1;
    }

    public function guardar_computador($idTorre, $idMonitor, $idMouse, $idTeclado, $procesador, $memoria, $discoDuro, $sistemaOperativo) {
        $this->db->insert($this->table_computador, array(
            "id_torre" => $idTorre,
            "id_mouse" => $idMouse,
            "id_monitor" => $idMonitor,
            "id_teclado" => $idTeclado,
            "procesador" => $procesador,
            "memoria" => $memoria,
            "disco_duro" => $discoDuro,
            "sistema_operativo" => $sistemaOperativo,
        ));

        return 6;
    }

    public function guardar_portatil($idTorre, $procesador, $memoria, $discoDuro, $sistemaOperativo) {
        $this->db->insert($this->table_portatil, array(
            "id_inventario" => $idTorre,
            "procesador" => $procesador,
            "memoria" => $memoria,
            "disco_duro" => $discoDuro,
            "sistema_operativo" => $sistemaOperativo,
        ));

        return 6;
    }

    public function obtener_ultimo_registro($usuario) {
        $this->make_query();
        $this->db->where('estado', "1");
        $this->db->where('usuario_crea', $usuario);
        $this->db->order_by("id", "desc");

        $query = $this->db->get();
        return $query->result_array();
    }

}
