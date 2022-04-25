
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TestPackageModel extends CI_Model
{


public function getballsT()
 {
  $query = $this->db->query("SELECT        dbo.Tbl_Fit_Lab_Capability.*
FROM            dbo.Tbl_Fit_Lab_Capability
WHERE        (Status = 1) and (TestType='test') and (Type='Balls')");
  return $query->result_array();
 }
 public function getbagsT()
 {
  $query = $this->db->query("SELECT        dbo.Tbl_Fit_Lab_Capability.*
FROM            dbo.Tbl_Fit_Lab_Capability
WHERE        (Status = 1) and (TestType='test') and (Type='Bags')");
  return $query->result_array();
 }
 public function getrawmaterialT()
 {
  $query = $this->db->query("SELECT        dbo.Tbl_Fit_Lab_Capability.*
FROM            dbo.Tbl_Fit_Lab_Capability
WHERE        (Status = 1)and (TestType='test') and (Type='Raw Material')");
  return $query->result_array();
 }
 public function getballsP()
 {
  $query = $this->db->query("SELECT        dbo.Tbl_Fit_Lab_Capability.*
FROM            dbo.Tbl_Fit_Lab_Capability
WHERE        (Status = 1) and (TestType='Package') and (Type='Balls')");
  return $query->result_array();
 }
 public function getbagsP()
 {
  $query = $this->db->query("SELECT        dbo.Tbl_Fit_Lab_Capability.*
FROM            dbo.Tbl_Fit_Lab_Capability
WHERE        (Status = 1)and (TestType='Package') and (Type='Bags')");
  return $query->result_array();
 }
 public function getrawmaterialP()
 {
  $query = $this->db->query("SELECT        dbo.Tbl_Fit_Lab_Capability.*
FROM            dbo.Tbl_Fit_Lab_Capability
WHERE        (Status = 1)and (TestType='Package') and (Type='Raw Material')");
  return $query->result_array();
 }
}





?>