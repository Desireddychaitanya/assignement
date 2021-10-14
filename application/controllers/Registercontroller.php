<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Registercontroller extends CI_Controller {

	public function index()
	{
		$this->load->view('register');
	}
	public function registersuccess()
	{
		 $this->form_validation->set_rules('name', 'Name', 'trim|required');
        $this->form_validation->set_rules('email', 'Email ID', 'valid_email');
        $this->form_validation->set_rules('password', 'Old Password', 'required');
        $this->form_validation->set_rules('securepass', 'Secure Password', 'required');
            if ($this->form_validation->run() == FALSE) {

              redirect(base_url('admin/setting'));
            }
            if ($this->form_validation->run() == TRUE) {
 echo "sucessfully register";

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
