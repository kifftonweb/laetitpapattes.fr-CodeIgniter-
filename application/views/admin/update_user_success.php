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
                <div class="col-3 mt-3 mb-3">
                    
                </div>
                <div class="col-6 text-center mt-3 mb-3">
                    <h1 class="h3 mb-0 text-gray-800"><?= heading($title); ?> </h1>
                </div>
                <div class="col-3 mt-3 mb-3">
                    
                </div>
            </div>
            <!-- Content Row -->
           
            <div class="row">
            <div class="col-3 mt-3 mb-3">
                    
            </div>
            <div class="col-6 text-center mt-3 mb-3">
            <p>Vous devez vous reconnecter pour valider vos nouvelles informations de connexion</p>
            <?= anchor('admin/deconnexion', "<i class='fas fa-sign-out-alt fa-sm text-white-50'></i>Déconnexion", array("class" => "d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm", "data-toggle" => "modal", "data-target"=>"#logoutModal")); ?> 
            </div>
            <div class="col-3 mt-3 mb-3">
                    
            </div>
            </div>
            <!-- Content Row -->
                 
            <div class="row">
                
            </div>
            <!-- Content Row -->
            <div class="row">
                
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

