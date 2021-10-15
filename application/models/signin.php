<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Signin extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->database();
       
       
    }


    public function check_entered_details($email,$password)
    {
 // print_r($email);
 // print_r($password);
            
        $getdata=$this->db->query("select * from register where email= '".$email."' and password = '".md5($password)."' ")->result_array();
                    
                     // print_r($getdata[0]->email);
                     // print_r($getdata[0]->password);

	 return $getdata;
            

    }
}
