<?php
defined('BASEPATH') or exit('No direct script access allowed');
class StudCurr_model extends CI_Model
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

    public function get_students() {
        $this->db->select('*');
        $this->db->from($this->Table->students);
        $this->db->order_by('Lname', 'ASC');

        $query = $this->db->get()->result();
        return $query;
    }

    public function get_curriculums() {
        $this->db->select('*');
        $this->db->from($this->Table->curriculum);

        $query = $this->db->get()->result();
        return $query;
    }
}
