<?php
defined('BASEPATH') or exit('No direct script access allowed');


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
		$formArray=array();
											   $fullname=$this->input->post('fullname');
		$Email=$this->input->post('email');
		$Password=$this->input->post('password');
		$Suppliername=$this->input->post('supplier');
		$Country=$this->input->post('country');
		$City=$this->input->post('city');
		$PhoneNo=$this->input->post('phoneno');
		$state=$this->input->post('state');
		$requirement=$this->input->post('requirement');
		$postal=$this->input->post('postal');
	 $Address = $this->input->post('Address');
	 $fourRandomDigit = mt_rand(1000,9999);
		$this->model->create($fullname,$Email,$Password,$Suppliername,$Country,$City,$PhoneNo,$state,$requirement,$postal, $Address,$fourRandomDigit);

			  
	
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
