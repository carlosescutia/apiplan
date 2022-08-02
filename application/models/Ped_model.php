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
            .'left join "Registro_Nivel_Campo" idd on idnd.contenido::int = idd.registro_nivel_id and idd.nivel_id = 3 and idd.nivel_campo_id = 8 '
            .'left join "Registro_Nivel_Campo" idl on rnc.registro_nivel_id = idl.registro_nivel_id and idl.nivel_campo_id =  12 '
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
            .'left join "Registro_Nivel_Campo" idnl on rnc.registro_nivel_id = idnl.registro_nivel_id and idnl.nivel_campo_id = 16 '
            .'left join "Registro_Nivel_Campo" idd on idnd.contenido::int = idd.registro_nivel_id and idd.nivel_id = 3 and idd.nivel_campo_id = 8 '
            .'left join "Registro_Nivel_Campo" idl on idnl.contenido::int = idl.registro_nivel_id and idl.nivel_id = 4 and idl.nivel_campo_id = 12 '
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
            .'select '
            .'distinct on (rnc.registro_nivel_id) '
            .'idd.contenido as id_dimension, '
            .'idl.contenido as id_linea, '
            .'ido.contenido as id_objetivo, '
            .'ide.contenido as id_estrategia, '
            .'rnc.contenido as desc_estrategia '
            .'from '
            .'"Registro_Nivel_Campo" rnc  '
            .'left join "Registro_Nivel_Campo" idnd on rnc.registro_nivel_id = idnd.registro_nivel_id and idnd.nivel_campo_id = 199 '
            .'left join "Registro_Nivel_Campo" idnl on rnc.registro_nivel_id = idnl.registro_nivel_id and idnl.nivel_campo_id = 200 '
            .'left join "Registro_Nivel_Campo" idno on rnc.registro_nivel_id = idno.registro_nivel_id and idno.nivel_campo_id = 201 '
            .'left join "Registro_Nivel_Campo" ide on rnc.registro_nivel_id = ide.registro_nivel_id and ide.nivel_campo_id = 202 '
            .'left join "Registro_Nivel_Campo" idd on idnd.contenido::int = idd.registro_nivel_id and idd.nivel_id = 3 and idd.nivel_campo_id = 8 '
            .'left join "Registro_Nivel_Campo" idl on idnl.contenido::int = idl.registro_nivel_id and idl.nivel_id = 4 and idl.nivel_campo_id = 12 '
            .'left join "Registro_Nivel_Campo" ido on idno.contenido::int = ido.registro_nivel_id and ido.nivel_id = 5 and ido.nivel_campo_id = 17 '
            .'where  '
            .'rnc.nivel_id = 34 '
            .'and rnc.nivel_campo_id = 203 '
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
			.'idd.contenido as id_dimension, '
			.'idl.contenido as id_linea, '
			.'ido.contenido as id_objetivo, '
			.'idi.contenido as id_indicador, '
			.'rnc.contenido as desc_indicador '
			.'from '
			.'"Registro_Nivel_Campo" rnc  '
			.'left join "Registro_Nivel_Campo" idnd on rnc.registro_nivel_id = idnd.registro_nivel_id and idnd.nivel_campo_id = 20 '
			.'left join "Registro_Nivel_Campo" idnl on rnc.registro_nivel_id = idnl.registro_nivel_id and idnl.nivel_campo_id = 21 '
			.'left join "Registro_Nivel_Campo" idno on rnc.registro_nivel_id = idno.registro_nivel_id and idno.nivel_campo_id = 22 '
			.'left join "Registro_Nivel_Campo" idd on idnd.contenido::int = idd.registro_nivel_id and idd.nivel_id = 3 and idd.nivel_campo_id = 8 '
			.'left join "Registro_Nivel_Campo" idl on idnl.contenido::int = idl.registro_nivel_id and idl.nivel_id = 4 and idl.nivel_campo_id = 12 '
			.'left join "Registro_Nivel_Campo" ido on idno.contenido::int = ido.registro_nivel_id and ido.nivel_id = 5 and ido.nivel_campo_id = 17 '
			.'left join "Registro_Nivel_Campo" idi on rnc.registro_nivel_id = idi.registro_nivel_id and idi.nivel_campo_id = 23 '
			.'where  '
			.'rnc.nivel_id = 6 '
			.'and rnc.nivel_campo_id = 24 '
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
            .'idd.contenido as id_dimension, '
            .'idl.contenido as id_linea, '
            .'ido.contenido as id_objetivo, '
            .'idm.contenido as id_meta, '
            .'rnc.contenido as desc_meta '
            .'from '
            .'"Registro_Nivel_Campo" rnc  '
            .'left join "Registro_Nivel_Campo" idnd on rnc.registro_nivel_id = idnd.registro_nivel_id and idnd.nivel_campo_id = 26 '
            .'left join "Registro_Nivel_Campo" idnl on rnc.registro_nivel_id = idnl.registro_nivel_id and idnl.nivel_campo_id = 27 '
            .'left join "Registro_Nivel_Campo" idno on rnc.registro_nivel_id = idno.registro_nivel_id and idno.nivel_campo_id = 28 '
            .'left join "Registro_Nivel_Campo" idd on idnd.contenido::int = idd.registro_nivel_id and idd.nivel_id = 3 and idd.nivel_campo_id = 8 '
            .'left join "Registro_Nivel_Campo" idl on idnl.contenido::int = idl.registro_nivel_id and idl.nivel_id = 4 and idl.nivel_campo_id = 12 '
            .'left join "Registro_Nivel_Campo" ido on idno.contenido::int = ido.registro_nivel_id and ido.nivel_id = 5 and ido.nivel_campo_id = 17 '
            .'left join "Registro_Nivel_Campo" idm on rnc.registro_nivel_id = idm.registro_nivel_id and idm.nivel_campo_id = 30 '
            .'where  '
            .'rnc.nivel_id = 7 '
            .'and rnc.nivel_campo_id = 31 '
            .'order by '
            .'rnc.registro_nivel_id, rnc.version desc '
            .'';
        $query = $this->db->query($sql);
        return $query->result_array();
    }

}
