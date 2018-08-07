<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Degree
 *
 * @author jobferrera
 */
class Degree extends CI_Controller{
    
   public $folder;

public function __construct() {
    parent::__construct();
    $this->load->model('degreemodel');
    $this->folder="admin/degree/";
}
    public function load_views($url,$data){
        $this->load->view('templates/header',$data);
        $this->load->view('templates/sub_header');
        $this->load->view($this->folder.$url);
        $this->load->view('templates/sub_footer');
	$this->load->view('templates/footer');
    }
    
    public function views($page='index'){
        
        $this->data=array('title'=>  ucfirst($page),'page'=>'Degree','tblcontent'=>$this->degreemodel->get_degree());
        if(!file_exists(APPPATH .'views/admin/degree/'. $page)){
            $this->load_views($page, $this->data);
        }else{
            show_404();
        }
    }
    public function insert_degree(){
        $this->degreemodel->insert_degree();
        redirect('../degree/views');
    }
}
