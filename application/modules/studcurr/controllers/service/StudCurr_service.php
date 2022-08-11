<?php
defined('BASEPATH') or exit('No direct script access allowed');

class StudCurr_service extends MY_Controller
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
			'studcurr/service/StudCurr_services_model' => 'ssModel',
		];
		$this->load->model($model_list);
	}

	public function studcurr_save() {
		$this->ssModel->StudentID = $this->input->post("StudentID");
		$this->ssModel->CurriculumID = $this->input->post("CurriculumID");

		$response = $this->ssModel->studcurr_save();
		echo json_encode($response);
	}
	
	public function studcurr_update() {
		$this->ssModel->ID = $this->input->post("ID");
		$this->ssModel->StudentID = $this->input->post("StudentID");
		$this->ssModel->CurriculumID = $this->input->post("CurriculumID");

		$response = $this->ssModel->studcurr_update();
		echo json_encode($response);
	}
}
