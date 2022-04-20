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
  $id=$this->session->userdata('user_id');
  $data['totalRequests']=$this->CoolAdmin_model->totalRequests($id);
  $data['pendingRequests']=$this->CoolAdmin_model->pendingRequests($id);
  $data['approved']=$this->CoolAdmin_model->approved($id);
  $data['payedAmount']=$this->CoolAdmin_model->payedAmount($id);
  $data['tabular']=$this->CoolAdmin_model->tabular($id);

  // echo "<pre>";
  // print_r($data['tabular']);
  // echo "</pre>";
   // die;
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
  $id=$this->session->userdata('user_id');
  $count=0;
  $Month = date('m');
        $Year = date('Y');
        $Day = date('d');
        $CurrentDate = $Year . '-' . $Month . '-' . $Day;
  $data['tabular']=$this->CoolAdmin_model->historyTable($id,$CurrentDate,$CurrentDate);
  foreach($data['tabular'] as $tab){
   $count=$count+$tab['Amount'];
  }
  
  $data['count']=$count;
  $this->load->view('cool_admin/history',$data);
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
 public function historyTable(){
  $id=$this->session->userdata('user_id');
  $count=0;
  $data['tableData']=$this->CoolAdmin_model->historyTable($id,$_POST['sdate'],$_POST['edate']);

  foreach($data['tableData'] as $table){
  $count=$count+$table['Amount'];
  }
$data['count']=$count;
  return $this->output
  ->set_content_type('application/json')
  ->set_status_header(200)
  ->set_output(json_encode($data));
 }
}
