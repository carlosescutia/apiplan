<?php
class Metas_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_metas() {
        $sql = 'select * from metas order by id_meta;';
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function get_meta($id_meta) {
        $sql = 'select * from metas where id_meta = ?;';
        $query = $this->db->query($sql, array($id_meta));
        return $query->row_array();
    }

    public function get_metaods($id_meta) {
        $sql = 'select o.id_ods, o.nom_ods, m.id_meta, left(m.nom_meta, 40) as nom_meta from metas m left join ods o on m.id_ods = o.id_ods where m.id_meta = ?';
        $query = $this->db->query($sql, array($id_meta));
        return $query->row_array();
    }

    public function get_metasods() {
        $sql = 'select o.id_ods, o.nom_ods, m.id_meta, left(m.nom_meta, 40) as nom_meta from metas m left join ods o on m.id_ods = o.id_ods';
        $query = $this->db->query($sql);
        return $query->result_array();
    }

}
