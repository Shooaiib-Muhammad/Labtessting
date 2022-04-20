<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Payment extends CI_Controller
{

 public function __construct()
 {
  parent::__construct();
  $this->load->model('Payment_Model');

  //$this->load->model('homeModal');
 }
 public function index()
 {
//   $this->load->view('cool_admin/paymentVerify');
 }
 public function verify()
 {
     $data['getpending']= $this->Payment_Model->getpendingPayment();
     $data['getDone']= $this->Payment_Model->getDone();
     $data['getresult']= $this->Payment_Model->getresult();
     
  $this->load->view('cool_admin/paymentVerify',$data);
 }
 public function getimage($TID)
 {
  $TID = $_POST['TID'];
  $data = $this->Payment_Model->getimage($TID);
  return $this->output
  ->set_content_type('application/json')
  ->set_status_header(200)
  ->set_output(json_encode($data));
 }

 public function Submit(){

    $InvoiceID=$_POST['InvoiceID'];
    
     
  if (!empty($_FILES['file']['name'])) {
     
    $config['upload_path'] = 'Assets/Paymentimg/';
    $config['allowed_types'] = 'jpg|jpeg|png|gif';
    $config['file_name'] = basename($_FILES['file']['name']);

    //Load upload library and initialize configuration
    $this->load->library('upload', $config);
    $this->upload->initialize($config);

    if ($this->upload->do_upload('file')) {
        // Echo "I am here";
        // die;
        $uploadData = $this->upload->data();
        $pictureFresh = $uploadData['file_name'];
        $config['image_library'] = 'gd2';
        $config['source_image'] = 'Assets/Paymentimg/' . $pictureFresh;
        $config['create_thumb'] = false;
        $config['maintain_ratio'] = false;
        $config['quality'] = '60%';
        $config['width'] = 800;
        $config['height'] = 600;
        $config['new_image'] = 'Assets/Paymentimg/' . $pictureFresh;
        // Echo  $config['new_image'];
        // die;
        $this->load->library('image_lib', $config);
        $this->image_lib->resize();
    } else {
        // Echo "I am Not asasa";
        // die;
        echo 'nothing';

        $pictureFresh = '';
    }
} else {
   
    $pictureFresh = '';
}
    

$data = $this->Payment_Model->paymentverfication($pictureFresh,$InvoiceID);

 }
}
