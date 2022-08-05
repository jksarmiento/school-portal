<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Category_service extends MY_Controller
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
			'category/service/Category_services_model' => 'csModel',
		];
		$this->load->model($model_list);
	}

	public function category_save() {
		$this->csModel->Category_name = $this->input->post("Category_name");

		$response = $this->csModel->category_save();
		echo json_encode($response);
	}

	public function category_delete() {
		$this->csModel->ID = $this->input->post("ID");

		$response = $this->csModel->category_delete();
		echo json_encode($response);
	}

	public function category_update() {
		$this->csModel->ID = $this->input->post("ID");
		$this->csModel->Category_name = $this->input->post("Category_name");

		$response = $this->csModel->category_update();
		echo json_encode($response);
	}

	public function category_search() {
		$this->csModel->Search_text = $this->input->post("Search_text");

		$this->data['details'] = $this->csModel->category_search();
		$this->data['content'] = 'grid/load_category';
		$this->load->view('layout',$this->data);
	}
}
