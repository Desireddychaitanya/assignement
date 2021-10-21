<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class resetpassword extends CI_Controller 
{
	 public function __construct()
    {
        parent::__construct();
        // if ($this->login->check_member() == false) {
        //     redirect(site_url('site/login'));
        // }
        $this->load->library('session');
        $this->load->model('Addin');
        $this->load->model('Getrows');
       
       
       
    }
    
	
	 public function resetpass($email,$key,$action)
	 {
	 	$data['email']= $email;
	 	$data['key'] = $key;
	 	$data['action'] = $action;

	 	$this->load->view('reset-password',$data);
	 }
	 public function forgetpass()
	 {
	 	$this->load->view('forgetpassword');
	 }
	
}
