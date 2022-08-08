<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Department_model extends CI_Model
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

    public function get_college(){
        $this->db->select('*');
        $this->db->from($this->Table->college);

        $query = $this->db->get()->result();
        return $query;
    }

    public function get_department(){
        $this->db->select(
            'd.*,'.
            'c.College AS College'
        );
        $this->db->from($this->Table->department. ' d');
        $this->db->join($this->Table->college. ' c', 'c.ID = d.CollegeID', 'left');

        $query = $this->db->get()->result();
        return $query;
    }
}
