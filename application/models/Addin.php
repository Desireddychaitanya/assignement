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
              $this->db->insert('register', $data);
              echo "successfully register";
    }

    public function questionsadded($data)
    {
              $this->db->insert('questions', $data);
              echo "successfully added questions";
    }
}
