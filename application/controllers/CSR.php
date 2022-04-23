<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CSR extends CI_Controller
{

 public function __construct()
 {
  parent::__construct();

  $this->load->model('homeModal');
 }
 public function index($in)
 {

     $data['CSR'] = $this->homeModal->CSR($in);
    $data['getData'] = $this->homeModal->getData();
  
    $data['getTop6'] = $this->homeModal->getTop6();
    $this->load->view('CustomerServiceForm', $data);
 }

 public function CSRFiltered($in)
 {

     $data['CSR'] = $this->homeModal->CSR($in);
    $data['getData'] = $this->homeModal->getData();
  
    $data['getTop6'] = $this->homeModal->getTop6();
    $this->load->view('CustomerServiceFormDashboard', $data);
 }
}
