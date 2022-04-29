<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Accredited extends CI_Controller
{

 public function __construct()
 {
  parent::__construct();
  $this->load->model('ManageBook');

  $this->load->model('homeModal');
 }
 public function index()
 {
    $data['getData'] = $this->homeModal->getData();
    $data['getTop4'] = $this->homeModal->getTop4();
    $data['getTop6'] = $this->homeModal->getTop6();
    $data['getAccredited'] = $this->ManageBook->getAccredited();
    
  $this->load->view('accredited',$data);
 }

}
