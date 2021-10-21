<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Registercontroller extends CI_Controller {
	 public function __construct()
    {
        parent::__construct();
        
        $this->load->library('session');
        $this->load->model('Addin');
        $this->load->model('Getrows');
       
       
       
    }


    public function index()
    {
       $this->load->view('homepage');
    }


	public function register()
	{
		$this->load->view('register'); 
	}
    public function exam_new()
    {
       $this->load->view('takeexam');        
    }
    // public function exam()
    // {
    //    $this->load->library('pagination');
    //    $config['base_url'] = base_url('Registercontroller/exam');
    //    $config['total_rows'] = $this->Getrows->get_rows();
    //    $config['per_page'] = 1;

    //    $this->pagination->initialize($config);
    //    $data['questions'] = $this->Getrows->get_data($config['per_page'],$this->uri->segment(3));

    //     $this->load->view('takeexam1',$data);


    // }
    public function signin()
    {
        $this->load->view('loginforstudent'); 
    }
    public function addquestions()
    {
        $this->load->view('questions');
    }
	public function registersuccess()
	{
		$this->form_validation->set_rules('firstname', 'FirstName', 'trim|required');
		$this->form_validation->set_rules('lastname', 'lastName', 'trim|required');
        $this->form_validation->set_rules('email', 'Email ID', 'valid_email|is_unique[register.email]required');
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
            $password = md5($this->input->post('password'));
            $confirmpassword = md5($this->input->post('confirmpassword'));
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
            $this->Addin->insertin($data);

            }
          
	}
	public function questionsadded()
	{

        $this->form_validation->set_rules('question', 'question','required');
        $this->form_validation->set_rules('option1', 'option1', 'required');
        $this->form_validation->set_rules('option2', 'option2', 'required');
        $this->form_validation->set_rules('option3', 'option3', 'required');
        $this->form_validation->set_rules('option4', 'option4', 'required');
        $this->form_validation->set_rules('marks', 'marks', 'required');
        $this->form_validation->set_rules('negativemarks', 'negativemarks', 'required');
        $this->form_validation->set_rules('answer', 'answer', 'required');

            if ($this->form_validation->run() == FALSE) 
            {

             $this->load->view('questions');
            }
            if ($this->form_validation->run() == TRUE) 
            {
                //$data['t1'] = time();
            $question = trim($this->input->post('question'));
            $option1 = trim($this->input->post('option1'));
            $option2 = trim($this->input->post('option2'));
            $option3 = trim($this->input->post('option3'));
            $option4 = trim($this->input->post('option4')); 
            $marks = trim($this->input->post('marks')); 
            $negativemarks = trim($this->input->post('negativemarks')); 
            $answer = trim($this->input->post('answer')); 
            $data=array(
            'question'=>$question,
            'option1'=>$option1,
            'option2'=>$option2,
            'option3'=>$option3,
            'option4'=>$option4,
            'marks'=>$marks,
            'negativemarks'=>$negativemarks,
            'answer'=>$answer,
            );

           
          
            $this->Addin->questionsadded($data);






                echo "questions added";
            }   
	}
	
    public function loginvalidate()
    {
       
        $this->form_validation->set_rules('email', 'Email ID', 'valid_email|required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        
            if ($this->form_validation->run() == FALSE) 
            {

             $this->load->view('loginforstudent');
            }
            if ($this->form_validation->run() == TRUE) 
            {

            $email = trim($this->input->post('email'));
            $password = trim($this->input->post('password'));
         

            $this->load->model('signin');
            $res = $this->signin->check_entered_details($email,$password);



           
          if (!empty($res)) 
          {
            
          
            if($res[0]['email'] == $email && $res[0]['password'] == md5($password))
            {
               
            
            $this->session->set_userdata('_email_', $email);
               echo " valid details";
               redirect(base_url('Registercontroller/exam_new'));

            } 
        }
            else {
                $this->session->set_flashdata('error', '<div class="alert alert-danger">Invalid Username or Password.</div>');
                $this->load->view('loginforstudent');
                
            }



            }
    }


}
