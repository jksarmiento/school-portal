<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Curriculum extends MY_Controller
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
			'curriculum/Curriculum_model' => 'cModel',
		];
		$this->load->model($model_list);
	}

	/** load main page */
	public function index()
	{
		$this->data['course'] = $this->cModel->get_courses();
		$this->data['ay'] = $this->cModel->get_ay();
		$this->data['subject'] = $this->cModel->get_subjects();
		$this->data['curriculum'] = $this->cModel->get_curriculums();
		$this->data['session'] =  $this->session;
		$this->data['content'] = 'index';
		$this->load->view('layout', $this->data);
	}

	public function contact_curriculum() {
		$ID = $this->uri->segment(3);
		$this->cModel->ID = $ID;

		$this->data['subject'] = $this->cModel->get_subjects();
		$this->data['curr_id'] = $ID;
		$this->data['curr_name'] = $this->cModel->get_curriculum();
		$this->data['terms'] = $this->cModel->contact_terms();
		$this->data['curriculum'] = $this->cModel->contact_curriculum();
		$this->data['subjects'] = $this->cModel->contact_subjects();
		$this->data['content'] = 'curriculum_profile';
		$this->load->view('layout',$this->data);
	}
}
