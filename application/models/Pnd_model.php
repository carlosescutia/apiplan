<?php
class Pnd_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_ejes() {
        $sql = ''
			.'select '
			.'distinct on (rnc.registro_nivel_id) '
			.'ide.contenido as id_eje, '
			.'left(rnc.contenido,60) as desc_eje  '
			.'from '
			.'"Registro_Nivel_Campo" rnc  '
			.'left join "Registro_Nivel_Campo" ide on rnc.registro_nivel_id = ide.registro_nivel_id and ide.nivel_campo_id = 214 '
			.'where  '
			.'rnc.nivel_id = 38 '
			.'and rnc.nivel_campo_id = 215 '
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
            .'ido.contenido as id_objetivo, '
            .'rnc.contenido as desc_objetivo  '
            .'from '
            .'"Registro_Nivel_Campo" rnc  '
            .'left join "Registro_Nivel_Campo" idne on rnc.registro_nivel_id = idne.registro_nivel_id and idne.nivel_campo_id = 217 '
            .'left join "Registro_Nivel_Campo" ide on idne.contenido::int = ide.registro_nivel_id and ide.nivel_id = 38 and ide.nivel_campo_id = 214 '
            .'left join "Registro_Nivel_Campo" ido on rnc.registro_nivel_id = ido.registro_nivel_id and ido.nivel_campo_id = 218 '
            .'where  '
            .'rnc.nivel_id = 39 '
            .'and rnc.nivel_campo_id = 219 '
            .'order by '
            .'rnc.registro_nivel_id, rnc.version desc '
            .'';
        $query = $this->db->query($sql);
        return $query->result_array();
    }

}
