<?php
defined('BASEPATH') or exit('No direct script access allowed');
include("./application/views/includes/Exception.php");
include("./application/views/includes/PHPMailer.php");
include("./application/views/includes/SMTP.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class UserModel extends CI_Model
{

    public function __construct()
	{
		parent::__construct();
		$this->load->database();
        $this->load->library('session');
        
	}
    function create($fullname, $Email, $Password, $Suppliername, $Country, $City, $PhoneNo, $state, $requirement, $postal, $Address,$fourRandomDigit)
    {

        $D = date('Y-m-d');
        $query = $this->db->query("INSERT INTO  dbo . tbl_Outward_Users 
        (fullname, Email ,Password,Supplier,Country,City,Contactno,state,postalcode,requirements,Date,Status,Adress,VerficationCode)
    VALUES
        ('$fullname','$Email' ,'$Password','$Suppliername','$Country','$City','$PhoneNo','$state','$postal','$requirement','$D','0','$Address',$fourRandomDigit)");
        if ($query) {
            $Id = $this->db->insert_id();
            $this->session->set_flashdata('info', 'Your Account Has Been Created!');
            $mail = new PHPMailer(true);
            try{
    
              //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'edlaysol@gmail.com';                     //SMTP username
            $mail->Password   = 'Global123';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set 
       
             $mail->IsHTML(true);
            $mail->setFrom('itdev@forward.pk', "Account Created");
            // $mail->addAddress("itdev@forward.pk"); 
                
            $mail->addAddress("$Email"); 
            
            $mail->Subject = "Account Verification Email!";
           //  $mail->Body ="
           //  <html>
           //  <head>
           //    <title>User Created</title>
           //  </head>
           //  <body>
           //  <h5>Welcome $fullname</h5>
           //    <p style='color:white;background color:black'>Your Account has been Created Successfully! Please visit here given link  to explore more and see our latest packages Thank You!<br><a href='http://192.168.10.3:2000/Booklabtest/'>Book Your Test</a></p>
                           
           //  </body>
           //  </html>
           //  ";
       
           $baseDIR = explode("\\",__DIR__ );
           array_pop($baseDIR);
           $baseDIRCombine = implode("\\",$baseDIR);
           $message = file_get_contents($baseDIRCombine. '\views\emailTemplate.html');
           $message .= '
           <tr>
           <td align="center">
               <table class="col-600" width="600" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-left:20px; margin-right:20px; border-left: 1px solid #dbd9d9; border-right: 1px solid #dbd9d9;">
                   <tbody><tr>
                       <td height="35"></td>
                   </tr>
    
                   <tr>
                       <td align="center" style="font-family: "Raleway", sans-serif; font-size:52px; font-weight: bolder; color:#2a3a4b;"><span style="text-decoration: none;border: 1px solid black;background-color: black;border-radius: 10px;padding: 10px;color:white">Verification Code: '.$fourRandomDigit.'</span></td>
                   </tr>
    <br><br>
                   <tr>
                   <td align="center" style="font-family: "Lato", sans-serif; font-size:14px; color:#757575; line-height:24px; font-weight: 300;">
                       Please visit the following link to verify your account. Thank You!<br><br><a href="http://125.209.66.227:2000/Booklabtest/index.php/AccountVerification/index/'.$Id.'" style="text-decoration: none;border: 1px solid black;background-color: black;border-radius: 10px;padding: 10px;color:white">Verify Account</a>
                   </td>
               </tr>
    
    
            
    
               </tbody></table>
           </td>
       </tr>
    
       <tr>
       <td align="center">
           <table class="col-600" width="600" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-left:20px; margin-right:20px;">
    
    
    
    <tbody><tr>
       <td align="center">
           <table class="col-600" width="600" border="0" align="center" cellpadding="0" cellspacing="0" style=" border-left: 1px solid #dbd9d9; border-right: 1px solid #dbd9d9;">
               <tbody><tr>
                   <td height="50"></td>
               </tr>
               <tr>
                   <td align="right">
    
    
                       <table class="col2" width="287" border="0" align="right" cellpadding="0" cellspacing="0">
                           <tbody><tr>
                               <td align="center" style="line-height:0px;">
                                   <img style="display:block; line-height:0px; font-size:0px; border:0px;" class="images_style" src="http://125.209.66.227:8000/media/cat-women7.gif" width="169" height="138">
                               </td>
                           </tr>
                       </tbody></table>
    
    
    
    
    
    
                       <table width="287" border="0" align="left" cellpadding="0" cellspacing="0" class="col2" style="">
                           <tbody><tr>
                               <td align="center">
                                   <table class="insider" width="237" border="0" align="center" cellpadding="0" cellspacing="0">
    
    
    
                                       <tbody><tr align="left">
                                           <td style="font-family: "Raleway", sans-serif; font-size:23px; color:#2a3b4c; line-height:30px; font-weight: bold;">What we do?</td>
                                       </tr>
    
                                       <tr>
                                           <td height="5"></td>
                                       </tr>
    
    
                                       <tr>
                                           <td style="font-family: "Lato", sans-serif; font-size:14px; color:#7f8c8d; line-height:24px; font-weight: 300;">
                                               A high-tech facility with latest testing equipment to perform testing as per international standards and practices. Forward Sports QA lab is the first ever accredited lab around the globe who can perform finish good test of soccer balls.
                                           </td>
                                       </tr>
    
    
                                   </tbody></table>
                               </td>
                           </tr>
                       </tbody></table>
                   </td>
               </tr>
           </tbody></table>
       </td>
    </tr>
    
    <tr>
    <td align="center">
        <table align="center" width="100%" border="0" cellspacing="0" cellpadding="0" style=" border-left: 1px solid #dbd9d9; border-right: 1px solid #dbd9d9;">
            <tbody><tr>
                <td height="50"></td>
            </tr>
            <tr>
                <td align="center" bgcolor="#34495e" background="https://designmodo.com/demo/emailtemplate/images/footer.jpg" height="185">
                    <table class="col-600" width="600" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tbody><tr>
                            <td height="25"></td>
                        </tr>
    
                            <tr>
                            <td align="center" style="font-family: "Raleway",  sans-serif; font-size:26px; font-weight: 500; color:#f1c40f;">Follow us for some cool stuffs</td>
                            </tr>
    
    
                        <tr>
                            <td height="25"></td>
                        </tr>
    
    
    
                        </tbody></table><table align="center" width="35%" border="0" cellspacing="0" cellpadding="0">
                        <tbody><tr>
                            <td align="center" width="30%" style="vertical-align: top;">
                                    <a href="https://www.facebook.com/designmodo" target="_blank"> <img src="https://designmodo.com/demo/emailtemplate/images/icon-fb.png"> </a>
                            </td>
    
                            <td align="center" class="margin" width="30%" style="vertical-align: top;">
                                 <a href="https://twitter.com/designmodo" target="_blank"> <img src="https://designmodo.com/demo/emailtemplate/images/icon-twitter.png"> </a>
                            </td>
    
                            <td align="center" width="30%" style="vertical-align: top;">
                                    <a href="https://plus.google.com/+Designmodo/posts" target="_blank"> <img src="https://designmodo.com/demo/emailtemplate/images/icon-googleplus.png"> </a>
                            </td>
                        </tr>
                        </tbody></table>
    
    
    
                    </td></tr></tbody></table>
                </td>
            </tr>
        </tbody></table>
    </td>
    </tr>
       </tbody></table>';		  
           $mail->MsgHTML($message);
           ob_start();
           $ok = $mail->Send();
           $ob = ob_get_contents();
           ob_end_clean();
           if (!$ok) {
               echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
           }
           else{
               echo 'Message has been sent';
               $this->session->set_flashdata('info', 'Kindly Check your email to verify your account!');
               redirect(base_url() . "Login");
           }
       } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
        } else {
            $this->session->set_flashdata('info', 'Your Account Has Been Disable');
            redirect('Login');
        }
    }

public function loginn($username, $password)
{
  
  $query = $this->db->query("SELECT * 
  FROM           dbo . tbl_Outward_Users 
  WHERE        (Email = '$username') AND (Password = '$password')");

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
            $this->session->set_flashdata('info', 'Your Account Has Not Been Verified');
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
        // echo "Hello";
        // Die;

        $this->session->set_flashdata('info', 'Your Username OR Password is Incorrect ');
        redirect('Login');
    }


}

    
}
