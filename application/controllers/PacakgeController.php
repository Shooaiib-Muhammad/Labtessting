<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PacakgeController extends CI_Controller
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
   $data['getballs'] = $this->TestPackageModel->getballsP();
     $this->load->view('ballspacakge',$data);
 }
 public function balltest(){
    $data['getData'] = $this->homeModal->getData();
   $data['getTop4'] = $this->homeModal->getTop4();
   $data['getballs'] = $this->TestPackageModel->getballsP();
     $this->load->view('ballspacakge',$data);
 }
 public function bagtest(){
    //$data['getbags'] = $this->TestPackageModel->getbagsT();
    $data['getData'] = $this->homeModal->getData();
   $data['getTop4'] = $this->homeModal->getTop4();
   $data['getbagsT'] = $this->TestPackageModel->getbagsP();
   // print_r($data['getbagsT']);
   // die;
    $this->load->view('bagspacakge',$data);
  }
 public function rawtest(){
    $data['getData'] = $this->homeModal->getData();
   $data['getTop4'] = $this->homeModal->getTop4();
   $data['getrawmaterial'] = $this->TestPackageModel->getrawmaterialP();
    $this->load->view('rawpacakge',$data);
 }

}
