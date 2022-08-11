<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends MY_Controller
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
			'user/User_model' => 'uModel',
		];
		$this->load->model($model_list);
	}

	/** load main page */
	public function index()
	{
		if (
			!check_permission($this->session->User_type, ['admin']) &&
			!check_permission($this->session->User_type, ['student'])
		) {
			redirect(base_url() . 'login', 'refresh');
		}

		$this->data['session'] =  $this->session;
		$this->data['content'] = 'index';
		$this->load->view('layout', $this->data);
	}
}
