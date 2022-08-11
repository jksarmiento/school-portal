<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Course extends MY_Controller
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
			'course/Course_model' => 'cModel',
		];
		$this->load->model($model_list);
	}

	/** load main page */
	public function index()
	{
		$this->data['course'] = $this->cModel->get_course();
		$this->data['department'] = $this->cModel->get_department();
		$this->data['session'] =  $this->session;
		$this->data['content'] = 'index';
		$this->load->view('layout', $this->data);
	}

	public function course_profile(){
		$ID = $this->uri->segment(3);
		$this->cModel->ID = $ID;
		
		$this->data['details'] = $this->cModel->course_profile();
		$this->data['department'] = $this->cModel->get_department();
		$this->data['content'] = 'profile';
		$this->load->view('layout',$this->data);
	}
}
