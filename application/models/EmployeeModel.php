<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class EmployeeModel extends CI_Model
{


	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function get_employee()
	{
		$query =$this->db->get('storeapi');
		return $query->result();

	}
	public function insertt_db($data)
	{
      return $this->db->insert('storeapi',$data);
	}
	public function editEmployee($id)
	{
		$this->db->where('sn',$id);
		$query = $this->db->get('questions');
		return $query->row();

	}
	public function updateEmployee($id,$data)
	{

		$this->db->where('id',$id);
		return $this->db->update('storeapi',$data);

	}
	public function delete_Employee($id)
	{

		return $this->db->delete('storeapi',['id' => $id]);


	}

}