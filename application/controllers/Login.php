<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
    {
        parent::__construct();

        $this->load->model('usermodel', 'model');
    }
	public function index()
	{
		$this->load->view('login/index');
	}
	
    public function create(){
             $this->load->model('usermodel'); 
      
             // save user record to database
             $formArray=array();
             $Email=$this->input->post('email');
             $Password=$this->input->post('password');
			 $Suppliername=$this->input->post('supplier');
			 $Country=$this->input->post('country');
			 $City=$this->input->post('city');
			 $PhoneNo=$this->input->post('phoneno');
         
             $this->model->create($Email,$Password,$Suppliername,$Country,$City,$PhoneNo);
			       
         
    }

    public function process_login(){

        $user = $this->input->post('username');
		$password = $this->input->post('password');
		$this->model->loginn($user, $password);
	
		if($this->session->has_userdata('user_id')){
			if($password=='123'){
				redirect('changepwd');
			}else{
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
