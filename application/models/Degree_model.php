<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * Here comes the text of your license
 * Each line should be prefixed with  * 
 */

/**
 * Description of Degree_model
 *
 * @author End 
 */
class Degree_model extends CI_Model {

    //put your code here
    public function __construct() {
        parent::__construct();
    }

    public function get_degree() {
        return $this->db->get('wb_degree')->result();
    }

    public function insert_degree($code, $description) {
        if ($this->check_exist($code, $description) == FALSE) {
            return $this->db->insert('wb_degree', array('code' => $code, 'description' => $description));
        } else {
            return FALSE;
        }
    }

    public function check_exist($code, $description) {

        $this->db->where("code", $code);
        $this->db->where("description", $description);
        $exist = $this->db->get('wb_degree');
        if ($exist->num_rows() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function update($id, $code, $description) {
        $this->db->update('wb_degree');
    }

    public function delete_degree($id) {
        $data = array(
            'degree_no' => $id
        );
        $this->db->delete('wb_degree', $data);
    }

}
