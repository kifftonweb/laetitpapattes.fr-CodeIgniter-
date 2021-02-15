<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<!DOCTYPE html>
<h1 class="titrePage d-none text-center text-uppercase mt-3">Accueil</h1>

<section class="page-section clearfix">
    <div class="container">
      <div class="intro">
        <img class="intro-img img-fluid mb-3 mb-lg-0 rounded text-xs-center" src="assets/images/exemple.jpg" alt="">
        <div class="intro-text left-0 text-center bg-faded p-5 rounded">
          <h2 class="section-heading mb-4">
            <span class="section-heading-upper">Laetit'papates</span>
            <span class="section-heading-lower">Au service du bien être de vos animaux préférés </span>
          </h2>
          <p class="mb-3">Créé en 2018 Laetit'papattes propose une multitude de services destinés aux propriétaires d'animaux de compagnies.
          	              Essentiellement tournée vers les chiens ,nous accueillons également nos amis félins, et autres animaux de compagnie ...          	              
          </p>
          <div class="intro-button mx-auto">
            <?= anchor('contact', "Contact",array("class" =>"btn btn-primary btn-xl")); ?>
          </div>
        </div>
      </div>
    </div>
  </section>

<section class="page-section cta">
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <div class="cta-inner text-center rounded">
            <h2 class="section-heading mb-4">
              <span class="section-heading-upper">Mes références</span>
              <span class="section-heading-lower"></span>
            </h2>
            <p class="mb-0">
            					-Brevet professionnel d'éducation canine<br />
            					-Certificat de capacité d'animaux domestiques


            </p><br />
            <h2 class="section-heading mb-4">
              <span class="section-heading-upper">Mes garanties</span>
              <span class="section-heading-lower"></span>
            </h2>
            <p class="mb-0">
            	<i class="fas fa-paw"></i>Une méthode adaptée<br />
            	<i class="fas fa-paw"></i>Un service personnalisé et sur-mesure<br />
            	<i class="fas fa-paw"></i>Une évaluation comportementale approfondie de votre chien<br />
            	<i class="fas fa-paw"></i>Une écoute attentive de votre demande<br />
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>



</body>
</html>