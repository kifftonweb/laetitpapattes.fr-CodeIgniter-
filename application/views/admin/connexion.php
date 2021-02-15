<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content" class="mb-5">
        <!-- Outer Row -->
        <div class="row justify-content-center mt-4 pt-4">

            <div class="col-xl-10 col-lg-12 col-md-9 mb-5">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <?= heading($title); ?> 
                                    </div>
                                    <?= form_open('admin/connexion', ['class' => 'form-horizontal']); ?>
                                    <?php if (!empty($login_error)): ?>
                                        <div class="form-group"> 
                                            <div class="col-md-offset-2␣col-md-10␣has-error">  
                                                <span class="help-block"><?= $login_error; ?></span>  
                                            </div>  
                                        </div> 
                                    <?php endif; ?>
                                    <div class="form-group">
                                        <div class="col-md <?= empty(form_error('username')) ? '' : 'has-error' ?>">
                                            <?= form_input(['name' => "username", 'id' => "username",'placeholder' =>"Nom d'utilisateur *",
                                            'class' => 'form-control'], set_value('username')) ?>
                                            <span class="help-block"><?= form_error('username'); ?></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md <?= empty(form_error('password')) ? '' : 'has-error' ?>">
                                            <?= form_input(['name' => "password", 'id' => "password",'placeholder' =>"Mot de passe *",
                                            'class' => 'form-control'], set_value('password')) ?>
                                            <span class="help-block"><?= form_error('password'); ?></span>
                                        </div>            
                                    </div>
                                    <div class="form-group">                                        
                                        <div class="col-md">
                                            <?= form_submit("send", "Se connecter", ['class' => "btn btn-default"]); ?> 
                                        </div>
                                    </div>
                                    <?= form_close(); ?> 
                                    <hr>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
