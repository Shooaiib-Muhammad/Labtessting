
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class homeModal extends CI_Model
{

 public function __construct()
 {
  parent::__construct();
  $this->load->database();
  $this->load->library('session');
 }
 function getData()
 {


  $query = $this->db->query("SELECT        dbo.Tbl_Fit_Lab_Capability.*
FROM            dbo.Tbl_Fit_Lab_Capability
WHERE        (Status = 1)");
  return $query->result_array();
 }
 public function getTop6(){
    
    $query = $this->db->query("SELECT      dbo.Tbl_Fit_Lab_Capability.*
FROM            dbo.Tbl_Fit_Lab_Capability
WHERE        (Status = 1)");
    return $query->result_array();
 }

  public function getTop4()
  {

    $query = $this->db->query("SELECT   Top (4)   dbo.Tbl_Fit_Lab_Capability.*
FROM            dbo.Tbl_Fit_Lab_Capability
WHERE        (Status = 1) and TestType='Test'");
    return $query->result_array();
  }
  public function getPrddetails($testid)
  {
    $query = $this->db->query("SELECT dbo.Tbl_Fit_Lab_Capability.*
FROM            dbo.Tbl_Fit_Lab_Capability
WHERE        (TestID = $testid)");
    return $query->result_array();
  }
  public function getpackages()
  {

    $query = $this->db->query("SELECT   dbo.Tbl_Fit_Lab_Capability.*
FROM            dbo.Tbl_Fit_Lab_Capability
WHERE        (Status = 1) and TestType='Package'");
    return $query->result_array();
  }
public function getpckgtestdetails($id){
    $query = $this->db->query("SELECT   dbo.tbl_Fit_Pckg_D.*
FROM            dbo.tbl_Fit_Pckg_D
WHERE        (TestID = $id) and (Status = 1)");
    return $query->result_array();
}

public function orderPlacement($namer,$emailr,$telr,$faxr,$requirement){
  date_default_timezone_set('Asia/Karachi');
  $date = date("Y-m-d H:i:s");
  $user_id = $this->session->userdata('user_id');
$totalPrice = 0;
$testIds = [];
$testNames = [];
$testAmounts = [];
$testQuantities = [];
$testIdsConvert='';
$testNamesConvert='';
$testAmountsConvert='';
$testQuantitiesConvert='';
foreach ($_SESSION['Products'] as $products) {
  $products[1] = intval($products[4]) * intval($products[3]);
  $totalPrice +=  $products[1];
  array_push($testIds,$products[5]);
  array_push($testNames,$products[0]);
  array_push($testAmounts,$products[4]);
  array_push($testQuantities,$products[3]);
 
}
if(count($testIds)>1){
 $testIdsConvert = implode(",",$testIds);
}else{
  $testIdsConvert = $testIds[0];
}
if(count($testNames)>1){
  $testNamesConvert = implode(",",$testNames);
 }else{
   $testNamesConvert = $testNames[0];
 }
 if(count($testAmounts)>1){
  $testAmountsConvert = implode(",",$testAmounts);
 }else{
   $testAmountsConvert = $testAmounts[0];
 }
 if(count($testQuantities)>1){
  $testQuantitiesConvert = implode(",",$testQuantities);
 }else{
   $testQuantitiesConvert = $testQuantities[0];
 }

  $query = $this->db->query("INSERT INTO dbo.tbl_Outward_Transaction ( TestID ,TestName ,TAmount ,TQuantity ,Amount ,UserID  ,RequestDate,Name_of_recipient,REmail,RContact,RFax,requirements ) VALUES ( '$testIdsConvert' ,'$testNamesConvert' ,'$testAmountsConvert' ,'$testQuantitiesConvert' ,$totalPrice ,'$user_id' ,'$date','$namer','$emailr','$telr','$faxr','$requirement' )");
  if($query){
    $_SESSION['Products'] = [];
    return ;
  }
  else{
    return;
  }
  
}

public function customerInfo($id){
  $query = $this->db->query("SELECT   dbo.tbl_Outward_Users.*
  FROM            dbo.tbl_Outward_Users
  WHERE        (UserID = $id) ");
    return $query->result_array();
}


}





?>