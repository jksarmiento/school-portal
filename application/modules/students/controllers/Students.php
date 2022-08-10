<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Students extends MY_Controller
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
			'students/Students_model' => 'sModel',
		];
		$this->load->model($model_list);
	}

	/** load main page */
	public function index()
	{
		$this->data['school'] = $this->sModel->get_school();
		$this->data['students'] = $this->sModel->get_students();
		$this->data['session'] =  $this->session;
		$this->data['content'] = 'index';
		$this->load->view('layout', $this->data);
	}

	public function students_profile(){
		$ID = $this->uri->segment(3);
		$this->sModel->ID = $ID;

		$this->data['details'] = $this->sModel->students_profile();
		$this->data['school'] = $this->sModel->get_school();
		$this->data['content'] = 'profile';
		$this->load->view('layout', $this->data);
	}

}
