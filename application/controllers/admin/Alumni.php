<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * Here comes the text of your license
 * Each line should be prefixed with  * 
 */

/**
 * Description of Alumni
 *
 * @author End 
 */
class Alumni extends CI_Controller {

    //put your code here
    public $folder;
    public $folder1;

    public function __construct() {
        parent::__construct();
        $this->load->model('degree_model');
        $this->folder = "admin/alumni/";
        $this->folder1 = "views/" . $this->folder;
    }

    public function load_views($url, $data) {
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sub_header');
        $this->load->view($this->folder . $url);
        $this->load->view('templates/sub_footer');
        $this->load->view('templates/footer');
    }

    public function views($page = 'index') {

        $data = array('title' => 'Alumni',
            'page' => 'Manage Alumni',
            'page1' => 'List',
            'tblcontent' => $this->degree_model->get_degree()
        );
        if (!file_exists(APPPATH . $this->folder1 . $page)) {
            $this->load_views($page, $data);
        } else {
            show_404();
        }
    }

    public function index() {
        $this->views('index');
    }
    

//    public function add() {
//
//        $data = array(
//        );
//        $this->alumni_model->insert_alumni($data);
//    }
}
