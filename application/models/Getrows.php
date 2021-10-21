<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Getrows extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->database();
       
       
    }


    public function get_rows()
    {
      $q = $this->db->get('questions');
      return $q->num_rows(); 
    }
    public function get_data($limit,$offset)
    { 
      $this->db->limit($limit,$offset);
      $q = $this->db->get('questions');
      return $q->result();

    }
    public function correct_answers()
    {
      $q = $this->db->get('questions')->result();
      foreach ($q as $value) {

         print_r($value->sn);

         print_r($value->answer);
       } 
    }

}
