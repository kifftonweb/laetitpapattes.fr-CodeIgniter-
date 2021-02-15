<?php

class Media_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    //Je déclare ma fonction get_media qui prendra comme paramètre la variable $slug initialisée à "FALSE"
    public function get_media($slug = FALSE) {
        //Si $slug n'est pas précisé je récupère toutes les photos
        if ($slug === FALSE) {
            $query = $this->db->get('medias');
            return $query->result_array();
        }
        //Je récupère la photo correspondant à $slug
        $query = $this->db->get_where('medias', array('slug' => $slug));
        return $query->row_array();
    }

    public function set_media() {

        $this->load->helper('url');
        $slug = $_FILES['photo_file']['name'];
        $data = array(
            'titre' => $this->input->post('title'),
            'type' => $this->input->post('type'),
            'url' => $this->input->post('url'),
            'slug' => $slug
                
        );
        return $this->db->insert('medias', $data);
    }

    public function delete_media($slug = NULL) {
        $this->load->helper('url');
        $this->db->where('slug', $slug);
        return $this->db->delete('medias');
    }

    public function delete_mediaWithUrl($id = NULL) {
        $this->load->helper('url');



        $this->db->where('id', $id);
        return $this->db->delete('medias');
    }
}
