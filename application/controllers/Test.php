<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Test extends CI_Controller
{

 public function __construct()
 {
  parent::__construct();

  $this->load->model('homeModal');
 }
 public function index()
 {
 
  $data['getData'] = $this->homeModal->getData();
  
  $data['getTop6'] = $this->homeModal->getTop6();
  $this->load->view('index',$data);

 }

 public function Cart()
 {
    $data['getData'] = $this->homeModal->getData();
  
    $data['getTop6'] = $this->homeModal->getTop6();
  $this->load->view('Cart',$data);

 }

 public function checkout()
 {
  $id=$this->session->userdata('user_id');
  $data['getData'] = $this->homeModal->getData();
  
  $data['getTop6'] = $this->homeModal->getTop6();
  $data['customerInfo'] = $this->homeModal->customerInfo($id);

  // print_r($data['customerInfo']);
  // die;
  $this->load->view('checkout',$data);

 }

 public function self(){
  $id=$this->session->userdata('user_id');

  $data['customerInfo'] = $this->homeModal->customerInfo($id);

  
 
 echo json_encode($data);
 }




 
}
