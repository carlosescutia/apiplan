<?php
class Aps_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_programas() {
        $sql = ''
            .'select '
            .'distinct on (rnc.registro_nivel_id) '
            .'idp.contenido as id_programa, '
            .'rnc.contenido as desc_programa '
            .'from '
            .'"Registro_Nivel_Campo" rnc  '
            .'left join "Registro_Nivel_Campo" idp on rnc.registro_nivel_id = idp.registro_nivel_id and idp.nivel_campo_id = 58 '
            .'where  '
            .'rnc.nivel_id = 13 '
            .'and rnc.nivel_campo_id = 59 '
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
            .'idp.contenido as id_programa, '
            .'idl.contenido as id_linea, '
            .'rnc.contenido as desc_linea '
            .'from '
            .'"Registro_Nivel_Campo" rnc  '
            .'left join "Registro_Nivel_Campo" idnp on rnc.registro_nivel_id = idnp.registro_nivel_id and idnp.nivel_campo_id = 61 '
            .'left join "Registro_Nivel_Campo" idp on idnp.contenido::int = idp.registro_nivel_id and idp.nivel_id = 13 and idp.nivel_campo_id = 58 '
            .'left join "Registro_Nivel_Campo" idl on rnc.registro_nivel_id = idl.registro_nivel_id and idl.nivel_campo_id = 62 '
            .'where  '
            .'rnc.nivel_id = 14 '
            .'and rnc.nivel_campo_id = 63 '
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
            .'idp.contenido as id_programa, '
            .'idl.contenido as id_linea, '
            .'ido.contenido as id_objetivo, '
            .'rnc.contenido as desc_objetivo '
            .'from '
            .'"Registro_Nivel_Campo" rnc  '
            .'left join "Registro_Nivel_Campo" idnp on rnc.registro_nivel_id = idnp.registro_nivel_id and idnp.nivel_campo_id = 65 '
            .'left join "Registro_Nivel_Campo" idnl on rnc.registro_nivel_id = idnl.registro_nivel_id and idnl.nivel_campo_id = 66 '
            .'left join "Registro_Nivel_Campo" idp on idnp.contenido::int = idp.registro_nivel_id and idp.nivel_id = 13 and idp.nivel_campo_id = 58 '
            .'left join "Registro_Nivel_Campo" idl on idnl.contenido::int = idl.registro_nivel_id and idl.nivel_id = 14 and idl.nivel_campo_id = 62 '
            .'left join "Registro_Nivel_Campo" ido on rnc.registro_nivel_id = ido.registro_nivel_id and ido.nivel_campo_id = 67 '
            .'where  '
            .'rnc.nivel_id = 15 '
            .'and rnc.nivel_campo_id = 68 '
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
            .'idp.contenido as id_programa, '
            .'idl.contenido as id_linea, '
            .'ido.contenido as id_objetivo, '
            .'idi.contenido as id_indicador, '
            .'rnc.contenido as desc_indicador '
            .'from '
            .'"Registro_Nivel_Campo" rnc  '
            .'left join "Registro_Nivel_Campo" idnp on rnc.registro_nivel_id = idnp.registro_nivel_id and idnp.nivel_campo_id = 70 '
            .'left join "Registro_Nivel_Campo" idnl on rnc.registro_nivel_id = idnl.registro_nivel_id and idnl.nivel_campo_id = 71 '
            .'left join "Registro_Nivel_Campo" idno on rnc.registro_nivel_id = idno.registro_nivel_id and idno.nivel_campo_id = 72 '
            .'left join "Registro_Nivel_Campo" idp on idnp.contenido::int = idp.registro_nivel_id and idp.nivel_id = 13 and idp.nivel_campo_id = 58 '
            .'left join "Registro_Nivel_Campo" idl on idnl.contenido::int = idl.registro_nivel_id and idl.nivel_id = 14 and idl.nivel_campo_id = 62 '
            .'left join "Registro_Nivel_Campo" ido on idno.contenido::int = ido.registro_nivel_id and ido.nivel_id = 15 and ido.nivel_campo_id = 67 '
            .'left join "Registro_Nivel_Campo" idi on rnc.registro_nivel_id = idi.registro_nivel_id and idi.nivel_campo_id = 73 '
            .'where  '
            .'rnc.nivel_id = 16 '
            .'and rnc.nivel_campo_id = 74 '
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
            .'idp.contenido as id_programa, '
            .'idl.contenido as id_linea, '
            .'ido.contenido as id_objetivo, '
            .'idi.contenido as id_indicador, '
            .'idm.contenido as id_meta, '
            .'rnc.contenido as desc_meta '
            .'from '
            .'"Registro_Nivel_Campo" rnc  '
            .'left join "Registro_Nivel_Campo" idnp on rnc.registro_nivel_id = idnp.registro_nivel_id and idnp.nivel_campo_id = 81 '
            .'left join "Registro_Nivel_Campo" idnl on rnc.registro_nivel_id = idnl.registro_nivel_id and idnl.nivel_campo_id = 76 '
            .'left join "Registro_Nivel_Campo" idno on rnc.registro_nivel_id = idno.registro_nivel_id and idno.nivel_campo_id = 77 '
            .'left join "Registro_Nivel_Campo" idni on rnc.registro_nivel_id = idni.registro_nivel_id and idni.nivel_campo_id = 78 '
            .'left join "Registro_Nivel_Campo" idp on idnp.contenido::int = idp.registro_nivel_id and idp.nivel_id = 13 and idp.nivel_campo_id = 58 '
            .'left join "Registro_Nivel_Campo" idl on idnl.contenido::int = idl.registro_nivel_id and idl.nivel_id = 14 and idl.nivel_campo_id = 62 '
            .'left join "Registro_Nivel_Campo" ido on idno.contenido::int = ido.registro_nivel_id and ido.nivel_id = 15 and ido.nivel_campo_id = 67 '
            .'left join "Registro_Nivel_Campo" idi on idni.contenido::int = idi.registro_nivel_id and idi.nivel_id = 16 and idi.nivel_campo_id = 73 '
            .'left join "Registro_Nivel_Campo" idm on rnc.registro_nivel_id = idm.registro_nivel_id and idm.nivel_campo_id = 79 '
            .'where  '
            .'rnc.nivel_id = 17 '
            .'and rnc.nivel_campo_id = 80 '
            .'order by '
            .'rnc.registro_nivel_id, rnc.version desc '
            .'';
        $query = $this->db->query($sql);
        return $query->result_array();
    }

}
