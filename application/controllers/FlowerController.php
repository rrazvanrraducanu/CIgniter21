<?php
class FlowerController extends CI_Controller {

function __Construct(){
  parent::__Construct ();
   $this->load->model('FlowerModel','f'); // load model
}
 
public function index() {
    $this->load->view('search_form');
}
public function search(){
    $search=$this->input->post('search');
    $row=$this->f->searchFlower($search);
    $data['r']=$row;
    $this->load->view('search_result',$data);
}
}
