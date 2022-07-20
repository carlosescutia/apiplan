<?php
class Datos_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_all_datos() {
        $sql = 'select * from "Registro_Nivel_Campo";';
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function get_datos_instrumento($id_nivel) {
        $sql = 'select * from "Registro_Nivel_Campo" where nivel_id = ? order by registro_nivel_id, version, nivel_campo_id;';
        $query = $this->db->query($sql, array($id_nivel));
        return $query->result_array();
    }

}
