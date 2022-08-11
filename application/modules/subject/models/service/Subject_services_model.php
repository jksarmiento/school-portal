<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Subject_services_model extends CI_Model
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
                empty($this->Subject_code) ||
                empty($this->Subject_name) ||
                empty($this->Units) ||
                empty($this->Description)){
                throw new Exception(MISSING_DETAILS, true);
            }       
            
            $data = array(
                'Subject_code' => $this->Subject_code,
                'Subject_name' => $this->Subject_name,
                'Units' => $this->Units,
                'Description' => $this->Description,
                'Date_created' => date('Y-m-d H:i:s')
            );

            $this->db->trans_start();
                           
            $this->db->insert($this->Table->subject,$data);

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
            $this->db->delete($this->Table->subject);
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

    public function subject_update(){
        try{     
            if(empty($this->Subject_code) ||
               empty($this->Subject_name) ||
               empty($this->Units)        ||
               empty($this->Description)){
                throw new Exception(MISSING_DETAILS, true);
            }      

            $data = array(
                'Subject_code' => $this->Subject_code,
                'Subject_name' => $this->Subject_name,
                'Units' => $this->Units,
                'Description' => $this->Description,
            );

            $this->db->trans_start();
            $this->db->where('ID', $this->ID);
            $this->db->update($this->Table->subject,$data);    
            
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