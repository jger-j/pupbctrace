<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of managemodel
 *
 * @
 */
class managemodel extends CI_Model {
   public function __construct() {
    parent::__construct();
    
}
   public function get(){
      return $this->db->get('wb_batch')->result();
       
   }
   
   public function insert($year){
       $data=array(
         'year'  =>$year
       );
       $this->db->insert('wb_batch',$data);
       
   }
}
