
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
}



?>