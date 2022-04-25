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
    function create($fullname, $Email, $Password, $Suppliername, $Country, $City, $PhoneNo, $state, $requirement, $postal, $Address)
    {

        $D = date('Y-m-d');
        $query = $this->db->query("INSERT INTO  dbo . tbl_Outward_Users 
        (fullname, Email ,Password,Supplier,Country,City,Contactno,state,postalcode,requirements,Date,Status,Adress)
    VALUES
        ('$fullname','$Email' ,'$Password','$Suppliername','$Country','$City','$PhoneNo','$state','$postal','$requirement','$D','1','$Address')");
        if ($query) {
            $this->session->set_flashdata('info', 'Your Account Has Been Created!');
            // $mail = new PHPMailer(true);

            // die;


            return;
        } else {
            $this->session->set_flashdata('info', 'Your Account Has Been Disable');
            redirect('Login');
        }
    }

public function loginn($username, $password)
{
  
  $query = $this->db->query("SELECT * 
  FROM           dbo . tbl_Outward_Users 
  WHERE        (Email = '$username') AND (Password = '$password') AND (Status = '1')");

    if ($query->num_rows() > 0) {
        $result = $query->row();
        $session_data = array(
            'user_id' => $result->UserID,
            'user_name' => $result->fullname,
            'user_email' => $result->Email,
            'userStus' => 1,
            'Status' => $result->Status,
            'user_country' => $result->Country,
            'user_city' => $result->City,
            'user_contactNo' => $result->Contactno,
            
        );
        $Status = $result->Status;
    
  
        if($Status==0){
            $this->session->set_flashdata('info', 'Your Account Has Been Disable');
            redirect('Login');
        }else{
            if($password=='123'){
                $this->session->set_flashdata('info', 'Please Change Your Password First');
            }else{
            $this->session->set_flashdata('info', 'Welcome in Dashboard');
            }
            if(isset($_SESSION['Products']) && !empty($_SESSION['Products'])){
                  
            }else{
            
                $_SESSION['Products'] = [];
            }
            
        $this->session->set_userdata($session_data);

        }
       
    } else {
        //echo "Hello";
        //Die;

        $this->session->set_flashdata('info', 'Your Username OR Password is Incorrect ');
        redirect('Login');
    }


}

    
}
