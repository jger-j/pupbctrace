<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
    }

    public function login() {
        $this->redirect_page();
    }
    public function load_login(){
        $data['title'] = 'Login';
        $this->load->view('templates/header_1', $data);
        $this->load->view('login');
        $this->load->view('templates/footer_1');
    }

    public function logout() {
        $this->session->unset_userdata('user');
        $this->session->unset_userdata('role');
        //$this->session->unset_userdata('role');
        redirect(base_url('login'));
    }
    
    public function auth() {
        if ($this->User_model->signin()) {
            $this->redirect_page();
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger"><strong>Login Error:</strong> Username or Password is invalid!</div>');
            redirect(base_url('login'));
        }
    }
    
    public function redirect_page(){
        
        if($this->session->userdata('role')==='administrator'){
            redirect(base_url('admin/dashboard'));    
        } elseif($this->session->userdata('role')==='alumnus'){
            redirect(base_url('mydashboard/home'));
        }
        else{
            $this->load_login();
        }
    }

    
   

}
