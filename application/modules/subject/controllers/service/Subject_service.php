<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Subject_service extends MY_Controller
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
			'subject/service/Subject_services_model' => 'ssModel',
		];
		$this->load->model($model_list);
	}

	public function save(){
		$this->ssModel->Subject_code = $this->input->post("Subject_code");
		$this->ssModel->Subject_name = $this->input->post("Subject_name");
		$this->ssModel->Units = $this->input->post("Units");
		$this->ssModel->Description = $this->input->post("Description");

		$response = $this->ssModel->save();
		echo json_encode($response);
	}

	public function delete(){
		$this->ssModel->ID = $this->input->post("ID");

		$response = $this->ssModel->delete();
		echo json_encode($response);
	} 
}
