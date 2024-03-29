<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Subject_model extends CI_Model
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

    public function get_subject(){
        $this->db->select('*');
        $this->db->from($this->Table->subject);

        $query = $this->db->get()->result();
        return $query;
    }

    public function subject_profile(){
        $this->db->select('*');
        $this->db->from($this->Table->subject);
        $this->db->where('ID', $this->ID);

        $query = $this->db->get()->row();
        
        return $query;
    }
}
