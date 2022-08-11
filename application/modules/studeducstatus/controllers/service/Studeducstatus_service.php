<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Studeducstatus_service extends MY_Controller
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
			'studeducstatus/service/Studeducstatus_services_model' => 'sesModel',
		];
		$this->load->model($model_list);
	}

	public function studeducstatus_save(){
		$this->sesModel->SchoolID = $this->input->post("SchoolID");
		$this->sesModel->Start_year = $this->input->post("Start_year");
		$this->sesModel->End_year = $this->input->post("End_year");
		$this->sesModel->StudentID = $this->input->post("StudentID");

		$response = $this->sesModel->studeducstatus_save();
		echo json_encode($response);
	}

	public function delete(){
		$this->sesModel->ID = $this->input->post("ID");

		$response = $this->sesModel->delete();
		echo json_encode($response);
	}

	public function update(){
		$this->sesModel->ID = $this->input->post("ID");
		// $this->sesModel->ShoolID = $this->input->post("SchoolID");
		// $this->sesModel->StudentID = $this->input->post("StudentID");
		$this->sesModel->Start_year = $this->input->post("Start_year");
		$this->sesModel->End_year = $this->input->post("End_year");
		

		$response = $this->sesModel->update();
		echo json_encode($response);
	}

}
