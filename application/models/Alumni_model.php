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
        return $this->db->query('SELECT `wv_user`.*, `wv_course`.*
FROM `wv_user`
 LEFT JOIN `tracepcr_db`.`wv_course` ON `wv_user`.`course_no` = `wv_course`.`course_no` 
')->result();
    }

    public function insert_alumnni($data) {
        $this->db->insert('wv_user', $data);
    }

    public function delete_alumni($alumni_number) {
        $data = array(
            'alumni_number' => $alumni_number
        );
        $this->db->delete('wv_user', $data);
        
    }

}
