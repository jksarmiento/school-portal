<?php
defined('BASEPATH') or exit('No direct script access allowed');

class School_service extends MY_Controller
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
			'school/service/School_services_model' => 'ssModel',
		];
		$this->load->model($model_list);
	}

	public function save(){
		$this->ssModel->School = $this->input->post("School");
		$this->ssModel->Level = $this->input->post("Level");

		$response = $this->ssModel->save();
		echo json_encode($response);
	}

	public function delete(){
		$this->ssModel->ID = $this->input->post("ID");

		$response = $this->ssModel->delete();
		echo json_encode($response);
	} 

	public function update(){
		$this->ssModel->ID = $this->input->post("ID");
		$this->ssModel->School = $this->input->post("School");
		$this->ssModel->Level = $this->input->post("Level");

		$response = $this->ssModel->update();
		echo json_encode($response); 
	}
}
