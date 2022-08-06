<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Annual_year_services_model extends CI_Model
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

    public function ay_save() {
        try {
            if(empty($this->Start_year) || empty($this->End_year)) {
                throw new Exception(MISSING_DETAILS, true);
            }

            $this->db->select('*');
            $this->db->from($this->Table->ay);
            $this->db->where('Start_year', $this->Start_year);

            $query = $this->db->get()->result();
            if (!empty($query)) {
                return (array('message'=>DUPLICATE_RECORD, 'has_error'=>true));
            }

            $data = array(
                'Start_year' => $this->Start_year,
                'End_year' => $this->End_year,
                'Date_created' => date('Y-m-d H:i:s'),
            );

            $this->db->trans_start();
            
            $this->db->insert($this->Table->ay, $data);

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