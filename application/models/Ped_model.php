<?php
class Ped_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_dimensiones() {
        $sql = ''
            .'select  '
            .'registro_nivel_id as id_dimension,  '
            .'contenido as desc_dimension  '
            .'from  '
            .'"Registro_Nivel_Campo"  '
            .'where  '
            .'nivel_id = 3  '
            .'and nivel_campo_id = 9  '
            .'order by  '
            .'registro_nivel_id '
            .'';
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function get_lineas() {
        $sql = ''
            .'select '
            .'idd.contenido as id_dimension, '
            .'rnc.registro_nivel_id as id_linea, '
            .'idl.contenido as cve_linea, '
            .'rnc.contenido as desc_linea '
            .'from  '
            .'"Registro_Nivel_Campo" rnc  '
            .'left join "Registro_Nivel_Campo" idd on rnc.registro_nivel_id = idd.registro_nivel_id and idd.nivel_campo_id = 11 '
            .'left join "Registro_Nivel_Campo" idl on rnc.registro_nivel_id = idl.registro_nivel_id and idl.nivel_campo_id = 12 '
            .'where  '
            .'rnc.nivel_id = 4  '
            .'and rnc.nivel_campo_id = 13 '
            .'order by  '
            .'rnc.registro_nivel_id '
            .'';
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function get_objetivos() {
        $sql = ''
            .'select  '
            .'idd.contenido as id_dimension, '
            .'idl.contenido as id_linea, '
            .'ido.contenido as cve_objetivo, '
            .'rnc.contenido as desc_objetivo '
            .'from  '
            .'"Registro_Nivel_Campo" rnc  '
            .'left join "Registro_Nivel_Campo" idd on rnc.registro_nivel_id = idd.registro_nivel_id and idd.nivel_campo_id = 15 '
            .'left join "Registro_Nivel_Campo" idl on rnc.registro_nivel_id = idl.registro_nivel_id and idl.nivel_campo_id = 16 '
            .'left join "Registro_Nivel_Campo" ido on rnc.registro_nivel_id = ido.registro_nivel_id and ido.nivel_campo_id = 17 '
            .'where  '
            .'rnc.nivel_id = 5  '
            .'and rnc.nivel_campo_id = 18 '
            .'order by  '
            .'rnc.registro_nivel_id  '
            .'';
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function get_estrategias() {
        $sql = 'select registro_nivel_id as id, contenido as dimension from "Registro_Nivel_Campo" where nivel_id = 3 and nivel_campo_id = 9 order by registro_nivel_id;';
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function get_proyectos() {
        $sql = 'select registro_nivel_id as id, contenido as dimension from "Registro_Nivel_Campo" where nivel_id = 3 and nivel_campo_id = 9 order by registro_nivel_id;';
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function get_retosreg() {
        $sql = 'select registro_nivel_id as id, contenido as dimension from "Registro_Nivel_Campo" where nivel_id = 3 and nivel_campo_id = 9 order by registro_nivel_id;';
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function get_objreg() {
        $sql = 'select registro_nivel_id as id, contenido as dimension from "Registro_Nivel_Campo" where nivel_id = 3 and nivel_campo_id = 9 order by registro_nivel_id;';
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function get_estreg() {
        $sql = 'select registro_nivel_id as id, contenido as dimension from "Registro_Nivel_Campo" where nivel_id = 3 and nivel_campo_id = 9 order by registro_nivel_id;';
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function get_indicadores() {
        $sql = 'select registro_nivel_id as id, contenido as dimension from "Registro_Nivel_Campo" where nivel_id = 3 and nivel_campo_id = 9 order by registro_nivel_id;';
        $query = $this->db->query($sql);
        return $query->result_array();
    }

}
