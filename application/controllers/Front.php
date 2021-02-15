<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends CI_Controller {
	public function index()
	{
                $this->load->view('front/header');
		$this->load->view('index');
                $this->load->view('front/footer');
	}
        public function pension(){
                $this->load->view('front/header');
                $this->load->view('pension');
                $this->load->view('front/footer');
        }
        public function educ(){
                $this->load->view('front/header');
                $this->load->view('educ');
                $this->load->view('front/footer');
        }
        public function tarif(){
                $this->load->view('front/header');
                $this->load->view('tarif');
                $this->load->view('front/footer');
        }
       
        public function portFolio(){
                $this->load->model('media_model');
                $photo = $this->media_model->get_media();
                
                $data['photo'] = $photo;
                $this->load->view('front/header');
                $this->load->view('portFolio', $data);
                $this->load->view('front/footer');
        }
        public function contact(){
                $this->load->helper("form");
                $this->load->library('form_validation');
                
                $response = $this->input->post('g-recaptcha-response');
                $url='https://www.google.com/recaptcha/api/siteverify';
                
                $info=array(
                            'secret'=>'6Lfa6L8ZAAAAAOuRiBzRZCI51WynE_Y3_4kqmGRD',
                            'response'=> $response
                );
                $options= array(
                                'http' => array(
                                                'method'=>'POST',
                                                'content'=> http_build_query($info)//Génère une chaîne de requête en encodage URL
                                                )
                                );
                $context = stream_context_create($options);
                
                
                $this->load->view('front/header');

                if ($this->form_validation->run()){       
                        
                $_SERVER ['REQUEST_METHOD'] = 'POST';                                                                                                                                     
                    $verify = @file_get_contents($url, false, $context);
                    $captcha_success = json_decode($verify);
                    if($captcha_success ->success == true){
                        //charge le model contact
                        $this->load->model('contact_model');
                        // Chargement de la librairie email
                        $this->load->library('email');
                        //charge les paramètres de configuration déclarée dans le fichier email.php
                        $this->config->load('email', TRUE);                        
                        $this->email->initialize($this->config->item('email'));
                        //Récupére le nom et l'adresse mail de l'utilisateur
                        $this->email->from($this->input->post('email'), $this->input->post('nom') );
                        //Renseigne l'adresse mail du destinataire
                        $this->email->to('kieffer.alexandre@orange.fr');
                        //Assigne le sujet du message comme sujet au mail
                        $this->email->subject($this->input->post('sujet'));
                        //Assigne le contenu du message comme contenu du mail
                        $this->email->message($this->input->post('message'));
                        //envoi le mail
                        $this->email->send(); 
                        //Insère le message en base de données
                        $this->contact_model->set_contact();
                    }                    
                    $this->load->view('contact_success');                       
                }else{                    
                    $this->load->view('contact');
                }
                    $this->load->view('front/footer');
        }
        Public function session_test(){
        $this->session->count ++;
        echo "valeur ". $this->session->count ;
    }
        Public function mention_legales(){
                $this->load->view('front/header');
                $this->load->view('mention_legales');
                $this->load->view('front/footer'); 
                
        }
}
