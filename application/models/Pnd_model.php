<?php
class Pnd_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_objetivos() {
        $sql = ''
            .'select '
            .'';
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function get_ejes() {
        $sql = ''
            .'select '
            .'';
        $query = $this->db->query($sql);
        return $query->result_array();
    }

}
