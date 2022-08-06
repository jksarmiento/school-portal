<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Term_model extends CI_Model
{
    public $Table;
    public function __construct()
    {
        parent::__construct();
        $this->session = (object)get_userdata(USER);

        // if(is_empty_object($this->session)){
        // 	redirect(base_url().'login/authentication', 'refresh');
        // }

        $model_list = [];
        $this->load->model($model_list);
        $this->Table = json_decode(TABLE);
    }

    public function get_ay() {
        $this->db->select('*');
        $this->db->from($this->Table->ay);
        $this->db->order_by('Start_year', 'ASC');

        $query = $this->db->get()->result();
        return $query;
    }
}
