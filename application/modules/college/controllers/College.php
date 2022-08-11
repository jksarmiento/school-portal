<?php
defined('BASEPATH') or exit('No direct script access allowed');

class College extends MY_Controller
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
			'college/College_model' => 'cModel',
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

		$this->data['school'] = $this->cModel->get_school();
		$this->data['college'] = $this->cModel->get_college();
		$this->data['session'] =  $this->session;
		$this->data['content'] = 'index';
		$this->load->view('layout', $this->data);
	}

	public function college_profile(){
		$ID = $this->uri->segment(3);
		$this->cModel->ID = $ID;
		
		$this->data['details'] = $this->cModel->college_profile();
		$this->data['school'] = $this->cModel->get_school();
		$this->data['content'] = 'profile';
		$this->load->view('layout',$this->data);
	}
}
