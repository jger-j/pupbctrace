<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller{
	public  function __construct(){
		 parent::__construct();
		
		$this->load->model('User_model');
	}
	
	public function login(){
		$data['title']='Login';
		$this->load->view('templates/header',$data);
		$this->load->view('login');
		$this->load->view('templates/footer');
	}

	public function logout() {
        $this->session->unset_userdata('user');
        redirect('../login');
    }

	public function auth() {
        if ($this->User_model->signin()) {
            redirect('../dashboard');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger"><strong>Login Error:</strong> Username or Password is invalid!</div>');
           redirect('../login');
        }
    }
    
    public function signup(){
    	
		$data['title']='Sign up';
		$this->load->view('templates/header',$data );
		$this->load->view('signup');
		$this->load->view('templates/footer');
	}
	public function register(){
		
		$this->User_model->register();
		redirect('../login');



	}
}