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

        $data['title'] = 'Login';
        $this->load->view('templates/header_1', $data);
        $this->load->view('login');
        $this->load->view('templates/footer_1');
    }

    public function logout() {
        $this->session->unset_userdata('user');

        redirect(base_url('login'));
    }

    public function auth() {
        if ($this->User_model->signin()) {
            redirect(base_url('dashboard'));
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger"><strong>Login Error:</strong> Username or Password is invalid!</div>');
            redirect(base_url('login'));
        }
    }

    public function signup() {
        $this->form_validation->set_rules('firstname', 'First Name', 'required|alpha');
        $this->form_validation->set_rules('middlename', 'Middle Name', 'required');
        $this->form_validation->set_rules('lastname', 'Last Name', 'required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]', array('required' => 'You must provide a %s.')
        );
        $this->form_validation->set_rules('passconf', 'Password Confirmation', 'trim|required|matches[password]');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[wb_user.email]', array('is_unique' => ' Email Already Used.'));
        $this->form_validation->set_rules('alumni_number', 'Alumni Number', 'Required');

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'Sign up';
            $this->load->view('templates/header_1', $data);
            $this->load->view('signup');
            $this->load->view('templates/footer_1');
        } else {
            $this->register();
        }
    }
    public function register(){
        $data = array(
                'alumni_number' => $this->input->post('alumni_number'),
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password'),
                'firstname' => $this->input->post('firstname'),
                'middlename' => $this->input->post('middlename'),
                'lastname' => $this->input->post('lastname')
            );
            $this->User_model->register($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success"><strong>Successfully Register:</strong> You may now login!</div>');

            redirect(base_url('login'));
    }

}
