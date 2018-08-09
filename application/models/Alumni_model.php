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
class Alumni_model extends CI_Controller {

    //put your code here
    public function __construct() {
        parent::__construct();
    }

    public function get_alumni() {
        return $this->db->get('wb_alumni');
    }

    public function insert_alumnni($data) {
        $this->db->insert('wb_user', $data);
    }

    public function get_degree() {
        return $this->db->get('wb_degree');
    }
    
    public function update_alumni_info($id,$data){
        $this->db->update('wb_alumni');
    }

}
