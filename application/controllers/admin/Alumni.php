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
        $this->load->library('form_validation');
        $this->load->library('table');
        $this->load->model('course_model');
        $this->load->model('alumni_model');
        $this->folder = "admin/alumni/";
        $this->folder1 = "views/" . $this->folder;
    }

    public function load_views($url, $data) {
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sub_header');
        $this->load->view($this->folder . $url);
        $this->load->view('templates/sub_footer');
        $this->load->view($this->folder . 'ajax');
        $this->load->view('templates/footer');
    }

    public function views($page, $data) {

        if (!file_exists(APPPATH . $this->folder1 . $page)) {
            $this->load_views($page, $data);
        } else {
            show_404();
        }
    }

    public function index() {
        $data = array('title' => 'Alumni',
            'page' => 'PUP Bansud Campus Alumni',
            'description' => 'List of PUP Alumni',
            'courselist' => $this->course_model->get_course(),
            'alumni' => 'active',
            'course' => '',
            'dashboard' => ''
        );
        $this->views('index', $data);
    }

    public function load_add() {

        $data = array('title' => 'Alumni - Add',
            'page' => 'PUP Bansud Campus Alumni',
            'description' => 'Add New Alumnus',
            'courselist' => $this->course_model->get_course(),
            'alumni' => 'active',
            'course' => '',
            'dashboard' => ''
        );
        $this->views('add', $data);
    }

    public function validate_rules() {
        $this->form_validation->set_rules('firstname', 'First name', 'required');
        $this->form_validation->set_rules('middlename', 'Middle name', 'required');
        $this->form_validation->set_rules('surname', 'Surname', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[wb_user.email]');
        $this->form_validation->set_rules('alumni_number', 'Alumni number', 'required|is_unique[wb_user.alumni_number]');
        $this->form_validation->set_rules('course', 'Academic course', 'required');
        $this->form_validation->set_rules('yeargraduated', 'Year graduated', 'required');
    }

    public function add() {
        $this->validate_rules();
        if ($this->form_validation->run() == FALSE) {
            $this->load_add();
        } else {
            $this->insert();

            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissal"><strong>Successfully Saved:</strong> New Almnus Account is Created!</div>');

            $this->index();
        }
    }

    public function insert() {
        $data = array(
            'surname' => $this->input->post('surname'),
            'firstname' => $this->input->post('firstname'),
            'middlename' => $this->input->post('middlename'),
            'email' => $this->input->post('email'),
            'alumni_number' => $this->input->post('alumni_number'),
            'yeargraduated' => $this->input->post('yeargraduated'),
            'course_no' => $this->input->post('course'),
        );
        $this->alumni_model->insert_alumnni($data);
    }

    public function show_alumni() {
        $data = array(
            'tblcontent' => $this->alumni_model->get_alumni()
        );
        $this->load->view('admin/alumni/table', $data);
    }

    public function delete($id) {
        $this->alumni_model->delete_alumni($id);
        $this->session->set_flashdata('message', '<div class="alert alert-warning"><strong>Successfully Deleted:</strong></div>');
        redirect(base_url('admin/alumni'));
    }

}
