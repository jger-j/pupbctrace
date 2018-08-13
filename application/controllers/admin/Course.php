<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * Here comes the text of your license
 * Each line should be prefixed with  * 
 */

/**
 * Description of Course
 *
 * @author End 
 */
class Course extends CI_Controller {

    //put your code here
    public $folder;
    public $folder1;

    public function __construct() {
        parent::__construct();
        $this->load->model('course_model');
        $this->folder = "admin/course/";
        $this->folder1 = "views/" . $this->folder;
    }

    public function load_views($url, $data) {
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sub_header');
        $this->load->view($this->folder . $url);
        $this->load->view('templates/sub_footer');
        //$this->load->view($this->folder.'ajax',$data);
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
        
        $data = array('title' => 'Course',
            'page' => 'Course List',
            'description' => 'The list of Course offered in PUP Bansud Campus',
            'tblcontent' => $this->course_model->get_course()
           
                );
        $this->views('index', $data);
    }

    public function add() {
        $code = $this->input->post('code');
        $description = $this->input->post('description');
        $this->course_model->insert_course($code, $description);
        redirect(base_url('admin/course'));
    }

    public function delete($id) {
        $this->course_model->delete_course($id);
        $this->session->set_flashdata('message', '<div class="alert alert-warning"><strong>Successfully Deleted:</strong></div>');
        redirect(base_url('admin/course'));
    }

}
