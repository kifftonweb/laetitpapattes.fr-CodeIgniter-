
<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <?php
        include VIEWPATH . 'admin/inc/topbar.php';
        ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <i class="fas fa-download fa-sm text-white-50">
                </i>
                <?= anchor('index', "<i class='fas fa-home fa-sm text-white-50'></i>retourner sur le site", array("class" => "d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm")); ?>             

            </div>
            
            <!-- Content Row -->
            <div class="row">
                <div class="col-2 mt-3 mb-3">
                    
                </div>
                <div class="col-8 text-center mt-3 mb-3">
                    <h1 class="h3 mb-0 text-gray-800"><?= heading($title); ?> </h1>
                    
                </div>
                <div class="col-2 mt-3 mb-3">
                    
                </div>
            </div>
            
            <!-- Content Row -->
            <div class="">

                <?php echo validation_errors(); ?>

                <?php echo $error; ?>

                <?= form_open_multipart('admin/do_upload', ['class' => 'form-horizontal']); ?>
                <div class="form-group row">
                    
                        <?php
                        $attributes = array(
                            'class' => "col-form-label col-sm-2",
                            'style' => "text-decoration:underline"
                        );
                        echo form_label('Titre du média :','title',$attributes) ?>
                    <div class="col-md-4 <?= empty(form_error('title')) ? '' : 'has-error' ?>">
                        <?= form_input(['name' => "title", 'id' => "title", 'placeholder' => "Titre *", 'class' => 'form-control'], set_value('title')) ?>  
                        <span class="help-block"><?= form_error('title'); ?></span>
                    </div>
                </div>
                <div class="form-group row">
                    <legend class="col-form-label col-sm-2 pt-0" style="text-decoration: underline;">Type de fichier :</legend>
                    <div class="col-md <?= empty(form_error('type')) ? '' : 'has-error' ?>">                        
                        <div class="form-check">
                            <?= form_radio(['name' => "type", 'id' => "photos", 'value' => "P", 'class' => ''], set_value('type')) ?>
                            <?= form_label('Photos', 'photos'); ?><br>
                        </div>
                        <div class="form-check">

                            <?= form_radio(['name' => "type", 'id' => "videos", 'value' => "V", 'class' => ''], set_value('type')) ?>
                            <?= form_label('Vidéos', 'videos'); ?><br>
                        </div>
                        <span class="help-block"><?= form_error('type'); ?></span>
                    </div>
                </div>
                <div class="row" id='lgd_img' style='display:none;'> 
                    <div class="col-3"></div>
                    <div class="col-5">
                        <legend class="col-form-label" style="text-decoration: underline;">Sélectionnez l'image à télécharger depuis votre disque dur :</legend>
                    </div>
                    <div class="col-4"></div>
                </div>
                <div class="row lgd_video" id='' style='display:none;'> 
                    <div class="col-3"></div>
                    <div class="col-5">
                        <legend class="col-form-label" style="text-decoration: underline;">Sélectionnez la vidéo a télécharger depuis votre disque dur (jusqu'à 70mo):</legend>
                    </div>
                    <div class="col-4"></div>
                </div>
                <div class=" form-row mt-2 mb-2">
                    <div class="col-3"></div>
                    <div id="media_file" class="col-6" style='display:none;'>
                        <?php
                        $attributes = array(
                            'class' => "custom-file-label ml-3 form-control"
                        );
                        echo form_label('Choississez le média', 'photo_file', $attributes);
                        ?>
                        <?= form_upload(['name' => "photo_file", 'id' => "photo_file", 'class' => "form-control custom-file-input"]) ?> 
                        <img class="col-5" id="extrait_img" style='display: none; height:250px; width:250px; border: 1px solid #ddd; border-radius: 4px; padding: 5px;' src="#" alt="ton image" />
                        <video class="col-5" id="extrait" style="display: none;" width="400" controls>
                            <source src="#" type="video/mp4">
                        </video>
                    </div>
                </div>
                <div class="row lgd_video" id='' style='display:none;'> 
                    <div class="col-3"></div>
                    <div class="col-5">
                        <legend class="col-form-label" style="text-decoration: underline;">Collez l'adresse de la vidéo à héberger depuis votre hébergeur de vidéos préféré (Youtude, viméo...) :</legend>
                    </div>
                    <div class="col-4"></div>
                </div>
                <div class=" form-row mt-2">
                    <div class="col-3"></div>
                    <div id="url_file" class="col-6 ml-3 mt-2" style='display:none;'>
                        <?= form_input(['name' => "url", 'id' => "url", 'placeholder' => "Entrer l'adresse de la vidéo à  intégrer ", 'class' => 'form-control'], set_value('url')) ?> 
                        
                        <div class="col-5">
                            <figure class="media">
                                <oembed id="extrait_url" url="" style="width:400px; display:none;">

                                </oembed>                            
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        
                    </div>
                    <div class="col-4">
                     <?= form_submit("submit", "Télécharger", ['class' => "btn btn-sm btn-primary shadow-sm ml-3"]); ?>
                    </div>
                </div>              

                <?= form_close(); ?>
            </div>

            <!-- Content Row -->
            


            <!-- Content Row -->
            <div class="row">

            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

