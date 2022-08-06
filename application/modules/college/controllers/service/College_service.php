<?php
defined('BASEPATH') or exit('No direct script access allowed');

class College_service extends MY_Controller
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
			'college/service/College_services_model' => 'csModel',
		];
		$this->load->model($model_list);
	}

	public function save(){
		$this->csModel->College = $this->input->post("College");
		$this->csModel->SchoolID = $this->input->post("SchoolID");

		$response = $this->csModel->save();
		echo json_encode($response);
	}
}
