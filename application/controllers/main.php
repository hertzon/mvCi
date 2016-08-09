<?php

class Main extends CI_Controller{
    public function __construct() {
        parent::__construct();
    }
    public function index(){
        $this->load->view('header');
        $result=$this->db->get('libros');
        $data=array('consulta'=>$result);
        
        
        $this->load->view('content',$data);
        $this->load->view('footer');
        
    }
}