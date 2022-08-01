<?php
class Apg_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_ejes() {
        $sql = ''
			.'select '
            .'distinct on (rnc.registro_nivel_id) '
			.'ide.contenido as id_eje, '
			.'rnc.contenido as desc_eje  '
			.'from '
			.'"Registro_Nivel_Campo" rnc  '
			.'left join "Registro_Nivel_Campo" ide on rnc.registro_nivel_id = ide.registro_nivel_id and ide.nivel_campo_id = 33 '
			.'where  '
			.'rnc.nivel_id = 8 '
			.'and rnc.nivel_campo_id = 34 '
			.'order by '
            .'rnc.registro_nivel_id, rnc.version desc '
            .'';
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function get_lineas() {
        $sql = ''
			.'select '
            .'distinct on (rnc.registro_nivel_id) '
			.'ide.contenido as id_eje, '
			.'idl.contenido as id_linea, '
			.'rnc.contenido as desc_linea  '
			.'from '
			.'"Registro_Nivel_Campo" rnc  '
			.'left join "Registro_Nivel_Campo" idne on rnc.registro_nivel_id = idne.registro_nivel_id and idne.nivel_campo_id = 36 '
			.'left join "Registro_Nivel_Campo" ide on idne.contenido::int = ide.registro_nivel_id and ide.nivel_id = 8 and ide.nivel_campo_id = 33 '
			.'left join "Registro_Nivel_Campo" idl on rnc.registro_nivel_id = idl.registro_nivel_id and idl.nivel_campo_id = 37 '
			.'where  '
			.'rnc.nivel_id = 9 '
			.'and rnc.nivel_campo_id = 38 '
			.'order by '
            .'rnc.registro_nivel_id, rnc.version desc '
			.'';
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function get_objetivos() {
        $sql = ''
            .'select '
            .'';
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function get_estrategias() {
        $sql = ''
            .'select '
            .'';
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function get_indicadores() {
        $sql = ''
            .'select '
            .'';
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function get_metas() {
        $sql = ''
            .'select '
            .'';
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function get_ftis() {
        $sql = ''
            .'select '
            .'';
        $query = $this->db->query($sql);
        return $query->result_array();
    }

}
