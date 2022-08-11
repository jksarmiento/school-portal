<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Course_model extends CI_Model
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

    public function get_department(){
        $this->db->select('*');
        $this->db->from($this->Table->department);

        $query = $this->db->get()->result();
        return $query;
    }

    public function get_course(){
        $this->db->select(
            'c.*,'.
            'd.Department AS Department'
        );
        $this->db->from($this->Table->course. ' c');
        $this->db->join($this->Table->department. ' d', 'd.ID = c.DeptID', 'left');

        $query = $this->db->get()->result();
        return $query;
    }

    public function course_profile(){
        $this->db->select('*');
        $this->db->from($this->Table->course);
        $this->db->where('ID', $this->ID);

        $query = $this->db->get()->row();
        
        return $query;
    }
}
