
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ManageBook extends CI_Model
{


 public function getAccredited()
 {
  $query = $this->db->query("SELECT        dbo.Tbl_Fit_Lab_Capability.*
FROM            dbo.Tbl_Fit_Lab_Capability
WHERE        (Status = 1) and (AType='Accredited')");
  return $query->result_array();
 }
 public function getNonAccredited()
 {
  $query = $this->db->query("SELECT        dbo.Tbl_Fit_Lab_Capability.*
FROM            dbo.Tbl_Fit_Lab_Capability
WHERE        (Status = 1) and (AType='Non-Accredited')");
  return $query->result_array();
 }
}



?>