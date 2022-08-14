<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Studeducstatus_model extends CI_Model
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
        $this->db->select("*");
        $this->db->from($this->Table->school);

        $query = $this->db->get()->result();
        return $query;
    }

    public function get_students(){
        $this->db->select("*");
        $this->db->from($this->Table->students);

        $query = $this->db->get()->result();
        return $query;
    }

    public function get_studeducstatus(){
        $this->db->select(
            'c.*,'.
            's.School AS School,'.
            'e.Fname AS Fname,'.
            'e.Lname AS Lname'
        );
        $this->db->from($this->Table->studeducstatus. ' c');
        $this->db->join($this->Table->school. ' s', 's.ID = c.SchoolID', 'left');
        $this->db->join($this->Table->students. ' e', 'e.ID = c.StudentID', 'left');

        $query = $this->db->get()->result();
        return $query;
    }

    public function studeducstatus_profile(){
        $this->db->select(
            'c.*,'.
            's.School AS School,'.
            'e.Fname AS Fname,'.
            'e.Lname AS Lname'
        );
        $this->db->from($this->Table->studeducstatus. ' c');
        $this->db->where("c.ID", $this->ID);
        $this->db->join($this->Table->school. ' s', 's.ID = c.SchoolID', 'left');
        $this->db->join($this->Table->students. ' e', 'e.ID = c.StudentID', 'left');

        $query = $this->db->get()->row();
        return $query;
	}

}
