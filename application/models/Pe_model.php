<?php
class Pe_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_programas() {
        $sql = ''
            .'select '
            .'distinct on (rnc.registro_nivel_id) '
            .'idit.contenido as id_instrumento, '
            .'idp.contenido as id_programa, '
            .'rnc.contenido as desc_programa '
            .'from '
            .'"Registro_Nivel_Campo" rnc  '
            .'left join "Registro_Nivel_Campo" idnit on rnc.registro_nivel_id = idnit.registro_nivel_id and idnit.nivel_campo_id = 87 '
			.'left join "Registro_Nivel_Campo" idit on idnit.contenido::int = idit.registro_nivel_id and idit.nivel_id = 2 and idit.nivel_campo_id = 5 '
            .'left join "Registro_Nivel_Campo" idp on rnc.registro_nivel_id = idp.registro_nivel_id and idp.nivel_campo_id = 88 '
            .'where  '
            .'rnc.nivel_id = 19 '
            .'and rnc.nivel_campo_id = 89 '
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
            .'idit.contenido as id_instrumento, '
            .'idp.contenido as id_programa, '
            .'idl.contenido as id_linea, '
            .'rnc.contenido as desc_linea '
            .'from '
            .'"Registro_Nivel_Campo" rnc  '
            .'left join "Registro_Nivel_Campo" idnit on rnc.registro_nivel_id = idnit.registro_nivel_id and idnit.nivel_campo_id = 90 '
			.'left join "Registro_Nivel_Campo" idit on idnit.contenido::int = idit.registro_nivel_id and idit.nivel_id = 2 and idit.nivel_campo_id = 5 '
            .'left join "Registro_Nivel_Campo" idnp on rnc.registro_nivel_id = idnp.registro_nivel_id and idnp.nivel_campo_id = 91 '
            .'left join "Registro_Nivel_Campo" idp on idnp.contenido::int = idp.registro_nivel_id and idp.nivel_id = 19 and idp.nivel_campo_id = 88 '
            .'left join "Registro_Nivel_Campo" idl on rnc.registro_nivel_id = idl.registro_nivel_id and idl.nivel_campo_id = 92 '
            .'where  '
            .'rnc.nivel_id = 20 '
            .'and rnc.nivel_campo_id = 93 '
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
            .'idp.contenido as id_programa, '
            .'idl.contenido as id_linea, '
            .'ido.contenido as id_objetivo, '
            .'rnc.contenido as desc_objetivo '
            .'from '
            .'"Registro_Nivel_Campo" rnc  '
            .'left join "Registro_Nivel_Campo" idnit on rnc.registro_nivel_id = idnit.registro_nivel_id and idnit.nivel_campo_id = 94 '
			.'left join "Registro_Nivel_Campo" idit on idnit.contenido::int = idit.registro_nivel_id and idit.nivel_id = 2 and idit.nivel_campo_id = 5 '
            .'left join "Registro_Nivel_Campo" idnp on rnc.registro_nivel_id = idnp.registro_nivel_id and idnp.nivel_campo_id = 95 '
            .'left join "Registro_Nivel_Campo" idnl on rnc.registro_nivel_id = idnl.registro_nivel_id and idnl.nivel_campo_id = 96 '
            .'left join "Registro_Nivel_Campo" idp on idnp.contenido::int = idp.registro_nivel_id and idp.nivel_id = 19 and idp.nivel_campo_id = 88 '
            .'left join "Registro_Nivel_Campo" idl on idnl.contenido::int = idl.registro_nivel_id and idl.nivel_id = 20 and idl.nivel_campo_id = 92 '
            .'left join "Registro_Nivel_Campo" ido on rnc.registro_nivel_id = ido.registro_nivel_id and ido.nivel_campo_id = 97 '
            .'where  '
            .'rnc.nivel_id = 21 '
            .'and rnc.nivel_campo_id = 98 '
            .'order by '
            .'rnc.registro_nivel_id, rnc.version desc '
            .'';
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function get_lineas_accion() {
        $sql = ''
			.'select '
			.'distinct on (rnc.registro_nivel_id) '
			.'idit.contenido as id_instrumento, '
			.'idp.contenido as id_programa, '
			.'idl.contenido as id_linea, '
			.'ido.contenido as id_objetivo, '
			.'ide.contenido as id_estrategia, '
			.'idla.contenido as id_linea_accion, '
			.'rnc.contenido as desc_linea_accion '
			.'from '
			.'"Registro_Nivel_Campo" rnc  '
			.'left join "Registro_Nivel_Campo" idnit on rnc.registro_nivel_id = idnit.registro_nivel_id and idnit.nivel_campo_id = 331 '
			.'left join "Registro_Nivel_Campo" idnp on rnc.registro_nivel_id = idnp.registro_nivel_id and idnp.nivel_campo_id = 332 '
			.'left join "Registro_Nivel_Campo" idnl on rnc.registro_nivel_id = idnl.registro_nivel_id and idnl.nivel_campo_id = 333 '
			.'left join "Registro_Nivel_Campo" idno on rnc.registro_nivel_id = idno.registro_nivel_id and idno.nivel_campo_id = 334 '
			.'left join "Registro_Nivel_Campo" idne on rnc.registro_nivel_id = idne.registro_nivel_id and idne.nivel_campo_id = 335 '
			.'left join "Registro_Nivel_Campo" idit on idnit.contenido::int = idit.registro_nivel_id and idit.nivel_id = 2 and idit.nivel_campo_id = 5 '
			.'left join "Registro_Nivel_Campo" idp on idnp.contenido::int = idp.registro_nivel_id and idp.nivel_id = 19 and idp.nivel_campo_id = 88 '
			.'left join "Registro_Nivel_Campo" idl on idnl.contenido::int = idl.registro_nivel_id and idl.nivel_id = 20 and idl.nivel_campo_id = 92 '
			.'left join "Registro_Nivel_Campo" ido on idno.contenido::int = ido.registro_nivel_id and ido.nivel_id = 21 and ido.nivel_campo_id = 97 '
			.'left join "Registro_Nivel_Campo" ide on idne.contenido::int = ide.registro_nivel_id and ide.nivel_id = 57 and ide.nivel_campo_id = 317 '
			.'left join "Registro_Nivel_Campo" idla on rnc.registro_nivel_id = idla.registro_nivel_id and idla.nivel_campo_id = 336 '
			.'where  '
			.'rnc.nivel_id = 60 '
			.'and rnc.nivel_campo_id = 337 '
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
			.'idit.contenido as id_instrumento, '
			.'idp.contenido as id_programa, '
			.'idl.contenido as id_linea, '
			.'ido.contenido as id_objetivo, '
			.'ide.contenido as id_estrategia, '
			.'rnc.contenido as desc_estrategia '
			.'from '
			.'"Registro_Nivel_Campo" rnc  '
			.'left join "Registro_Nivel_Campo" idnit on rnc.registro_nivel_id = idnit.registro_nivel_id and idnit.nivel_campo_id = 319 '
			.'left join "Registro_Nivel_Campo" idnp on rnc.registro_nivel_id = idnp.registro_nivel_id and idnp.nivel_campo_id = 320 '
			.'left join "Registro_Nivel_Campo" idnl on rnc.registro_nivel_id = idnl.registro_nivel_id and idnl.nivel_campo_id = 321 '
			.'left join "Registro_Nivel_Campo" idno on rnc.registro_nivel_id = idno.registro_nivel_id and idno.nivel_campo_id = 322 '
			.'left join "Registro_Nivel_Campo" idit on idnit.contenido::int = idit.registro_nivel_id and idit.nivel_id = 2 and idit.nivel_campo_id = 5 '
			.'left join "Registro_Nivel_Campo" idp on idnp.contenido::int = idp.registro_nivel_id and idp.nivel_id = 19 and idp.nivel_campo_id = 88 '
			.'left join "Registro_Nivel_Campo" idl on idnl.contenido::int = idl.registro_nivel_id and idl.nivel_id = 20 and idl.nivel_campo_id = 92 '
			.'left join "Registro_Nivel_Campo" ido on idno.contenido::int = ido.registro_nivel_id and ido.nivel_id = 21 and ido.nivel_campo_id = 97 '
			.'left join "Registro_Nivel_Campo" ide on rnc.registro_nivel_id = ide.registro_nivel_id and ide.nivel_campo_id = 323 '
			.'where  '
			.'rnc.nivel_id = 58 '
			.'and rnc.nivel_campo_id = 324 '
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
            .'idit.contenido as id_instrumento, '
            .'idp.contenido as id_programa, '
            .'idl.contenido as id_linea, '
            .'ido.contenido as id_objetivo, '
            .'idi.contenido as id_indicador, '
            .'rnc.contenido as desc_indicador '
            .'from '
            .'"Registro_Nivel_Campo" rnc  '
            .'left join "Registro_Nivel_Campo" idnit on rnc.registro_nivel_id = idnit.registro_nivel_id and idnit.nivel_campo_id = 99 '
			.'left join "Registro_Nivel_Campo" idit on idnit.contenido::int = idit.registro_nivel_id and idit.nivel_id = 2 and idit.nivel_campo_id = 5 '
            .'left join "Registro_Nivel_Campo" idnp on rnc.registro_nivel_id = idnp.registro_nivel_id and idnp.nivel_campo_id = 100 '
            .'left join "Registro_Nivel_Campo" idnl on rnc.registro_nivel_id = idnl.registro_nivel_id and idnl.nivel_campo_id = 101 '
            .'left join "Registro_Nivel_Campo" idno on rnc.registro_nivel_id = idno.registro_nivel_id and idno.nivel_campo_id = 102 '
            .'left join "Registro_Nivel_Campo" idp on idnp.contenido::int = idp.registro_nivel_id and idp.nivel_id = 19 and idp.nivel_campo_id = 88 '
            .'left join "Registro_Nivel_Campo" idl on idnl.contenido::int = idl.registro_nivel_id and idl.nivel_id = 20 and idl.nivel_campo_id = 92 '
            .'left join "Registro_Nivel_Campo" ido on idno.contenido::int = ido.registro_nivel_id and ido.nivel_id = 21 and ido.nivel_campo_id = 97 '
            .'left join "Registro_Nivel_Campo" idi on rnc.registro_nivel_id = idi.registro_nivel_id and idi.nivel_campo_id = 103 '
            .'where  '
            .'rnc.nivel_id = 22 '
            .'and rnc.nivel_campo_id = 104 '
            .'order by '
            .'rnc.registro_nivel_id, rnc.version desc '
            .'';
        $query = $this->db->query($sql);
        return $query->result_array();
    }

}
