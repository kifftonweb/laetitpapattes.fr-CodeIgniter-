<?php

defined ('BASEPATH') OR exit('No direct script access allowed'); 

$config = array(
    'front/contact' => array(
        array(
                'field' => 'nom',
                'label' => 'Nom',
                'rules' => 'required'
        ),
        array(
                'field' => 'prenom',
                'label' => 'Prénom',
                'rules' => 'required'
        ),
        array(
                'field' => 'tel',
                'label' => 'Téléphone',
                'rules' => 'required'
        ),
        array(
                'field' => 'email',
                'label' => 'E-mail',
                'rules' => array('valid_email','required')
        ),       
        array(
                'field' => 'sujet',
                'label' => 'Sujet du message',
                'rules' => 'required'
        ),
        array(
                'field' => 'message',
                'label' => 'Message',
                'rules' => 'required'
        ),
        array(
                'field' => 'g-recaptcha-response',
                'label' => 'g-recaptcha-response',
                'rules' => 'required'
        )
    ),
    'admin/update_user' => array(
        array(
                'field' => 'pseudo',
                'label' => 'pseudo',
                'rules' => 'required'
        ),
        array(
                'field' => 'password',
                'label' => 'Mot de passe',
                'rules' => 'required'
        )
    ),
    'admin/connexion' => array(
        array(
                'field' => 'username',
                'label' => 'Nom d\'utilisateur',
                'rules' => 'required'
        ),
        array(
                'field' => 'password',
                'label' => 'Mot de passe',
                'rules' => 'required'
        )
    ),
    'admin/do_upload' => array(
        array(
                'field' => 'title',
                'label' => 'titre',
                'rules' => 'required'
        ),
        array(
                'field' => 'type',
                'label' => 'Type de fichier',
                'rules' => 'required'
        )
    ),
    'admin/do_upload_video' => array(
        array(
                'field' => 'title',
                'label' => 'titre',
                'rules' => 'required'
        )
    ),
    'admin/create_actu' =>array(
        array(
                'field' => 'title',
                'label' => 'titre',
                'rules' => 'required'
        ),
        array(
                'field' => 'content',
                'label' => 'contenu',
                'rules' => 'required'
        )
    ),
    'admin/update_actu' =>array(
        array(
                'field' => 'title',
                'label' => 'titre',
                'rules' => 'required'
        ),
        array(
                'field' => 'content',
                'label' => 'contenu',
                'rules' => 'required'
        )
    )
    
);