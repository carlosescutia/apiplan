<?php
class Apg_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_ejes() {
        $sql = ''
            .'select '
            .'';
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function get_lineas() {
        $sql = ''
            .'select '
            .'';
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function get_objetivos() {
        $sql = ''
            .'select '
            .'';
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function get_estrategias() {
        $sql = ''
            .'select '
            .'';
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function get_indicadores() {
        $sql = ''
            .'select '
            .'';
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function get_metas() {
        $sql = ''
            .'select '
            .'';
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function get_ftis() {
        $sql = ''
            .'select '
            .'';
        $query = $this->db->query($sql);
        return $query->result_array();
    }

}
