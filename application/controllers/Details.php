<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Details extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }

    public function index() {
        ;
    }

    public function show() {
        $this->load->model('details_model');

        var_dump($this->details_model->get_details());
    }

    public function info() {
        ;
    }

    public function mark() {
        ;
    }

    public function add() {
        ;
    }
}
