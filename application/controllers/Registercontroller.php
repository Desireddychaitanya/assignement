<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Registercontroller extends CI_Controller {
	 public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('Addin');
       
       
       
    }


	public function index()
	{
		$this->load->view('register'); 
	}
	public function registersuccess()
	{
		$this->form_validation->set_rules('firstname', 'FirstName', 'trim|required');
		$this->form_validation->set_rules('lastname', 'lastName', 'trim|required');
        $this->form_validation->set_rules('email', 'Email ID', 'valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('confirmpassword', 'confirm Password', 'required|matches[password]');
        $this->form_validation->set_rules('phonenumber', 'phone number', 'required');
        $this->form_validation->set_rules('city', 'city ', 'required');
      
            if ($this->form_validation->run() == FALSE) 
            {

             $this->load->view('register');
            }
            if ($this->form_validation->run() == TRUE) 
            {

            //$data['t1'] = time();
            $firstname = trim($this->input->post('firstname'));
            $lastname = trim($this->input->post('lastname'));
            $email = trim($this->input->post('email'));
            $password = trim($this->input->post('password'));
            $confirmpassword = trim($this->input->post('confirmpassword'));
            $phonenumber = trim($this->input->post('phonenumber')); 
            $city = trim($this->input->post('city'));
            $checkbox = $this->input->post('checkbox');
            
$data=array(
'firstname'=>$firstname,
'lastname'=>$lastname,
'email'=>$email,
'password'=>$password,
'confirmpassword'=>$confirmpassword,
'phonenumber'=>$phonenumber,
'city'=>$city,
'gender'=>$checkbox,);




            $this->session->set_userdata('_firstname_', $data['firstname']);
            $this->session->set_userdata('_last_name_', $data['lastname']);
            $this->session->set_userdata('_email_', $data['email']);
           
          
            $this->Addin->insertin($data);

            }
          
	}
	public function loginsuccess()
	{
		echo " sucessfully login"; 
	}
	public function questionsadded()
	{
		echo " added questions";
	}
	public function signin()
	{
		$this->load->view('loginforstudent'); 
	}
	public function addquestions()
	{
		$this->load->view('questions');
	}


}
