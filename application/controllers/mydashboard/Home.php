<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * Here comes the text of your license
 * Each line should be prefixed with  * 
 */

/**
 * Description of Index
 *
 * @author End 
 */
class Home extends CI_Controller {

    //put your code here
    public function __construct() {
        parent::__construct();
        if (!($this->session->userdata('role') === "alumnus")) {
            redirect(base_url('user/redirect_page'));
        }
    }

    public function index() {
        $data = array('title' => 'Home',
            'page' => 'Dashboard',
            'description' => uri_string(),
            'dashboard' => 'active',
        );
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sub_header_2');

        $this->load->view('templates/sub_footer');
        $this->load->view('templates/footer');
    }

}
