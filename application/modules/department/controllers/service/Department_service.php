<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Department_service extends MY_Controller
{
	private $data = [];
	protected $session;
	public function __construct()
	{
		parent::__construct();
		$this->session = (object)get_userdata(USER);

		// if(is_empty_object($this->session)){
		// 	redirect(base_url().'login/authentication', 'refresh');
		// }

		$model_list = [
			'department/service/Department_services_model' => 'dsModel',
		];
		$this->load->model($model_list);
	}

	public function save(){
		$this->dsModel->Department = $this->input->post("Department");
		$this->dsModel->CollegeID = $this->input->post("CollegeID");

		$response = $this->dsModel->save();
		echo json_encode($response);
	}

	public function delete(){
		$this->dsModel->ID = $this->input->post("ID");

		$response = $this->dsModel->delete();
		echo json_encode($response);
	} 
}
