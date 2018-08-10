<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * Here comes the text of your license
 * Each line should be prefixed with  * 
 */

/**
 * Description of Alumni_model
 *
 * @author End 
 */
class Alumni_model extends CI_model {

    //put your code here
    public function __construct() {
        parent::__construct();
    }

    public function get_alumni() {

        return $this->db->query('SELECT `wb_alumni`.*, `wb_degree`.*
FROM `wb_degree`
 LEFT JOIN `workbyte_db`.`wb_alumni` ON `wb_degree`.`degree_no` = `wb_alumni`.`degree_no`')->result();
    }

    public function get_degree() {
        return $this->db->get('wb_degree');
    }

    public function insert_alumnni($data) {
        $this->db->insert('wb_alumni', $data);
        $number = $data['alumni_number'];
        $email = $data['email'];
        $this->create_alumni_account($number, $email);
    }

    public function create_alumni_account($number, $email) {
        $data = array(
            'password' => "11223344",
            'alumni_number' => $number,
            'email' => $email,
            'role' => 'Alumnus'
        );
        $this->db->insert('wb_users', $data);
    }
    public function delete_alumni($alumni_number){
        $data = array(
            'alumni_number' => $alumni_number
        );
        $this->db->delete('wb_alumni', $data);
        $this->db->delete('wb_users', $data);
    }

}
