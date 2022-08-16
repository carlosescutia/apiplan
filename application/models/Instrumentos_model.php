<?php
class Instrumentos_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_instrumentos() {
        $sql = ''
			.'select '
			.'distinct on (rnc.registro_nivel_id) '
			.'idi.contenido as id_instrumento, '
			.'rnc.contenido as desc_instrumento '
			.'from '
			.'"Registro_Nivel_Campo" rnc  '
			.'left join "Registro_Nivel_Campo" idi on rnc.registro_nivel_id = idi.registro_nivel_id and idi.nivel_campo_id = 5 '
			.'where  '
			.'rnc.nivel_id = 2 '
			.'and rnc.nivel_campo_id = 6 '
			.'order by rnc.registro_nivel_id, rnc.version desc; '
            .'';
        $query = $this->db->query($sql);
        return $query->result_array();
    }

}
