<?php
defined('BASEPATH') or exit('No direct script access allowed');
class College_services_model extends CI_Model
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

    public function save(){
        try{     
            if(
                empty($this->College) ||
                empty($this->SchoolID)){
                throw new Exception(MISSING_DETAILS, true);
            }       
            
            $data = array(
                'College' => $this->College,
                'SchoolID' => $this->SchoolID,
                'Date_created' => date('Y-m-d H:i:s')
            );

            $this->db->trans_start();
                           
            $this->db->insert($this->Table->college,$data);

            $this->db->trans_complete();
            if ($this->db->trans_status() === FALSE)
            {                
                $this->db->trans_rollback();
                throw new Exception(ERROR_PROCESSING, true);    
            }else{
                $this->db->trans_commit();
                return array('message'=>SAVED_SUCCESSFUL, 'has_error'=>false);
            }
        }
        catch(Exception$msg){
            return (array('message'=>$msg->getMessage(), 'has_error'=>true));
        }
    }

    public function delete(){
        try{     
            $this->db->trans_start();
            $this->db->where('ID', $this->ID);  
            $this->db->delete($this->Table->college);
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
        catch(Exception$msg){
            return (array('message'=>$msg->getMessage(), 'has_error'=>true));
        }
    }

    public function college_update(){
        try{     
            if(empty($this->College)){
                throw new Exception(MISSING_DETAILS, true);
            }      

            $data = array(
                'College' => $this->College,
                'SchoolID' => $this->SchoolID,
            );

            $this->db->trans_start();
            $this->db->where('ID', $this->ID);
            $this->db->update($this->Table->college,$data);    
            
            $this->db->trans_complete();
            if ($this->db->trans_status() === FALSE)
            {                
                $this->db->trans_rollback();
                throw new Exception(ERROR_PROCESSING, true);    
            }else{
                $this->db->trans_commit();
                return array('message'=>SAVED_SUCCESSFUL, 'has_error'=>false);
            }
        }
        catch(Exception$msg){
            return (array('message'=>$msg->getMessage(), 'has_error'=>true));
        }
    }
}