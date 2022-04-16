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
}