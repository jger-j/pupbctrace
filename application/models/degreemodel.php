<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of degreemodel
 *
 * @author jobferrera
 */
class degreemodel extends CI_Model{
    public function __construct(){
        parent::__construct();
        
    }
    public function get_degree(){
        return $this->db->get('wb_degree')->result();
        
    }
    public function insert_degree(){
        $code=$this->input->post('code');
       $description=$this->input->post('description');
        if($this->check_exist($code, $description)==FALSE){
            return $this->db->insert('wb_degree',array('code'=>$code,'description'=>$description));
        }
        else {
            return FALSE;
        }
        
        
        
                
    }
    public function check_exist($code,$description){
        
        $this->db->where("code",$code);
        $this->db->where("description",$description);
        $exist=$this->db->get('wb_degree');
        if($exist->num_rows()>0){
            return TRUE;
        }
 else {
            return FALSE;
 }
        
        
        
    }
    
    //put your code here
}
