<?php
class Instrumentos_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_all_instrumentos() {
        $sql = 'select * from "Nivel" order by id;';
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function get_instrumento($id_instrumento) {
        $sql = 'select * from "Nivel" where id = ?;';
        $query = $this->db->query($sql, array($id_instrumento));
        return $query->row_array();
    }

}
