<?php
defined('BASEPATH') or exit('No direct script access allowed');
class College_model extends CI_Model
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

    public function get_school(){
        $this->db->select('*');
        $this->db->from($this->Table->school);

        $query = $this->db->get()->result();
        return $query;
    }

    public function get_college(){
        $this->db->select(
            'c.*,'.
            's.School AS School'
        );
        $this->db->from($this->Table->college. ' c');
        $this->db->join($this->Table->school. ' s', 's.ID = c.SchoolID', 'left');

        $query = $this->db->get()->result();
        return $query;
    }
}
