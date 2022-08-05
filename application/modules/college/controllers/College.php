<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Category extends MY_Controller
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
			'category/Category_model' => 'cModel',
		];
		$this->load->model($model_list);
	}

	/** load main page */
	public function index()
	{
		$this->data['details'] = $this->cModel->get_categories();
		$this->data['session'] =  $this->session;
		$this->data['content'] = 'index';
		$this->load->view('layout', $this->data);
	}

	public function contact_profile() {
		$ID = $this->uri->segment(3);
		$this->cModel->ID = $ID;

		$this->data['details'] = $this->cModel->contact_profile();
		$this->data['content'] = 'category_profile';
		$this->load->view('layout',$this->data);
	}
}
