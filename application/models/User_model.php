<?php

class User_model extends CI_Model{
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
        $this->load->database();
        $this->load->library('session');

    
	}
	public function register($data){
            $this->db->insert('wb_user',$data);
	}
	public function signin() {
		 
        $email = $this->input->post('email');
        $password = $this->input->post('password');

       
        $query = $this->db->get_where('wb_user', array('email' => $email, 'password' => $password));
        if ($query->row_array() > 0) {
            $this->session->set_userdata('user', $this->input->post('email'));
            return true;
        } else {
            return false;
        }
    }


}

