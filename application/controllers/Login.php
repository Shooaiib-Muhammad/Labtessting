<?php
defined('BASEPATH') or exit('No direct script access allowed');
include("./application/views/includes/Exception.php");
include("./application/views/includes/PHPMailer.php");
include("./application/views/includes/SMTP.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Login extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('email');
		$this->load->model('usermodel', 'model');
	}
	public function index()
	{
		$this->load->view('login/index');
	}

	public function create()
	{


		$this->load->model('usermodel');

		// save user record to database
		$formArray = array();
		$fullname = $this->input->post('fullname');
		$Email = $this->input->post('email');
		$Password = $this->input->post('password');
		$Suppliername = $this->input->post('supplier');
		$Country = $this->input->post('country');
		$City = $this->input->post('city');
		$PhoneNo = $this->input->post('phoneno');
		$state = $this->input->post('state');
		$requirement = $this->input->post('requirement');
		$postal = $this->input->post('postal');
		$Address = $this->input->post('Address');

		$this->model->create($fullname, $Email, $Password, $Suppliername, $Country, $City, $PhoneNo, $state, $requirement, $postal, $Address);
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
			$mail->setFrom('itdev@forward.pk', "Account Created");
			// $mail->addAddress("itdev@forward.pk"); 

			$mail->addAddress("$Email");


			$mail->Subject = "Your Account has been Created Successfully!";
			$mail->Body = "
			 <html>
			 <head>
			   <title>User Created</title>
			 </head>
			 <body>
			 <h5>Welcome $fullname</h5>
			   <p style='color:white;background color:black'>Your Account has been Created Successfully! Please visit here given link  to explore more and see our latest packages Thanku!<br><a href='http://192.168.10.3:2000/Booklabtest/'>Book Your Test</a></p>
               			 
			 </body>
			 </html>
			 ";

			$mail->send();

			echo 'Message has been sent';

			redirect('Login');
		} catch (Exception $e) {
			echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
		}
	}

	public function process_login()
	{

		$user = $this->input->post('username');
		$password = $this->input->post('password');
		$this->model->loginn($user, $password);

		if ($this->session->has_userdata('user_id')) {
			if ($password == '123') {
				redirect('changepwd');
			} else {
				redirect('Test');
			}
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('Test');
	}
}
