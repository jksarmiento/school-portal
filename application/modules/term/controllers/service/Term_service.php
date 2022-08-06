<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Term_service extends MY_Controller
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
			'term/service/term_services_model' => 'tsModel',
		];
		$this->load->model($model_list);
	}
}