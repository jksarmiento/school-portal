<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Curriculum_service extends MY_Controller
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
			'curriculum/service/Curriculum_services_model' => 'csModel',
		];
		$this->load->model($model_list);
	}

	public function curriculum_save() {
		$this->csModel->CourseID = $this->input->post("CourseID");
		$this->csModel->AYID = $this->input->post("AYID");

		$response = $this->csModel->curriculum_save();
		echo json_encode($response);
	}

	public function curr_subj_save() {
		$this->csModel->CurriculumID = $this->input->post("CurrID");
		$this->csModel->Year_level = $this->input->post("Year_level");
		$this->csModel->Term = $this->input->post("Term");
		$this->csModel->SubjectID = $this->input->post("SubjectID");

		$response = $this->csModel->curr_subj_save();
		echo json_encode($response);
	}
}
