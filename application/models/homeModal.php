
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

}





?>