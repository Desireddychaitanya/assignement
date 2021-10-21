<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class checkboxcontroller extends CI_Controller 
{
	 public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('Addin');
        $this->load->model('Getrows');
       
       
       
    }

	
	 public function timer()
	 {
	 	$this->load->view('timer');
	 }
	public function index()
	{
		$this->load->view('checkbox');
	}
	public function randompassword()
	{
		$this->load->view('randompassword');
	}
	public function addanswer()
	{
		$r=$this->input->post();
		print_r($r);
		//echo "string"; 
		$correct_answers = $this->Getrows->correct_answers($r);
		
		// $questionnumber = $this->input->post('questionid');
		// print_r($questionnumber[0]);
  //       $answer = $this->input->post('checkbox'.$questionnumber[0]);
		// print_r($answer);

  //           $data=array(
  //           'questionid'=>$questionnumber[0],
  //           'answer'=>$answer,
  //           );
           
          
  //           $this->Addin->answer($data);
  //           redirect('registercontroller/exam');


		 
	}
}
