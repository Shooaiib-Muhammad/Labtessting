<?php
defined('BASEPATH') or exit('No direct script access allowed');
include("./application/views/includes/Exception.php");
include("./application/views/includes/PHPMailer.php");
include("./application/views/includes/SMTP.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
class ContactUs extends CI_Controller
{

 public function __construct()
 {
  parent::__construct();

  $this->load->model('homeModal');
 }
 public function index()
 {
    $data['getData'] = $this->homeModal->getData();

    $data['getTop6'] = $this->homeModal->getTop6();
  $this->load->view('contact',$data);
 }
 public function contactus()
 {

     $Email = $_REQUEST['Email'];
    $Comments = $_REQUEST['Comments'];
    // $id = $this->homeModal->orderPlacement($_POST['namer'], $_POST['emailr'], $_POST['telr'], $_POST['faxr'], $_POST['requirements']);


  
         $mail = new PHPMailer(true);
         try {


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
             $mail->setFrom('itdev@forward.pk', "New Comment Submited");
             // $mail->addAddress("itdev@forward.pk"); 

             $mail->addAddress("shoaib@forward.pk");
           






             $mail->Subject = "New Message from Outward User";
             $mail->Body = "
     <html>
   
     <body>
     <h5>Heloo Mr/Mrs.</h5>
       <p style='color:white;background color:black'> $Comments. 
       
       
       <br>
       Thank You !<br></p>
       <br>
       <p> This Comments is submited by $Email</p>
                    </p>
     </body>
     </html>
     ";

             $mail->send();

             echo 'Message has been sent';
         } catch (Exception $e) {
             echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
         }

         redirect(base_url() . "ContactUs");
     }

     // return $this->output
     // ->set_content_type('application/json')
     // ->set_status_header(200)
     // ->set_output(json_encode($data));
 
}
