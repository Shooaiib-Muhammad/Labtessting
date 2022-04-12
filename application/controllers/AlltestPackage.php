<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AlltestPackage extends CI_Controller
{
    public function __construct()
    {
     parent::__construct();
   
     $this->load->model('homeModal');
    }
 
 public function index()
 {

    $data['getData'] = $this->homeModal->getData();
  
    $data['getTop4'] = $this->homeModal->getTop4();
   // print_r($data['getTop4']);
  $this->load->view('alltestPackage',$data);

 }

 
}
