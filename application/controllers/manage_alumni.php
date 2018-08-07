<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of manage_alumni
 *
 * @author jobferrera
 */
class Manage_alumni extends CI_Controller{
    public $folder;
    
public function __construct() {
    parent::__construct();
    $this->load->model('managemodel');
    $this->folder="admin/academicyear/";
}
    public function load_views($url,$data){
        $this->load->view('templates/header',$data);
        $this->load->view('templates/sub_header');
        $this->load->view($this->folder.$url);
        $this->load->view('templates/sub_footer');
	$this->load->view('templates/footer');
    }
    
    public function views($page='index'){
        
        $this->data=array('title'=>  ucfirst($page),'page'=>'Academic Year','tblcontent'=>$this->managemodel->get());
        if(!file_exists(APPPATH .'views/admin/academicyear/'. $page)){
            $this->load_views($page, $this->data);
        }else{
            show_404();
        }
    }
}
