<?php
class At_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_agendas() {
        $sql = ''
			.'select '
			.'distinct on (rnc.registro_nivel_id) '
			.'idit.contenido as id_instrumento, '
			.'ida.contenido as id_agenda, '
			.'rnc.contenido as desc_agenda  '
			.'from '
			.'"Registro_Nivel_Campo" rnc  '
			.'left join "Registro_Nivel_Campo" idnit on rnc.registro_nivel_id = idnit.registro_nivel_id and idnit.nivel_campo_id = 269  '
			.'left join "Registro_Nivel_Campo" idit on idnit.contenido::int = idit.registro_nivel_id and idit.nivel_id = 2 and idit.nivel_campo_id = 5 '
			.'left join "Registro_Nivel_Campo" ida on rnc.registro_nivel_id = ida.registro_nivel_id and ida.nivel_campo_id = 270 '
			.'where  '
			.'rnc.nivel_id = 49 '
			.'and rnc.nivel_campo_id = 271 '
			.'order by '
			.'rnc.registro_nivel_id, rnc.version desc '
            .'';
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function get_objetivos() {
        $sql = ''
			.'select '
			.'distinct on (rnc.registro_nivel_id) '
			.'idit.contenido as id_instrumento, '
			.'ida.contenido as id_agenda, '
			.'ido.contenido as id_objetivo, '
			.'rnc.contenido as desc_objetivo  '
			.'from '
			.'"Registro_Nivel_Campo" rnc  '
			.'left join "Registro_Nivel_Campo" idnit on rnc.registro_nivel_id = idnit.registro_nivel_id and idnit.nivel_campo_id = 272  '
			.'left join "Registro_Nivel_Campo" idna on rnc.registro_nivel_id = idna.registro_nivel_id and idna.nivel_campo_id = 273 '
			.'left join "Registro_Nivel_Campo" idit on idnit.contenido::int = idit.registro_nivel_id and idit.nivel_id = 2 and idit.nivel_campo_id = 5 '
			.'left join "Registro_Nivel_Campo" ida on idna.contenido::int = ida.registro_nivel_id and ida.nivel_id = 49 and ida.nivel_campo_id = 270 '
			.'left join "Registro_Nivel_Campo" ido on rnc.registro_nivel_id = ido.registro_nivel_id and ido.nivel_campo_id = 274 '
			.'where  '
			.'rnc.nivel_id = 50 '
			.'and rnc.nivel_campo_id = 275 '
			.'order by '
			.'rnc.registro_nivel_id, rnc.version desc '
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

    public function get_lineas() {
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

}
