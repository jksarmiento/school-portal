<?php
defined('BASEPATH') or exit('No direct script access allowed');
class StudCurr_services_model extends CI_Model
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

    public function studcurr_save() {
        try {
            if(empty($this->StudentID) || empty($this->CurriculumID) ||
               $this->StudentID == 0 || $this->CurriculumID == 0) {
                throw new Exception(MISSING_DETAILS, true);
            }

            $data = array(
                'StudentID' => $this->StudentID,
                'CurriculumID' => $this->CurriculumID,
                'Active' => true,
                'Date_created' => date('Y-m-d H:i:s'),
            );

            $this->db->trans_start();
            
            $this->db->insert($this->Table->studcurr, $data);

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

    public function studcurr_update() {
        try {
            if(empty($this->StudentID) || empty($this->CurriculumID) ||
               $this->StudentID == 0 || $this->CurriculumID == 0) {
                throw new Exception(MISSING_DETAILS, true);
            }

            $prev_data = array(
                'Active' => false,
            );

            $new_data = array(
                'StudentID' => $this->StudentID,
                'CurriculumID' => $this->CurriculumID,
                'Active' => true,
                'Date_created' => date('Y-m-d H:i:s'),
            );

            $this->db->trans_start();

            $this->db->update($this->Table->studcurr, $prev_data);
            $this->db->where('ID', $this->ID);

            $this->db->insert($this->Table->studcurr, $new_data);

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