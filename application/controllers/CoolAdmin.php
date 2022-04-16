<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CoolAdmin extends CI_Controller
{

 public function __construct()
 {
  parent::__construct();
  $this->load->library('session');
  $this->load->model('CoolAdmin_model');
 }
 public function index()
 {
  $data=$this->session->userdata();
  $this->load->view('cool_admin/index',$data);
 }
 public function account(){
  $id=$this->session->userdata('user_id');
  $data['userinfo']=$this->CoolAdmin_model->getAllUsers($id);
 
  $this->load->view('cool_admin/account',$data);
 }

 public function updateUser(){
  print_r($_POST);
  $data = $this->CoolAdmin_model->updateUser($_POST['id'],$_POST['email'],$_POST['supplier'],$_POST['contact'],$_POST['city'],$_POST['country']);
  return $data;
  
 }

 public function tracking(){
  $this->load->view('cool_admin/tracking');
 }

 public function history(){
  $this->load->view('cool_admin/history');
 }

 public function totalrequests(){
  $this->load->view('cool_admin/totalrequests');
 }

 public function pendingRequests(){
  $this->load->view('cool_admin/pendingRequests');
 }
 public function approved(){
  $this->load->view('cool_admin/approved');
 }
 public function amountPayed(){
  $this->load->view('cool_admin/amountPayed');
 }
}
