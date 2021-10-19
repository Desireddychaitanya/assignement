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
    public function answer($data)
    {
        print_r($data['answer']);
        print_r($data['questionid']);

     $query= $this->db->query("select * from answers where questionid=".$data['questionid']  );
    if ($query->num_rows() == 0) 
    {
     $r = $this->db->insert('answers', $data);
       return $r;
    } 
    else 
    {
             $this->db->where('questionid', $data['questionid']);
            $r = $this->db->update('answers', $data);
            return $r;
       
    } 
        
    }
}
