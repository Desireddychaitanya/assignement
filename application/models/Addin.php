<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Addin extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->database();
       
       
    }


    public function insertin($data)
    {
 print_r($data);
	 
              $this->db->insert('register', $data);


    }
}
