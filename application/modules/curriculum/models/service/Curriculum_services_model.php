<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Curriculum_services_model extends CI_Model
{
    public $ID;
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

    public function curriculum_save() {
        try {
            if(empty($this->CourseID) || 
               empty($this->AYID)) {
                throw new Exception(MISSING_DETAILS, true);
            }

            // $this->db->select('*');
            // $this->db->from($this->Table->ay);
            // $this->db->where('Start_year', $this->Start_year);

            // $query = $this->db->get()->result();
            // if (!empty($query)) {
            //     return (array('message'=>DUPLICATE_RECORD, 'has_error'=>true));
            // }

            $this->db->select('Course_code');
            $this->db->from($this->Table->course);
            $this->db->where('ID', $this->CourseID);

            $course_query = $this->db->get()->row();

            $this->db->select('Start_year, End_year');
            $this->db->from($this->Table->ay);
            $this->db->where('ID', $this->AYID);

            $ay_query = $this->db->get()->row();

            $curr_name = $course_query->Course_code . $ay_query->Start_year . $ay_query->End_year;

            $data = array(
                'Curriculum_name' => $curr_name,
                'CourseID' => $this->CourseID,
                'AYID' => $this->AYID,
                'Date_created' => date('Y-m-d H:i:s'),
            );

            $this->db->trans_start();
            
            $this->db->insert($this->Table->curriculum, $data);

            $this->db->trans_complete();
            if ($this->db->trans_status() === FALSE) {
                $this->db->trans_rollback();
                throw new Exception(ERROR_PROCESSING, true);
            }
            else {
                $this->db->trans_commit();
                return array('message'=>SAVED_SUCCESSFUL, 'has_error'=>false);
            }
        }
        catch(Exception$msg){
            return (array('message'=>$msg->getMessage(), 'has_error'=>true));
        }
    }

    public function curr_subj_save() {
        try {
            if(empty($this->CurriculumID) ||
               empty($this->Year_level) || 
               empty($this->Term) ||
               empty($this->SubjectID)) {
                throw new Exception(MISSING_DETAILS, true);
            }

            // $this->db->select('*');
            // $this->db->from($this->Table->ay);
            // $this->db->where('Start_year', $this->Start_year);

            // $query = $this->db->get()->result();
            // if (!empty($query)) {
            //     return (array('message'=>DUPLICATE_RECORD, 'has_error'=>true));
            // }

            $data = array(
                'CurriculumID' => $this->CurriculumID,
                'Year_level' => $this->Year_level,
                'Term' => $this->Term,
                'SubjectID' => $this->SubjectID,
                'Date_created' => date('Y-m-d H:i:s'),
            );

            $this->db->trans_start();
            
            $this->db->insert($this->Table->currsubj, $data);

            $this->db->trans_complete();
            if ($this->db->trans_status() === FALSE) {
                $this->db->trans_rollback();
                throw new Exception(ERROR_PROCESSING, true);
            }
            else {
                $this->db->trans_commit();
                return array('message'=>SAVED_SUCCESSFUL, 'has_error'=>false);
            }
        }
        catch(Exception$msg){
            return (array('message'=>$msg->getMessage(), 'has_error'=>true));
        }
    }
}