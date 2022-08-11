<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Department extends MY_Controller
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
			'department/Department_model' => 'dModel',
		];
		$this->load->model($model_list);
	}

	/** load main page */
	public function index()
	{
		$this->data['department'] = $this->dModel->get_department();
		$this->data['college'] = $this->dModel->get_college();
		$this->data['session'] =  $this->session;
		$this->data['content'] = 'index';
		$this->load->view('layout', $this->data);
	}

	public function department_profile(){
		$ID = $this->uri->segment(3);
		$this->dModel->ID = $ID;
		
		$this->data['details'] = $this->dModel->department_profile();
		$this->data['college'] = $this->dModel->get_college();
		$this->data['content'] = 'profile';
		$this->load->view('layout',$this->data);
	}
}
