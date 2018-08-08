<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();

        if (empty($this->session->userdata('user'))) {
            redirect('../login');
        }
    }

    public function index() {

        $data = array(
            'title' => 'Dashboard',
            'bread' => 'Overview');
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sub_header');
        $this->load->view('templates/blank');
        $this->load->view('templates/sub_footer');
        $this->load->view('templates/footer');
    }

    public function academic_year() {

        $data = array(
            'title' => 'Academic Year'
        );
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sub_header');

        $this->load->view('academic_year');

        $this->load->view('templates/sub_footer');
        $this->load->view('templates/footer');
    }

}
