<?php

class User_model extends CI_Model {
    
     public function __construct(){
                parent::__construct();
                $this->load->database();
        }
        
    public function update_user(){
        
        $pwd=$this->input->post('password');
        $pwd_hashed= password_hash($pwd,PASSWORD_DEFAULT);
        
        $data = array(
        'username' => $this->input->post('pseudo'),        
        'password' => $pwd_hashed
    );
           $this->db->set($data);
           $this->db->where('status', 'A');
    return $this->db->update('login', $data);
        
    }
}

