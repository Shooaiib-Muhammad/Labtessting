<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Labtour extends CI_Controller
{

 public function __construct()
 {
  parent::__construct();
  $this->load->library('session');
  $this->load->model('homeModal');

 }
 public function index()
 {
    $data['getData'] = $this->homeModal->getData();

    $data['getTop6'] = $this->homeModal->getTop6();
  $this->load->view('labtour',$data);
 }

}
