<?php
class Instrumentos_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_instrumentos() {
        $sql = ''
			.'select '
			.'distinct on (rnc.registro_nivel_id) '
			.'ido.contenido as id_objetivo, '
			.'rnc.contenido as desc_objetivo '
			.'from '
			.'"Registro_Nivel_Campo" rnc  '
			.'left join "Registro_Nivel_Campo" ido on rnc.registro_nivel_id = ido.registro_nivel_id and ido.nivel_campo_id = 5 '
			.'where  '
			.'rnc.nivel_id = 2 '
			.'and rnc.nivel_campo_id = 6 '
			.'order by rnc.registro_nivel_id, rnc.version desc; '
            .'';
        $query = $this->db->query($sql);
        return $query->result_array();
    }

}
