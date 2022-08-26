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
			.'distinct on (rnc.registro_nivel_id) '
			.'idit.contenido as id_instrumento, '
			.'ida.contenido as id_agenda, '
			.'ido.contenido as id_objetivo, '
			.'ide.contenido as id_estrategia, '
			.'rnc.contenido as desc_estrategia  '
			.'from '
			.'"Registro_Nivel_Campo" rnc  '
			.'left join "Registro_Nivel_Campo" idnit on rnc.registro_nivel_id = idnit.registro_nivel_id and idnit.nivel_campo_id = 276 '
			.'left join "Registro_Nivel_Campo" idna on rnc.registro_nivel_id = idna.registro_nivel_id and idna.nivel_campo_id = 277 '
			.'left join "Registro_Nivel_Campo" idno on rnc.registro_nivel_id = idno.registro_nivel_id and idno.nivel_campo_id = 278 '
			.'left join "Registro_Nivel_Campo" idit on idnit.contenido::int = idit.registro_nivel_id and idit.nivel_id = 2 and idit.nivel_campo_id = 5 '
			.'left join "Registro_Nivel_Campo" ida on idna.contenido::int = ida.registro_nivel_id and ida.nivel_id = 49 and ida.nivel_campo_id = 270 '
			.'left join "Registro_Nivel_Campo" ido on idno.contenido::int = ido.registro_nivel_id and ido.nivel_id = 50 and ido.nivel_campo_id = 274 '
			.'left join "Registro_Nivel_Campo" ide on rnc.registro_nivel_id = ide.registro_nivel_id and ide.nivel_campo_id = 279 '
			.'where  '
			.'rnc.nivel_id = 51 '
			.'and rnc.nivel_campo_id = 280 '
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
			.'ida.contenido as id_agenda, '
			.'ido.contenido as id_objetivo, '
			.'ide.contenido as id_estrategia, '
			.'idl.contenido as id_linea, '
			.'rnc.contenido as desc_linea  '
			.'from '
			.'"Registro_Nivel_Campo" rnc  '
			.'left join "Registro_Nivel_Campo" idnit on rnc.registro_nivel_id = idnit.registro_nivel_id and idnit.nivel_campo_id = 281 '
			.'left join "Registro_Nivel_Campo" idna on rnc.registro_nivel_id = idna.registro_nivel_id and idna.nivel_campo_id = 282 '
			.'left join "Registro_Nivel_Campo" idno on rnc.registro_nivel_id = idno.registro_nivel_id and idno.nivel_campo_id = 283 '
			.'left join "Registro_Nivel_Campo" idne on rnc.registro_nivel_id = idne.registro_nivel_id and idne.nivel_campo_id = 284 '
			.'left join "Registro_Nivel_Campo" idit on idnit.contenido::int = idit.registro_nivel_id and idit.nivel_id = 2 and idit.nivel_campo_id = 5 '
			.'left join "Registro_Nivel_Campo" ida on idna.contenido::int = ida.registro_nivel_id and ida.nivel_id = 49 and ida.nivel_campo_id = 270 '
			.'left join "Registro_Nivel_Campo" ido on idno.contenido::int = ido.registro_nivel_id and ido.nivel_id = 50 and ido.nivel_campo_id = 274 '
			.'left join "Registro_Nivel_Campo" ide on idne.contenido::int = ide.registro_nivel_id and ide.nivel_id = 51 and ide.nivel_campo_id = 279 '
			.'left join "Registro_Nivel_Campo" idl on rnc.registro_nivel_id = idl.registro_nivel_id and idl.nivel_campo_id = 285 '
			.'where  '
			.'rnc.nivel_id = 52 '
			.'and rnc.nivel_campo_id = 286 '
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
			.'ida.contenido as id_agenda, '
			.'ido.contenido as id_objetivo, '
			.'idi.contenido as id_indicador, '
			.'rnc.contenido as desc_indicador, '
			.'idr.contenido as responsable '
			.'from '
			.'"Registro_Nivel_Campo" rnc  '
			.'left join "Registro_Nivel_Campo" idnit on rnc.registro_nivel_id = idnit.registro_nivel_id and idnit.nivel_campo_id = 287 '
			.'left join "Registro_Nivel_Campo" idna on rnc.registro_nivel_id = idna.registro_nivel_id and idna.nivel_campo_id = 288 '
			.'left join "Registro_Nivel_Campo" idno on rnc.registro_nivel_id = idno.registro_nivel_id and idno.nivel_campo_id = 289 '
			.'left join "Registro_Nivel_Campo" idit on idnit.contenido::int = idit.registro_nivel_id and idit.nivel_id = 2 and idit.nivel_campo_id = 5 '
			.'left join "Registro_Nivel_Campo" ida on idna.contenido::int = ida.registro_nivel_id and ida.nivel_id = 49 and ida.nivel_campo_id = 270 '
			.'left join "Registro_Nivel_Campo" ido on idno.contenido::int = ido.registro_nivel_id and ido.nivel_id = 50 and ido.nivel_campo_id = 274 '
			.'left join "Registro_Nivel_Campo" idi on rnc.registro_nivel_id = idi.registro_nivel_id and idi.nivel_campo_id = 290 '
			.'left join "Registro_Nivel_Campo" idr on rnc.registro_nivel_id = idr.registro_nivel_id and idr.nivel_campo_id = 292 '
			.'where  '
			.'rnc.nivel_id = 53 '
			.'and rnc.nivel_campo_id = 291 '
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
			.'idit.contenido as id_instrumento, '
			.'ida.contenido as id_agenda, '
			.'ido.contenido as id_objetivo, '
			.'idi.contenido as id_indicador, '
			.'idm.contenido as id_meta, '
			.'rnc.contenido as desc_meta, '
			.'idr.contenido as responsable '
			.'from '
			.'"Registro_Nivel_Campo" rnc  '
			.'left join "Registro_Nivel_Campo" idnit on rnc.registro_nivel_id = idnit.registro_nivel_id and idnit.nivel_campo_id = 293 '
			.'left join "Registro_Nivel_Campo" idna on rnc.registro_nivel_id = idna.registro_nivel_id and idna.nivel_campo_id = 294 '
			.'left join "Registro_Nivel_Campo" idno on rnc.registro_nivel_id = idno.registro_nivel_id and idno.nivel_campo_id = 295 '
			.'left join "Registro_Nivel_Campo" idni on rnc.registro_nivel_id = idni.registro_nivel_id and idni.nivel_campo_id = 296 '
			.'left join "Registro_Nivel_Campo" idit on idnit.contenido::int = idit.registro_nivel_id and idit.nivel_id = 2 and idit.nivel_campo_id = 5 '
			.'left join "Registro_Nivel_Campo" ida on idna.contenido::int = ida.registro_nivel_id and ida.nivel_id = 49 and ida.nivel_campo_id = 270 '
			.'left join "Registro_Nivel_Campo" ido on idno.contenido::int = ido.registro_nivel_id and ido.nivel_id = 50 and ido.nivel_campo_id = 274 '
			.'left join "Registro_Nivel_Campo" idi on idni.contenido::int = idi.registro_nivel_id and idi.nivel_id = 53 and idi.nivel_campo_id = 290 '
			.'left join "Registro_Nivel_Campo" idm on rnc.registro_nivel_id = idm.registro_nivel_id and idm.nivel_campo_id = 297 '
			.'left join "Registro_Nivel_Campo" idr on rnc.registro_nivel_id = idr.registro_nivel_id and idr.nivel_campo_id = 299 '
			.'where  '
			.'rnc.nivel_id = 54 '
			.'and rnc.nivel_campo_id = 298 '
			.'order by '
			.'rnc.registro_nivel_id, rnc.version desc '
            .'';
        $query = $this->db->query($sql);
        return $query->result_array();
    }

}
