<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH.'libraries/RestController.php';
require APPPATH.'libraries/Format.php';
use chriskacerguis\RestServer\RestController;
use chriskacerguis\RestServer\Format;
class ApiDemoController extends RestController
{

	public function __construct()
	{
		parent::__construct();
	  $this->load->model('EmployeeModel');
	}
	public function index_get()
	{
		echo " i am restful api";
	}
	public function storeEmployee_post()
	{

		$employee = new EmployeeModel;
		$data = [
			'first_name' => $this->input->post('first_name'),
			'last_name' => $this->input->post('last_name'),
			'phone' => $this->input->post('phone'),
			'email' => $this->input->post('email'),
		];



		$result = $employee->insertt_db($data);
		//$this->response($data,200);
		if ($result > 0) {
			$this->response([
				'status' =>true,
				'message'=>'NEW EMPLOYEE CREATED'],RestController::HTTP_OK);

		}
		else
		{
			$this->response([
				'status'=>false,
				'message'=>'failed to create employee'],RestController::HTTP_BAD_REQUEST);
		}

	}
}

