<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Students_service extends MY_Controller
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
			'students/service/Students_services_model' => 'sModel',
		];
		$this->load->model($model_list);
	}

	public function students_save(){
		$this->sModel->SchoolID = $this->input->post("SchoolID");
		$this->sModel->Fname = $this->input->post("Fname");
		$this->sModel->Mname = $this->input->post("Mname");
		$this->sModel->Lname = $this->input->post("Lname");
		$this->sModel->Birthday = $this->input->post("Birthday");
		$this->sModel->Address = $this->input->post("Address");
		$this->sModel->City = $this->input->post("City");
		$this->sModel->Province = $this->input->post("Province");

		$response = $this->sModel->students_save();
		echo json_encode($response);
	}
}
