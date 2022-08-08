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

		// if(is_empty_object($this->session)){
		// 	redirect(base_url().'login/authentication', 'refresh');
		// }

		$model_list = [
			'college/College_model' => 'cModel',
		];
		$this->load->model($model_list);
	}

	/** load main page */
	public function index()
	{
		$this->data['school'] = $this->cModel->get_school();
		$this->data['college'] = $this->cModel->get_college();
		$this->data['session'] =  $this->session;
		$this->data['content'] = 'index';
		$this->load->view('layout', $this->data);
	}

	// public function get_school(){
	// 	$this->data['content'] = 'grid/select_school';
	// 	$this->load->view('layout',$this->data);
	// }
}
