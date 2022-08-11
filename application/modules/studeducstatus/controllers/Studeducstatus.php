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
		$this->data['session'] =  $this->session;
		$this->data['content'] = 'index';
		$this->load->view('layout', $this->data);
	}
}
