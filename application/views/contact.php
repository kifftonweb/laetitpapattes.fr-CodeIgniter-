<h1 class="titrePage d-none text-center text-uppercase mt-3">Contact</h1>
<section class="page-section about-heading ">
      <div class="container">
        <div class="about-heading-content mt-2">
          <div class="row">
            <div class="col-xl-12 col-lg-12 mx-auto">
              <div class="bg-faded rounded p-5">
                <h2 class="section-heading mb-4">
                  <span class="section-heading-upper">Formulaire de contact</span>
                  <span class="section-heading-lower"></span>
                </h2>
                <p>Merci de remplir tous les champs du formulaire. Notre équipe vous recontactera dans les plus brefs délais afin de répondre à votre message.</p>
                
                        <!J'utilise le form_helper de codeIgniter pour me protéger de l'attaque csrf car il intègre une fonction de génération de token
                          je l'active dans le fichier config.php-->                
                        <?= form_open_multipart('contact'); ?>
                            <div class="form-group row">
                                <div class="col-md-6 <?= empty(form_error('nom'))?'':'has-error' ?>">
                                    <?= form_input(['name' => "nom", 'id' => "nom",'placeholder' =>"Nom *", 'class' => 'form-control'], set_value('nom'))?>
                                    <span class="help-block text-danger"><?= form_error('nom'); ?></span>
                                </div>
                                <div class="col-md-6 <?= empty(form_error('prenom'))?'':'has-error' ?>">
                                    <?= form_input(['name' => "prenom", 'id' => "prenom",'placeholder' =>"Prénom *", 'class' => 'form-control'], set_value('prenom'))?>
                                    <span class="help-block text-danger"><?= form_error('prenom'); ?></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6 <?= empty(form_error('tel'))?'':'has-error' ?>">
                                    <?= form_input(['name' => "tel", 'id' => "tel",'placeholder' =>"Téléphone *", 'class' => 'form-control'], set_value('tel'))?>
                                    <span class="help-block text-danger"><?= form_error('tel'); ?></span>
                                </div>
                                <div class="col-md-6 <?= empty(form_error('email'))?'':'has-error' ?>">
                                    <?= form_input(['name' => "email", 'id' => "email",'placeholder' =>"Email *",'type'=>"email", 'class' => 'form-control'], set_value('email'))?>
                                    <span class="help-block text-danger"><?= form_error('email'); ?></span>
                                </div>
                            </div>
                            <div class="form-group row ">
                                <div class="col-md <?= empty(form_error('sujet'))?'':'has-error' ?> ">
                                <?= form_input(['name' => "sujet", 'id' => "sujet",'placeholder' =>"Sujet du message *", 'class' => 'form-control'], set_value('sujet'))?>
                                    <span class="help-block text-danger"><?= form_error('sujet'); ?></span>
                                </div>
                            </div>
                            <div class="form-group <?= empty(form_error('message'))?'':'has-error' ?>">
                                <?= form_textarea(['name' => "message", 'id' => "message",'placeholder' =>"Message *", 'class' => 'form-control'], set_value('message'))?>
                                <span class="help-block text-danger"><?= form_error('message'); ?></span>
                            </div>
                            <div class="g-recaptcha" data-sitekey="6Lfa6L8ZAAAAAK4w3BeAyd3jJ__2W9SZSwTSz66-"></div>
                            <div class="form-group ">
                                <?= form_submit("send", "Envoyer", ['class'=>"btn btn-primary"]); ?>
                            </div>
                        <?= form_close() ;?> 
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="page-section cta">
      <div class="container">
        <div class="row">
          <div class="col col-xl-6 mx-auto">
            <div class="cta-inner text-center rounded">
              <h2 class="section-heading mb-5">
                <span class="section-heading-lower">Nous sommes ouverts</span>
              </h2>
              <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                <li class="list-unstyled-item list-hours-item d-flex">
                  Dimanche
                  <span class="ml-auto">Fermé</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Lundi
                  <span class="ml-auto">7h00 - 20h00</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Mardi
                  <span class="ml-auto">7h00 - 20h00</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Mercredi
                  <span class="ml-auto">7h00 - 20h00</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Jeudi
                  <span class="ml-auto">7h00 - 20h00</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Vendredi
                  <span class="ml-auto">7h00 - 20h00</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Samedi
                  <span class="ml-auto">7h00 - 20h00</span>
                </li>
              </ul>
              
            </div>
          </div>

           <div class="col col-xl-6 mx-auto my-auto">
              <div class="cta-inner text-center justify-content-center rounded p-4" id="contain_map">
                <h2 class="section-heading mb-3">
                  <span class="section-heading-lower">Nous situer</span>
                </h2>
                  <div id="map"></div>
                  <div id="distance">
                      <p>Vous vous trouvez actuellement à <span class="distance"></span> kms de nôtre site.</p>
                  </div>
              </div>
            </div>

        </div>

      </div>
    </section>
