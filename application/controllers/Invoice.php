<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Invoice extends CI_Controller
{

 public function __construct()
 {
  parent::__construct();

  $this->load->model('homeModal');
 }
 public function index($in)
 {

    //  $data['CSR'] = $this->homeModal->CSR($in);
    // $data['getData'] = $this->homeModal->getData();
  
    $data['Invoice'] = $this->homeModal->InvoiceData($in);
    $this->load->view('Invoice',$data);
 }

 public function dashboard($in)
 {

    //  $data['CSR'] = $this->homeModal->CSR($in);
    // $data['getData'] = $this->homeModal->getData();
  
    $data['Invoice'] = $this->homeModal->InvoiceData($in);
    $this->load->view('InvoiceDashboard',$data);
 }


}
