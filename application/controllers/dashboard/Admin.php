<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function index() {
        $this->load->helper('url');
        if ($this->authentification_user->is_connected) {
            $data['title'] = "Bienvenue sur le tableau d'administration";
            $this->load->view('/admin/inc/header');
            $this->load->view('/admin/inc/sidebar');
            $this->load->view('/admin/index', $data);
            $this->load->view('/admin/inc/footer');
        } else {
            redirect('admin/connexion');
        }
    }

    Public function connexion() {
        $this->load->helper("form");
        $this->load->library('form_validation');

        $data['title'] = "Connexion";

        if ($this->form_validation->run()) {
            $_SERVER ['REQUEST_METHOD'] = 'POST'; 
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $this->authentification_user->login($username, $password);
            if ($this->authentification_user->is_connected) {
                redirect('admin/index');
            } else {
                $data['login_error'] = "Echec de l'authentification";
            }
        }
        $this->load->view('admin/inc/header', $data);
        $this->load->view('admin/connexion', $data);
        $this->load->view('admin/inc/footer', $data);
    }
    
    Public function deconnexion() {
        $this->load->helper('url');
        $this->authentification_user->logout();
        redirect('admin/connexion');
    }
    
    Public function update_user(){
        if ($this->authentification_user->is_connected) {            
            $this->load->helper('form');
            $this->load->library('form_validation');
            $data['title'] = "Modifiez vos informations de connexion";
           
                
            if ($this->form_validation->run() === True) {
                $data['title'] = "Vos informations de connexion ont été modifiées avec succés";
                $pwd=$this->input->post('password');
                $pwd_hashed= password_hash($pwd,PASSWORD_DEFAULT);
                $data['pwd_hashed']= $pwd_hashed;
                $this->load->model('user_model');
                $this->user_model->update_user();
                $this->load->view('admin/inc/header', $data);
                $this->load->view('/admin/inc/sidebar');
                $this->load->view('admin/update_user_success', $data);
                $this->load->view('admin/inc/footer');
            } elseif ($this->form_validation->run() && $this->form_validation->run() === False) {
                $data['title'] = "Vos informations de connexions n'ont pas pu être modifiées";
                $this->load->view('admin/inc/header', $data);
                $this->load->view('admin/inc/sidebar', $data);
                $this->load->view('admin/update_user', $data);
                $this->load->view('admin/inc/footer', $data);
            } else {
            $this->load->view('admin/inc/header');
            $this->load->view('admin/inc/sidebar');
            $this->load->view('admin/update_user', $data);
            $this->load->view('admin/inc/footer');
            }
        
    }
        else {
            redirect('admin/connexion');
        }
    }
    
    

    function add_photos() {
        $this->load->helper('url');
       if ($this->authentification_user->is_connected) {
        $data['title'] = "Téléchargez ou hébergez votre média";

        $this->load->view('admin/inc/header', $data);
        $this->load->view('/admin/inc/sidebar');
        $this->load->view('admin/add_photos', array('error' => ' '));
        $this->load->view('admin/inc/footer');
    }else {
           redirect('admin/connexion');
        }
   }

    function do_upload() {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|mp4';
        $config['max_size'] = 2000000;
        $config['overwrite'] = FALSE;
        $config['remove_spaces'] = TRUE;
        

        $this->load->library('upload', $config);

        if ($this->form_validation->run() === TRUE && $this->upload->do_upload('photo_file')) {
            $data['title'] = "Le fichier a été téléchargé avec succés";
            $fInfo = $this->upload->data('image_size_str');
            $this->load->model('media_model');
            $slug = @file_get_contents($file);
            $this->media_model->set_media();
            $this->load->view('admin/inc/header', $data);
            $this->load->view('/admin/inc/sidebar');
            $this->load->view('admin/add_photos_success', $data);
            $this->load->view('admin/inc/footer');
        } elseif($this->form_validation->run() === TRUE && $this->input->post('url')){
            $data['title'] = "Le fichier a été hébergé avec succés";
            $this->load->model('media_model');
            $slug=NULL;
            $url=$this->input->post('url');
            $this->media_model->set_media();
            $this->load->view('admin/inc/header', $data);
            $this->load->view('/admin/inc/sidebar');
            $this->load->view('admin/add_photos_success', $data);
            $this->load->view('admin/inc/footer');
        } elseif (!$this->upload->do_upload('photo_file') || $this->form_validation->run() === FALSE) {
            $error = array('error' => $this->upload->display_errors());
            $data['title'] = "Le fichier n'a pas pu être téléchargé";
            $this->load->view('admin/inc/header', $data);
            $this->load->view('/admin/inc/sidebar');
            $this->load->view('admin/add_photos', $error);
            $this->load->view('admin/inc/footer');
        }
    }

    Public function galery_photo() {
        $this->load->helper('url');
        if ($this->authentification_user->is_connected) {
            $this->load->model('media_model');

            $photo = $this->media_model->get_media();
            $titre = "Gallerie médias";

            $data['photo'] = $photo;
            $data['titre'] = $titre;

            $this->load->view('admin/inc/header', $data);
            $this->load->view('/admin/inc/sidebar', $data);
            $this->load->view('admin/galery_photo', $data);
            $this->load->view('admin/inc/footer', $data);
        } else {
            redirect('admin/connexion');
        }
    }
    
    
    Public function delete_media($slug= NULL) {
        
        $this->load->helper(array('form', 'url','file'));
        
        if ($this->authentification_user->is_connected) {
            $this->load->model('media_model');  
            $fichier=$_SERVER['DOCUMENT_ROOT'].'/uploads/'.$slug;
            if(isset($slug)&& file_exists($fichier)){                
            $this->media_model->delete_media($slug);  
            $data['fichier']=$fichier;    
            unlink($fichier);
            redirect('admin/galery_photo');
        } else {
            redirect('admin/connexion');
        }
    }
    }
    
    Public function delete_mediaWithUrl($id= NULL) {
        
        $this->load->helper(array('form', 'url'));
        if ($this->authentification_user->is_connected) {
            $this->load->model('media_model');  
            if(isset($id)){
            $this->media_model->delete_mediaWithUrl($id);
            redirect('admin/galery_photo');
        } else {
            redirect('admin/connexion');
        }
    }
    }   
   
}
