<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Annual_year_service extends MY_Controller
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
			'annual_year/service/Annual_year_services_model' => 'aysModel',
		];
		$this->load->model($model_list);
	}

	public function ay_save() {
		$this->aysModel->Start_year = $this->input->post("Start_year");
		$this->aysModel->End_year = $this->input->post("End_year");

		$response = $this->aysModel->ay_save();
		echo json_encode($response);
	}
}
