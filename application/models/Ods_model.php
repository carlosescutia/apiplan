<?php
class Ods_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_all_ods() {
        $sql = 'select * from ods order by id_ods;';
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function get_ods($id_ods) {
        $sql = 'select * from ods where id_ods = ?;';
        $query = $this->db->query($sql, array($id_ods));
        return $query->row_array();
    }

}
