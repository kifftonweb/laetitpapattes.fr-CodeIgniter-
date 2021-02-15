<?php 
$page = $this->uri->segment(1);

?>

<!DOCTYPE html>

<html lang="fr">

<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Bienvenue Laetit'papates</title>
  <!-- favicon -->  
  <link rel="icon" href="<?php echo base_url("assets/images/favicon/favicon.ico"); ?>" type="image/x-icon">
 
  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url("assets/css/bootstrap.css");?>" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="<?php echo base_url("assets/vendor/fontawesome-free/css/all.min.css");?>" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?php echo base_url("assets/css/business-casual.css");?>" rel="stylesheet">

</head>

<body>
    <header>
      <div class="container">
        <div class="row ">
          <div class="col d-none d-md-block"></div>
          <div class="col d-none d-md-block">
            <img src="assets/images/logo_header.jpg">
          </div>
          <div class="col d-none d-md-block"></div>
        </div>  
      </div>  
      <div class="container" >
        <div class="row text-center d-md-none">
          <div class="col-md-3">
          </div>
          <div class="col-md-6 mb-md-4" id="contain_logo">
          </div>
          <div class="col">
          </div>
        </div>
      </div>

      <!-- Navigation -->
      <nav class="navbar navbar-expand-lg navbar-dark py-lg-4 mt-lg-3 mt-xs-sm-0 " id="mainNav">
        <div class="container">
          <h6 class="suivi pr-3">Suivez-nous :</h6>
          <a class="navbar-brand text-uppercase text-expanded font-weight-bold" href="https://www.facebook.com/Laetitpapattes-2079488815660324"><i class="fab fa-facebook"></i></a>
          <a class="navbar-brand text-uppercase text-expanded font-weight-bold" href="#"><i class="fab fa-twitter"></i></a>
          <a class="navbar-brand text-uppercase text-expanded font-weight-bold" href="#"><i class="fab fa-instagram"></i></a>
          <a class="navbar-brand text-uppercase text-expanded font-weight-bold" href="#"><i class="fab fa-linkedin"></i></a> 
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse pl-3" id="navbarResponsive">
            <ul class="navbar-nav mx-auto" id="filtre">
                
               <li class="nav-item pt-lg-3 px-lg-3 <?php if($page == "index"){echo 'active';}?>">                  
                <?= anchor('index', "Accueil",array("class" =>"nav-link text-uppercase text-expanded text-center")); ?>                      
               </li>
               <li class="nav-item px-lg-3 <?php if($page == "pension"){echo 'active';}?>">
                <?= anchor('pension', "Pension et garde",array("class" =>"nav-link text-uppercase text-expanded text-center")); ?>
              </li>
              <li class="nav-item  px-lg-3 <?php if($page == "educ"){echo 'active';}?>">
                <?= anchor('educ', "éducation canine",array("class" =>"nav-link text-uppercase text-expanded text-center")); ?>
              </li>
              <li class="nav-item px-lg-3 <?php if($page == "tarif"){echo 'active';}?>">
                <?= anchor('tarif', "tarifs et forfaits",array("class" =>"nav-link text-uppercase text-expanded text-center")); ?>
              </li>
              <li class="nav-item pt-lg-3 px-lg-3 <?php if($page == "portFolio"){echo 'active';}?>">
                <?= anchor('portFolio', "Réalisations",array("class" =>"nav-link text-uppercase text-expanded text-center")); ?>
              </li>           
              <li class="nav-item pt-lg-3 px-lg-3 <?php if($page == "contact"){echo 'active';}?>">
                <?= anchor('contact', "Contact",array("class" =>"nav-link text-uppercase text-expanded text-center")); ?>
              </li>
            </ul>
          </div>
        </div>
      </nav> 
    </header>
    
  
    
    
