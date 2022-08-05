<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Course_services_model extends CI_Model
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

    public function category_save() {
        try {
            if(empty($this->Category_name)) {
                throw new Exception(MISSING_DETAILS, true);
            }

            $data = array(
                'Category_name' => $this->Category_name,
                'Date_created' => date('Y-m-d H:i:s')
            );

            $this->db->trans_start();
            
            $this->db->insert($this->Table->categories, $data);

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

    public function category_delete() {
        try {
            $this->db->trans_start();

            $this->db->where('ID', $this->ID);
            $this->db->delete($this->Table->categories);

            $this->db->trans_complete();
            if ($this->db->trans_status() === FALSE)
            {                
                $this->db->trans_rollback();
                throw new Exception(ERROR_PROCESSING, true);	
            }else{
                $this->db->trans_commit();
                return array('message'=>DELETED_SUCCESSFUL, 'has_error'=>false);
            }
        }
        catch(Exception$msg) {
            return (array('message'=>$msg->getMessage(), 'has_error'=>true));
        }
    }

    public function category_update() {
        try {
            if (empty($this->Category_name)) {
                throw new Exception(MISSING_DETAILS, true);
            }

            $data = array(
                'Category_name' => $this->Category_name,
            );

            $this->db->trans_start();
            
            $this->db->where('ID', $this->ID);
            $this->db->update($this->Table->categories, $data);

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
        catch(Exception$msg) {
            return (array('message'=>$msg->getMessage(), 'has_error'=>true));
        }
    }

    public function category_search() {
        try {
            $this->db->select('*');
            $this->db->like('Category_name', $this->Search_text);
            $this->db->from($this->Table->categories);

            $query = $this->db->get()->result();
            return $query;
        }
        catch(Exception$msg) {
            return (array('message'=>$msg->getMessage(), 'has_error'=>true));
        }
    }
}