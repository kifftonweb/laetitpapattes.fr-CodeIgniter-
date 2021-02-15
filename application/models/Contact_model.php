<?php

class Contact_model extends CI_Model {
    public function __construct(){
                parent::__construct();
                $this->load->database();
        }
        public function set_contact(){       

        $data = array(
            'nom' => $this->input->post('nom'),
            'prenom' => $this->input->post('prenom'),
            'tel' => $this->input->post('tel'),
            'mail' => $this->input->post('email'),
            'titre' => $this->input->post('sujet'),
            'message' => $this->input->post('message'),
        );

        return $this->db->insert('contact', $data);
    }
}

