<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CoolAdmin_model extends CI_Model
{

    public function __construct()
	{
		parent::__construct();
		$this->load->database();
   $this->load->library('session');
        
	}

 public function updateUser($id,$email,$supplier,$number,$city,$country){
  $query = $this->db->query("UPDATE tbl_Outward_Users
  SET Email = '$email', Supplier= '$supplier',Country='$country',Contactno='$number',City='$city'
  WHERE UserID = $id");
    return $query;
 }

 public function getAllUsers($id){
  $query = $this->db->query("SELECT        dbo.tbl_Outward_Users.*
  FROM            dbo.tbl_Outward_Users
  WHERE        (UserID = $id)");
    return $query->result_array();
 }
 public function totalRequests($id){
   $query = $this->db->query("SELECT        COUNT(Invoice_ID) AS Invoice_ID, UserID
   FROM            dbo.view_Outward_transaction
   GROUP BY UserID
   HAVING        (UserID = $id)
   ");
     return $query->result_array();
 }

 public function pendingRequests($id){
   $query = $this->db->query("SELECT        COUNT(Invoice_ID) AS Counter
   FROM            dbo.view_Outward_transaction
   WHERE        (labStatus is Null) AND (UserID = $id)
   
   ");
     return $query->result_array();
 }
 public function approved($id){
   $query = $this->db->query("SELECT        COUNT(Invoice_ID) AS Counter
   FROM            dbo.view_Outward_transaction
   WHERE        (labStatus = 1) AND (UserID = $id)
   
   
   ");
     return $query->result_array();
 }
 public function payedAmount($id){
   $query = $this->db->query("SELECT        SUM(Amount) AS Amount
   FROM            dbo.view_Outward_transaction
   WHERE        (UserID = $id)
   
   
   
   ");
     return $query->result_array();
 }
 public function tabular($id){
   $query = $this->db->query("SELECT        Invoice_ID, RequestDate, TestName, Amount, Request_Status
   FROM            dbo.view_Outward_transaction
   WHERE        (UserID = $id)
   
   ");
     return $query->result_array();
 }

 public function historyTable($id,$sdate,$edate){

  
  $time = strtotime($sdate);
  $time1 = strtotime($edate);
  $newformat = date('d/m/Y', $time);
  $newformat1 = date('d/m/Y', $time1);
  $query = $this->db->query("SELECT        Invoice_ID, RequestDate, TestName, Amount, Request_Status
  FROM            dbo.view_Outward_transaction
  WHERE        (UserID = $id) AND (RequestDate BETWEEN '$newformat' AND '$newformat1')
  
  ");
    return $query->result_array();
 }
 
}