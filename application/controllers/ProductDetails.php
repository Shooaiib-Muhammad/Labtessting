<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ProductDetails extends CI_Controller
{
    public function __construct()
    {
     parent::__construct();
   
     $this->load->model('homeModal');
    }
 
 public function index()
 {
// $testid=$id;
//   $data['getPrddetails'] = $this->homeModal->getPrddetails($testid);

      $data['getData'] = $this->homeModal->getData();
      $data['getTop6'] = $this->homeModal->getTop6();
  $this->load->view('productDetails',$data);

 }
Public function test($id){
      $data['getData'] = $this->homeModal->getData();
      $data['getTop6'] = $this->homeModal->getTop6();
      
      $data['getpackages'] = $this->homeModal->getpackages();
      $data['getPrddetails'] = $this->homeModal->getPrddetails($id);
      if($data['getPrddetails'][0]['TestType'] == 'Package'){
         $data['getpkgtest'] = $this->homeModal->getpckgtestdetails($id);
      }else{
          $data['getpkgtest']=null;
      }
      $this->load->view('productDetails', $data);
}
 
}
