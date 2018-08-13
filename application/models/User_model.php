<?php

class User_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }
    public function signin() {

        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $query = $this->db->get_where('wv_user', array('email' => $email, 'password' => $password));
        if ($query->row_array() > 0) {
            foreach ($query->result() as $data) {
                $this->session->set_userdata('role', $data->alumni_number);
                $this->session->set_userdata('user', $data->surname . ", " . $data->firstname);
                $this->session->set_userdata('role', $data->role);
            }
            return true;
        } else {
            return false;
        }
    }

}
