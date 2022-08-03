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
            .'distinct on (rnc.registro_nivel_id) '
            .'ide.contenido as id_eje, '
            .'idl.contenido as id_linea, '
            .'ido.contenido as id_objetivo, '
            .'rnc.contenido as desc_objetivo '
            .'from '
            .'"Registro_Nivel_Campo" rnc  '
            .'left join "Registro_Nivel_Campo" idne on rnc.registro_nivel_id = idne.registro_nivel_id and idne.nivel_campo_id = 40 '
            .'left join "Registro_Nivel_Campo" idnl on rnc.registro_nivel_id = idnl.registro_nivel_id and idnl.nivel_campo_id = 41 '
            .'left join "Registro_Nivel_Campo" ide on idne.contenido::int = ide.registro_nivel_id and ide.nivel_id = 8 and ide. nivel_campo_id = 33 '
            .'left join "Registro_Nivel_Campo" idl on idnl.contenido::int = idl.registro_nivel_id and idl.nivel_id = 9 and idl. nivel_campo_id = 37 '
            .'left join "Registro_Nivel_Campo" ido on rnc.registro_nivel_id = ido.registro_nivel_id and ido.nivel_campo_id = 42 '
            .'where  '
            .'rnc.nivel_id = 10 '
            .'and rnc.nivel_campo_id = 43 '
            .'order by '
            .'rnc.registro_nivel_id, rnc.version desc '
            .'';
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function get_estrategias() {
        $sql = ''
            .'select '
            .'distinct on (rnc.registro_nivel_id) '
            .'ide.contenido as id_eje, '
            .'ido.contenido as id_objetivo, '
            .'ides.contenido as id_estrategia, '
            .'rnc.contenido as desc_estrategia '
            .'from '
            .'"Registro_Nivel_Campo" rnc  '
            .'left join "Registro_Nivel_Campo" idne on rnc.registro_nivel_id = idne.registro_nivel_id and idne.nivel_campo_id = 83 '
            .'left join "Registro_Nivel_Campo" idno on rnc.registro_nivel_id = idno.registro_nivel_id and idno.nivel_campo_id = 84 '
            .'left join "Registro_Nivel_Campo" ide on idne.contenido::int = ide.registro_nivel_id and ide.nivel_id = 8 and ide.nivel_campo_id = 33 '
            .'left join "Registro_Nivel_Campo" ido on idno.contenido::int = ido.registro_nivel_id and ido.nivel_id = 10 and ido.nivel_campo_id = 42 '
            .'left join "Registro_Nivel_Campo" ides on rnc.registro_nivel_id = ides.registro_nivel_id and ides.nivel_campo_id = 85 '
            .'where  '
            .'rnc.nivel_id = 18 '
            .'and rnc.nivel_campo_id = 86 '
            .'order by '
            .'rnc.registro_nivel_id, rnc.version desc '
            .'';
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function get_indicadores() {
        $sql = ''
            .'select '
            .'distinct on (rnc.registro_nivel_id) '
            .'ide.contenido as id_eje, '
            .'idl.contenido as id_linea, '
            .'ido.contenido as id_objetivo, '
            .'idi.contenido as id_indicador, '
            .'rnc.contenido as desc_indicador '
            .'from '
            .'"Registro_Nivel_Campo" rnc  '
            .'left join "Registro_Nivel_Campo" idne on rnc.registro_nivel_id = idne.registro_nivel_id and idne.nivel_campo_id = 45 '
            .'left join "Registro_Nivel_Campo" idnl on rnc.registro_nivel_id = idnl.registro_nivel_id and idnl.nivel_campo_id = 46 '
            .'left join "Registro_Nivel_Campo" idno on rnc.registro_nivel_id = idno.registro_nivel_id and idno.nivel_campo_id = 47 '
            .'left join "Registro_Nivel_Campo" ide on idne.contenido::int = ide.registro_nivel_id and ide.nivel_id = 8 and ide.nivel_campo_id = 33 '
            .'left join "Registro_Nivel_Campo" idl on idnl.contenido::int = idl.registro_nivel_id and idl.nivel_id = 9 and idl. nivel_campo_id = 37 '
            .'left join "Registro_Nivel_Campo" ido on idno.contenido::int = ido.registro_nivel_id and ido.nivel_id = 10 and ido.nivel_campo_id = 42 '
            .'left join "Registro_Nivel_Campo" idi on rnc.registro_nivel_id = idi.registro_nivel_id and idi.nivel_campo_id = 48 '
            .'where  '
            .'rnc.nivel_id = 11 '
            .'and rnc.nivel_campo_id = 49 '
            .'order by '
            .'rnc.registro_nivel_id, rnc.version desc '
            .'';
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function get_metas() {
        $sql = ''
            .'select '
            .'distinct on (rnc.registro_nivel_id) '
            .'ide.contenido as id_eje, '
            .'idl.contenido as id_linea, '
            .'ido.contenido as id_objetivo, '
            .'idi.contenido as id_indicador, '
            .'idm.contenido as id_meta, '
            .'rnc.contenido as desc_meta '
            .'from '
            .'"Registro_Nivel_Campo" rnc  '
            .'left join "Registro_Nivel_Campo" idne on rnc.registro_nivel_id = idne.registro_nivel_id and idne.nivel_campo_id = 51 '
            .'left join "Registro_Nivel_Campo" idnl on rnc.registro_nivel_id = idnl.registro_nivel_id and idnl.nivel_campo_id = 52 '
            .'left join "Registro_Nivel_Campo" idno on rnc.registro_nivel_id = idno.registro_nivel_id and idno.nivel_campo_id = 53 '
            .'left join "Registro_Nivel_Campo" idni on rnc.registro_nivel_id = idni.registro_nivel_id and idni.nivel_campo_id = 54 '
            .'left join "Registro_Nivel_Campo" ide on idne.contenido::int = ide.registro_nivel_id and ide.nivel_id = 8 and ide.nivel_campo_id = 33 '
            .'left join "Registro_Nivel_Campo" idl on idnl.contenido::int = idl.registro_nivel_id and idl.nivel_id = 9 and idl. nivel_campo_id = 37 '
            .'left join "Registro_Nivel_Campo" ido on idno.contenido::int = ido.registro_nivel_id and ido.nivel_id = 10 and ido.nivel_campo_id = 42 '
            .'left join "Registro_Nivel_Campo" idi on idni.contenido::int = idi.registro_nivel_id and idi.nivel_id = 11 and idi.nivel_campo_id = 48 '
            .'left join "Registro_Nivel_Campo" idm on rnc.registro_nivel_id = idm.registro_nivel_id and idm.nivel_campo_id = 55 '
            .'where  '
            .'rnc.nivel_id = 12 '
            .'and rnc.nivel_campo_id = 56 '
            .'order by '
            .'rnc.registro_nivel_id, rnc.version desc '
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
