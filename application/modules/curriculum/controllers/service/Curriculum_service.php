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

	public function ay_save() {
		$this->csModel->Start_year = $this->input->post("Start_year");
		$this->csModel->End_year = $this->input->post("End_year");

		$response = $this->csModel->ay_save();
		echo json_encode($response);
	}
}
