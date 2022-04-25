
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Payment_Model extends CI_Model
{

 public function __construct()
 {
  parent::__construct();
  $this->load->database();
  $this->load->library('session');
 }
 public function getpendingPayment()
    {
      $id=$this->session->userdata('user_id');
        $query = $this->db->query("SELECT        view_Outward_transaction.*
        FROM            dbo.view_Outward_transaction
        WHERE        (Evidence_pic IS NULL) and (UserID=$id)");
      return  $query->result_array();
    }
   
    
    public function getDone()
    {
      $id=$this->session->userdata('user_id');
        $query = $this->db->query("SELECT        view_Outward_transaction.*
        FROM            dbo.view_Outward_transaction
        WHERE         (Evidence_pic IS NOT NULL) and (UserID=$id)");
      return  $query->result_array();
    }
public function getresult(){
  
  $id=$this->session->userdata('user_id');
        $query = $this->db->query("SELECT        view_Outward_transaction.*
        FROM            dbo.view_Outward_transaction
        WHERE         (Evidence_pic IS NOT NULL) and (UserID=$id) and Request_Status='Result Uploaded'");
      return  $query->result_array();
}
    public function getimage($TID)
{

  $query = $this->db->query("SELECT        view_Outward_transaction.*
  FROM            dbo.view_Outward_transaction
  WHERE         dbo.view_Outward_transaction.TID= $TID");
  return  $query->result_array();
}
public function paymentverfication($pictureFresh,$InvoiceID){
  $Date= date("Y/m/d");
  // $query = $this->db->query("update Set CSSNo='$CssNo' , LabStatus=1,ProceedDate='$Date' Where Id= '$ID'");
  
  $query = $this->db->query("update  dbo . tbl_Outward_Transaction
    Set  Evidence_pic='$pictureFresh',EDate='$Date',Request_Status='Bank Recipient Uploaded' Where TID= '$InvoiceID'");
 // return  $query->result_array();

  if($query){
      redirect('payment/verify');
  }
  else{
      return false;
  }
}

}





?>