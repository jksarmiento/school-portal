<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Term extends MY_Controller
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
			'term/Term_model' => 'tModel',
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

		$this->data['ay'] = $this->tModel->get_ay();
		$this->data['term'] = $this->tModel->get_terms();
		$this->data['session'] =  $this->session;
		$this->data['content'] = 'index';
		$this->load->view('layout', $this->data);
	}
}
