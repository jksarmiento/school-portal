<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Annual_year_service extends MY_Controller
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
			'annual_year/service/Annual_year_services_model' => 'aysModel',
		];
		$this->load->model($model_list);
	}
}
