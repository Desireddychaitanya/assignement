<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH.'libraries/RestController.php';
require APPPATH.'libraries/Format.php';
use chriskacerguis\RestServer\RestController;
use chriskacerguis\RestServer\Format;
class ApiEmployeeController extends RestController
{


	public function __construct()
	{
		parent::__construct();
		$this->load->model('EmployeeModel');

	}
	public function index_get()
	{
		//echo " employee function index";
		$employee = new EmployeeModel;
		$result_emp =$employee->get_employee();
		$this->response($result_emp,200);
	}
	public function findEmployee_get($id)
	{
		$employee = new EmployeeModel;
		$result = $employee->editEmployee($id);
		$this->response($result,200);


	}
	public function updateEmployee_put($id)
	{

		$employee = new EmployeeModel;
		$data = [
			'first_name' => $this->put('first_name'),
			'last_name' => $this->put('last_name'),
			'phone' => $this->put('phone'),
			'email' => $this->put('email'),
		];



		$result = $employee->updateEmployee($id,$data);
		//$this->response($data,200);
		if ($result > 0) {
			$this->response([
				'status' =>true,
				'message'=>'UPDATED EMPLOYEE CREATED'],RestController::HTTP_OK);

		}
		else
		{
			$this->response([
				'status'=>false,
				'message'=>'failed to create employee'],RestController::HTTP_BAD_REQUEST);
		}

	}
	public function deleteEmployee_delete($id)
	{
		$employee = new EmployeeModel;
		$result = $employee->delete_Employee($id);
		if ($result > 0) {
			$this->response([
				'status' =>true,
				'message'=>'DELETED EMPLOYEE CREATED'],RestController::HTTP_OK);

		}
		else
		{
			$this->response([
				'status'=>false,
				'message'=>'failed to delete employee'],RestController::HTTP_BAD_REQUEST);
		}



	}

}
?>
