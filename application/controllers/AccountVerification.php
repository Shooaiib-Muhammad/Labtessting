<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AccountVerification extends CI_Controller
{

 public function __construct()
 {
  parent::__construct();

  $this->load->model('homeModal');
 }
 public function index($id)
 {
   $data["id"]= $id;

    $this->load->view('AccountVerification',$data);
 }

 public function Verify()
 {

   $userId = $_POST['userId'];
   $otp = $_POST['otp'];
   $result = $this->homeModal->verifyOTP($userId,$otp);
   return $this->output
   ->set_content_type('application/json')
   ->set_status_header(200)
   ->set_output(json_encode($result));
 }

}
