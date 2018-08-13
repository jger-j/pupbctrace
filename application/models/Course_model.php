<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * Here comes the text of your license
 * Each line should be prefixed with  * 
 */

/**
 * Description of Course_model
 *
 * @author End 
 */
class Course_model extends CI_Model {

    //put your code here
    public function __construct() {
        parent::__construct();
    }

    public function get_course() {
        return $this->db->get('wv_course')->result();
    }

    public function insert_course($code, $description) {
        if ($this->check_exist($code, $description) == FALSE) {
            return $this->db->insert('wv_course', array('code' => $code, 'description' => $description));
        } else {
            return FALSE;
        }
    }

    public function check_exist($code, $description) {

        $this->db->where("code", $code);
        $this->db->where("description", $description);
        $exist = $this->db->get('wv_course');
        if ($exist->num_rows() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function update($id, $code, $description) {
        $this->db->update('wv_course');
    }

    public function delete_course($id) {
        $data = array(
            'course_no' => $id
        );
        $this->db->delete('wv_course', $data);
    }

}
