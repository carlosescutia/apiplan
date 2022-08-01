<?php
class Ped_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_dimensiones() {
        $sql = ''
            .'select  '
            .'distinct on (rnc.registro_nivel_id) '
            .'idd.contenido as id_dimension,  '
            .'rnc.contenido as desc_dimension  '
            .'from  '
            .'"Registro_Nivel_Campo" rnc '
            .'left join "Registro_Nivel_Campo" idd on rnc.registro_nivel_id = idd.registro_nivel_id and idd.nivel_campo_id = 8 '
            .'where  '
            .'rnc.nivel_id = 3  '
            .'and rnc.nivel_campo_id = 9  '
            .'order by  '
            .'rnc.registro_nivel_id, rnc.version desc '
            .'';
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function get_lineas() {
        $sql = ''
            .'select '
            .'distinct on (rnc.registro_nivel_id) '
            .'idd.contenido as id_dimension, '
            .'idl.contenido as id_linea, '
            .'rnc.contenido as desc_linea '
            .'from '
            .'"Registro_Nivel_Campo" rnc  '
            .'left join "Registro_Nivel_Campo" idnd on rnc.registro_nivel_id = idnd.registro_nivel_id and idnd.nivel_campo_id =  11 '
            .'left join "Registro_Nivel_Campo" idl on rnc.registro_nivel_id = idl.registro_nivel_id and idl.nivel_campo_id =  12 '
            .'left join "Registro_Nivel_Campo" idd on idnd.contenido::int = idd.registro_nivel_id and idd.nivel_id = 3 and idd.nivel_campo_id = 8 '
            .'where  '
            .'rnc.nivel_id = 4  '
            .'and rnc.nivel_campo_id = 13 '
            .'order by  '
            .'rnc.registro_nivel_id, rnc.version desc '
            .'';
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function get_objetivos() {
        $sql = ''
            .'select  '
            .'distinct on (rnc.registro_nivel_id) '
            .'idd.contenido as id_dimension, '
            .'idl.contenido as id_linea, '
            .'ido.contenido as id_objetivo, '
            .'rnc.contenido as desc_objetivo '
            .'from  '
            .'"Registro_Nivel_Campo" rnc  '
            .'left join "Registro_Nivel_Campo" idnd on rnc.registro_nivel_id = idnd.registro_nivel_id and idnd.nivel_campo_id = 15 '
            .'left join "Registro_Nivel_Campo" idd on idnd.contenido::int = idd.registro_nivel_id and idd.nivel_id = 3 and idd.nivel_campo_id = 8 '
            .'left join "Registro_Nivel_Campo" idnl on rnc.registro_nivel_id = idnl.registro_nivel_id and idnl.nivel_campo_id = 16 '
            .'left join "Registro_Nivel_Campo" idl on idnl.contenido::int = idl.registro_nivel_id and idl.nivel_campo_id = 12 and idl.nivel_id = 4 '
            .'left join "Registro_Nivel_Campo" ido on rnc.registro_nivel_id = ido.registro_nivel_id and ido.nivel_campo_id = 17 '
            .'where  '
            .'rnc.nivel_id = 5  '
            .'and rnc.nivel_campo_id = 18 '
            .'order by  '
            .'rnc.registro_nivel_id, rnc.version desc '
            .'';
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function get_estrategias() {
        $sql = ''
            .'select  '
            .'';
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function get_proyectos() {
        $sql = ''
            .'select  '
            .'';
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function get_retosreg() {
        $sql = ''
            .'select  '
            .'';
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function get_objreg() {
        $sql = ''
            .'select  '
            .'';
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function get_estreg() {
        $sql = ''
            .'select  '
            .'';
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function get_indicadores() {
        $sql = ''
            .'select  '
            .'';
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function get_metas() {
        $sql = ''
            .'select  '
            .'';
        $query = $this->db->query($sql);
        return $query->result_array();
    }

}
