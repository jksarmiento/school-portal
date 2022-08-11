<?php
defined('BASEPATH') or exit('No direct script access allowed');
class User_services_model extends CI_Model
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

    public function user_save(){
        try{     
            if(
                empty($this->Fname) ||
                empty($this->Lname) ||
                empty($this->User_type) ||
                empty($this->Username) || 
                empty($this->Password)
                ){
                throw new Exception(MISSING_DETAILS, true);
            }   
            
            $Auth_token = auth_token();
            $Locker = locker();
            $Password = sha1(password_generator($this->Password, $Locker));    

            $data = array(
                'Fname' => $this->Fname,
                'Lname' => $this->Lname,
                'User_type' => $this->User_type,
                'Username' => $this->Username,
                'Password' => $Password,
                'Auth_token' => $Auth_token,
                'Locker' => $Locker,
                'Date_created' => date('Y-m-d H:i:s')
            );

            $this->db->trans_start();
                           
            $this->db->insert($this->Table->user, $data);

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