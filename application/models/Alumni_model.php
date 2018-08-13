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
        return $this->db->query('SELECT `wb_user`.*, `wb_course`.*
FROM `wb_user`
 LEFT JOIN `workbyte_db`.`wb_course` ON `wb_user`.`course_no` = `wb_course`.`course_no` 
')->result();
    }

    public function insert_alumnni($data) {
        $this->db->insert('wb_user', $data);
    }

    public function delete_alumni($alumni_number) {
        $data = array(
            'alumni_number' => $alumni_number
        );
        $this->db->delete('wb_user', $data);
        
    }

}
