<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Course_service extends MY_Controller
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
			'course/service/Course_services_model' => 'csModel',
		];
		$this->load->model($model_list);
	}

	public function save(){
		$this->csModel->Course_name = $this->input->post("Course_name");
		$this->csModel->Course_code = $this->input->post("Course_code");
		$this->csModel->DeptID = $this->input->post("DeptID");

		$response = $this->csModel->save();
		echo json_encode($response);
	}

	public function delete(){
		$this->csModel->ID = $this->input->post("ID");

		$response = $this->csModel->delete();
		echo json_encode($response);
	}

	public function course_update(){
		$this->csModel->ID = $this->input->post("ID");
		$this->csModel->Course_code = $this->input->post("Course_code");
		$this->csModel->Course_name = $this->input->post("Course_name");
		$this->csModel->DeptID = $this->input->post("DeptID");

		$response = $this->csModel->course_update();
		echo json_encode($response); 
	}
}
