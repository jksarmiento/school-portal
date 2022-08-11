<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Subject extends MY_Controller
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
			'subject/Subject_model' => 'sModel',
		];
		$this->load->model($model_list);
	}

	/** load main page */
	public function index()
	{
		$this->data['subject'] = $this->sModel->get_subject();
		$this->data['session'] =  $this->session;
		$this->data['content'] = 'index';
		$this->load->view('layout', $this->data);
	}

	public function subject_profile(){
		$ID = $this->uri->segment(3);
		$this->sModel->ID = $ID;
		
		$this->data['details'] = $this->sModel->subject_profile();
		$this->data['content'] = 'profile';
		$this->load->view('layout',$this->data);
	}
}
