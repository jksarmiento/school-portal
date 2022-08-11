<?php
defined('BASEPATH') or exit('No direct script access allowed');

class StudCurr extends MY_Controller
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
			'studcurr/StudCurr_model' => 'sModel',
		];
		$this->load->model($model_list);
	}

	/** load main page */
	public function index()
	{
		if (
			!check_permission($this->session->User_type, ['admin'])
		) {
			redirect(base_url() . 'login', 'refresh');
		}

		$this->data['students'] = $this->sModel->get_students();
		$this->data['curriculum'] = $this->sModel->get_curriculums();
		$this->data['studcurr'] = $this->sModel->get_studcurr();
		$this->data['session'] =  $this->session;
		$this->data['content'] = 'index';
		$this->load->view('layout', $this->data);
	}

	public function contact_studcurr() {
		$ID = $this->uri->segment(3);
		$this->sModel->ID = $ID;

		$this->data['student'] = $this->sModel->get_student();
		$this->data['curriculum'] = $this->sModel->get_curriculums();
		$this->data['studcurr'] = $this->sModel->contact_studcurr();
		$this->data['content'] = 'studcurr_profile';
		$this->load->view('layout',$this->data);
	}
}
