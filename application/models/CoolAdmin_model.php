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

 public function updateUser($id,$email,$supplier,$number,$city,$country,$state,$postal,$requiments,$Address){
  $query = $this->db->query("UPDATE tbl_Outward_Users
  SET Email = '$email', Supplier= '$supplier',Country='$country',Contactno='$number',City='$city',state='$state',postalcode='$postal',requirements='$requiments',Adress='$Address'
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

 public function trackRecord($id){
  $query = $this->db->query("SELECT        'FS-' + CAST(dbo.tbl_Outward_Transaction.UserID AS varchar(100)) + '-' + CAST(DAY(dbo.tbl_Outward_Transaction.RequestDate) AS varchar(50)) + + CAST(MONTH(dbo.tbl_Outward_Transaction.RequestDate) AS varchar(50)) + + CAST(RIGHT (YEAR(dbo.tbl_Outward_Transaction.RequestDate), 2) AS varchar(50)) + '-' + CAST(dbo.tbl_Outward_Transaction.TID AS varchar(100)) AS invoice_ID, TID
  FROM            dbo.tbl_Outward_Transaction
  WHERE        (UserID = $id)
  
  
  ");
    return $query->result_array();
 }

 public function track($invoice_id){
  $query = $this->db->query("SELECT        dbo.tbl_Outward_Transaction.TID, dbo.tbl_Outward_Transaction.Amount, dbo.tbl_Outward_Transaction.CSSNo, dbo.tbl_Outward_Transaction.RequestDate, dbo.tbl_Outward_Transaction.Evidence_pic, 
  dbo.tbl_Outward_Transaction.EDate, dbo.tbl_Outward_Transaction.AccountsStatus, dbo.tbl_Outward_Transaction.AccountsverfiyDate, dbo.tbl_Outward_Transaction.labStatus, dbo.tbl_Outward_Transaction.labProceedDate, 
  dbo.tbl_Outward_Transaction.RDate, dbo.tbl_Outward_Transaction.Result, dbo.tbl_Outward_Transaction.Request_Status, dbo.tbl_Outward_Transaction.Name_of_recipient, dbo.tbl_Outward_Transaction.REmail, 
  dbo.tbl_Outward_Users.Supplier, dbo.tbl_Outward_Users.Country, dbo.tbl_Outward_Users.Contactno
FROM            dbo.tbl_Outward_Transaction INNER JOIN
  dbo.tbl_Outward_Users ON dbo.tbl_Outward_Transaction.UserID = dbo.tbl_Outward_Users.UserID
WHERE        (dbo.tbl_Outward_Transaction.TID = $invoice_id)

  
  
  ");
    return $query->result_array();
 }
 
}
