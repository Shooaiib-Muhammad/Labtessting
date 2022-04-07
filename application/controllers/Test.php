<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Test extends CI_Controller
{

 public function __construct()
 {
  parent::__construct();

  //$this->load->model('usermodel', 'model');
 }
 public function index()
 {
  $this->load->view('index');
 }

 
}
