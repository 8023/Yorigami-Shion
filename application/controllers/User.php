<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *      http://example.com/index.php/welcome
     *  - or -
     *      http://example.com/index.php/welcome/index
     *  - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */

    public function __construct() {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('welcome_message');
    }

    public function show()
    {
        $this->load->model('user_model');
        $alluser = $this->user_model->get_all_user(1,1,1);
        $data = ['vara' => $alluser];
        $this->load->view('user_detail', $data);
    }

    public function test() {
        $this->load->database();
        $query = $this->db->query("SELECT * FROM user");
        var_dump($query->result());
        foreach ($query->result() as $row) {
            echo $row->uid;
            echo $row->name;
            echo $row->email;
            echo $row->website;
        }
    }
}
