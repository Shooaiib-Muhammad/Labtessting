<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TestController extends CI_Controller
{

 public function __construct()
 {
  parent::__construct();
  $this->load->library('session');
  $this->load->model('TestPackageModel');
  $this->load->model('homeModal');
 }
 public function index(){
    $data['getData'] = $this->homeModal->getData();
   $data['getTop4'] = $this->homeModal->getTop4();
   $data['getballs'] = $this->TestPackageModel->getballsT();
     $this->load->view('ballstest',$data);
 }
 public function balltest(){
    $data['getData'] = $this->homeModal->getData();
   $data['getTop4'] = $this->homeModal->getTop4();
   $data['getballs'] = $this->TestPackageModel->getballsT();
     $this->load->view('ballstest',$data);
 }
 public function bagtest(){
    //$data['getbags'] = $this->TestPackageModel->getbagsT();
    $data['getData'] = $this->homeModal->getData();
   $data['getTop4'] = $this->homeModal->getTop4();
   $data['getbagsT'] = $this->TestPackageModel->getbagsT();
   // print_r($data['getbagsT']);
   // die;
    $this->load->view('bagstest',$data);
  }
 public function rawtest(){
    $data['getData'] = $this->homeModal->getData();
   $data['getTop4'] = $this->homeModal->getTop4();
   $data['getrawmaterial'] = $this->TestPackageModel->getrawmaterialT();
    $this->load->view('rawtest',$data);
 }

}
