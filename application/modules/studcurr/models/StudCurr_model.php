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

    public function get_studcurr() {
        $this->db->select('
            sc.*,
            s.Fname AS Fname,
            s.Mname AS Mname,
            s.Lname AS Lname,
            c.Curriculum_name AS Curriculum_name
        ');
        $this->db->from($this->Table->studcurr. ' sc');
        $this->db->join($this->Table->students. ' s', 'sc.StudentID = s.ID', 'left');
        $this->db->join($this->Table->curriculum. ' c', 'sc.CurriculumID = c.ID', 'left');

        $query = $this->db->get()->result();
        return $query;
    }

    public function get_student() {
        $this->db->select('StudentID');
        $this->db->from($this->Table->studcurr);
        $this->db->where('ID', $this->ID);
        
        $stud = $this->db->get()->row();

        $this->db->select('ID, Fname, Mname, Lname');
        $this->db->from($this->Table->students);
        $this->db->where('ID', $stud->StudentID);
        
        $query = $this->db->get()->row();
        return $query;
    }

    public function contact_studcurr() {
        $this->db->select('ID, StudentID, CurriculumID');
        $this->db->from($this->Table->studcurr);
        $this->db->where('ID', $this->ID);

        $query = $this->db->get()->row();
        return $query;
    }
}
