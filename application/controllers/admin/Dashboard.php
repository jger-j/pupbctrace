<?php

//defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * Here comes the text of your license
 * Each line should be prefixed with  * 
 */

/**
 * Description of Dashboard
 *
 * @author End 
 */
class Dashboard extends CI_Controller {
    public $folder;
    public $folder1;

    public function __construct() {
        parent::__construct();
        if (!($this->session->userdata('role')==="administrator")) {
            redirect(base_url('user/redirect_page'));
        }
        $this->folder = "admin/dashboard/";
        $this->folder1 = "views/" . $this->folder;
    }

    public function load_views($url, $data) {
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sub_header');
        $this->load->view($this->folder . $url);
        $this->load->view('templates/sub_footer');
        $this->load->view('templates/footer');
    }

    public function views($page, $data) {
        if (!file_exists(APPPATH . $this->folder1 . $page)) {
            $this->load_views($page, $data);
        } else {
            // show_404();
            echo 'erro';
        }
    }

    public function index() {
        
        $data = array('title' => 'TRACE - Dashboard',
            'page' => 'Dashboard',
            'description' => 'Some Description',
            'alumni'=>'',
            'dashboard'=>'active',
            'course'=>''
        );
        $this->views('index', $data);
    }

}
