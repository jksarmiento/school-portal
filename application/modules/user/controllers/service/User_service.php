<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_service extends MY_Controller
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
			'user/service/User_services_model' => 'uModel',
		];
		$this->load->model($model_list);
	}

	public function user_save(){
		$this->uModel->Fname = $this->input->post("Fname");
		$this->uModel->Lname = $this->input->post("Lname");
		$this->uModel->User_type = $this->input->post("User_type");
		$this->uModel->Username = $this->input->post("Username");
		$this->uModel->Password = $this->input->post("Password");

		$response = $this->uModel->user_save();
		echo json_encode($response);
	}
}
