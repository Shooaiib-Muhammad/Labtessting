<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UserModel extends CI_Model
{

    public function __construct()
	{
		parent::__construct();
		$this->load->database();
        $this->load->library('session');
        
	}
    function create($Email,$Password,$Suppliername,$Country,$City,$PhoneNo){

        $D=date('Y-m-d');
        $query = $this->db->query("INSERT INTO  dbo . tbl_Outward_Users 
        ( Email ,Password,Suppliername,Country,City,PhoneNo,Date)
    VALUES
        ('$Email' ,'$Password','$Suppliername','$Country','$City','$PhoneNo','$D')");
if($query){
    $_SESSION['Products'] = [];
}
    else{
        Echo "Data Insertion Error";
    }
}

    
} 



?>