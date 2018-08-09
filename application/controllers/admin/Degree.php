<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * Here comes the text of your license
 * Each line should be prefixed with  * 
 */

/**
 * Description of Degree
 *
 * @author End 
 */
class Degree extends CI_Controller {

    //put your code here
    public $folder;
    public $folder1;

    public function __construct() {
        parent::__construct();
        $this->load->model('degree_model');
        $this->folder = "admin/degree/";
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

        $data = array('title' => 'Degree', 'page' => 'Manage Acdemic Degree', 'page1' => 'List', 'tblcontent' => $this->degree_model->get_degree());
        if (!file_exists(APPPATH . $this->folder1 . $page)) {
            $this->load_views($page, $data);
        } else {
            show_404();
        }
    }

    public function index() {
        $this->views('index');
    }

    public function add() {
        $code = $this->input->post('code');
        $description = $this->input->post('description');
        $this->degree_model->insert_degree($code, $description);
        redirect(base_url('admin/degree'));
    }

    public function delete($id) {
        $this->degree_model->delete_degree($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success"><strong>Successfully Deleted:</strong></div>');
        redirect(base_url('admin/degree'));
    }

}
