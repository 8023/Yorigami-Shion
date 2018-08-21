<?php
defined('BASEPATH') OR exit('no direct script access allowed');

class Details_model extends CI_Model {
    public function __construct() {
        parent::__construct();
    }

    public function get_details() {
        $this->load->database();
        $query = $this->db->get('detail');
        return $query->result();
    }
}