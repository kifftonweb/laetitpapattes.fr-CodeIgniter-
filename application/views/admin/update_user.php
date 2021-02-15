



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
                <i class="fas fa-download fa-sm text-white-50"></i>
                <?= anchor('index', "retourner sur le site", array("class" => "d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm")); ?>

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
            <div class="row">
                <?php 
                 $attributes = array(
                            'class' => "form-horizontal"
                        );
                /*$js='onSubmit="alert("Voulez-vous confirmer ces modifications ?")"';*/
                ?>
                <?= form_open('admin/update_user', $attributes)?>
                <div class="form-group row">
                    <div class="col-md <?= empty(form_error('pseudo')) ? '' : 'has-error' ?>">
                        <?php
                        $attributes = array(
                            'class' => "col-form-label"
                        );
                        echo form_label('Nouveau pseudo :','pseudo', $attributes)
                        ?>
                    </div>
                    <div class="col-md">
                        <?= form_input(['name' => "pseudo", 'id' => "pseudo", 'class' => 'form-control'], set_value('pseudo')) ?>
                        <span class="help-block text-danger"><?= form_error('pseudo'); ?></span>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md <?= empty(form_error('password')) ? '' : 'has-error' ?>">
                        <?php
                         $attributes = array(
                            'class' => "col-form-label"
                        );
                        echo form_label('Nouveau mot de passe :','password', $attributes)
                        ?>
                    </div>
                    <div class="col-md">
                        <?= form_password(['name' => "password", 'id' => "password", 'class' => 'form-control'], set_value('password')) ?>
                        <span class="help-block text-danger"><?= form_error('password'); ?></span>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-8">
                        
                    </div>
                    <div class="col-4">
                    <?php
                    $attributes=array(
                        'class' =>'btn btn-sm btn-primary shadow-sm ml-4',
                        'onClick' => "return confirm('Voulez-vous vraiment modifier vos informations de connexion ?');"
                    );
                    
                    ?>
                    <?= form_submit("send", "Soumettre",$attributes); ?>
                    </div>
                </div>
                <?= form_close(); ?>
            </div>

            <!-- Content Row -->

            <div class="row">

            </div>

            <!-- Content Row -->
            <div class="row">

            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

