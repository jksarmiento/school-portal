<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Studeducstatus extends MY_Controller
{
	private $data = [];
	protected $session;
	public function __construct()
	{
		parent::__construct();
		$this->session = (object)get_userdata(USER);

		if(is_empty_object($this->session)){
			redirect(base_url().'login/authentication', 'refresh');
		}

		$model_list = [
			'studeducstatus/Studeducstatus_model' => 'sesModel',
		];
		$this->load->model($model_list);
	}

	/** load main page */
	public function index()
	{
		if (
			!check_permission($this->session->User_type, ['student'])
		) {
			redirect(base_url() . 'login', 'refresh');
		}

		$this->data['school'] = $this->sesModel->get_school();
		$this->data['students'] = $this->sesModel->get_students();
		$this->data['studeducstatus'] = $this->sesModel->get_studeducstatus();
		$this->data['session'] =  $this->session;
		$this->data['content'] = 'index';
		$this->load->view('layout', $this->data);
	}

	public function studeducstatus_profile(){
		$ID = $this->uri->segment(3);
		$this->sesModel->ID = $ID;

		$this->data['details'] = $this->sesModel->studeducstatus_profile();
		$this->data['school'] = $this->sesModel->get_school();
		$this->data['students'] = $this->sesModel->get_students();
		$this->data['content'] = 'profile';
		$this->load->view('layout', $this->data);
	}

}
