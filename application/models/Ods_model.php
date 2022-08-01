<?php
class Ods_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_objetivos() {
        $sql = ''
			.'select '
			.'distinct on (rnc.registro_nivel_id) '
			.'ido.contenido as id_objetivo, '
			.'rnc.contenido as desc_objetivo '
			.'from '
			.'"Registro_Nivel_Campo" rnc  '
			.'left join "Registro_Nivel_Campo" ido on rnc.registro_nivel_id = ido.registro_nivel_id and ido.nivel_campo_id = 105 '
			.'where  '
			.'rnc.nivel_id = 23 '
			.'and rnc.nivel_campo_id = 106 '
			.'order by rnc.registro_nivel_id, rnc.version desc; '
            .'';
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function get_metas() {
        $sql = ''
			.'select '
			.'distinct on (rnc.registro_nivel_id) '
			.'ido.contenido as id_objetivo, '
			.'idm.contenido as id_meta, '
			.'left(rnc.contenido,60) as desc_meta '
			.'from '
			.'"Registro_Nivel_Campo" rnc  '
			.'left join "Registro_Nivel_Campo" idno on rnc.registro_nivel_id = idno.registro_nivel_id and idno.nivel_campo_id = 192 '
			.'left join "Registro_Nivel_Campo" ido on idno.contenido::int = ido.registro_nivel_id and ido.nivel_id = 23 and ido.nivel_campo_id = 105 '
			.'left join "Registro_Nivel_Campo" idm on rnc.registro_nivel_id = idm.registro_nivel_id and idm.nivel_campo_id = 193 '
			.'where  '
			.'rnc.nivel_id = 33 '
			.'and rnc.nivel_campo_id = 194 '
			.'order by rnc.registro_nivel_id, rnc.version desc ; '
            .'';
        $query = $this->db->query($sql);
        return $query->result_array();
    }

}
