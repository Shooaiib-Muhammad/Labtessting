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
}
