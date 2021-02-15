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
                <?php
                $slug = $_FILES['photo_file']['name'];
                ?>
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
                 <?php if(isset ($_FILES['photo_file']['name']) && $_POST['type']==='P'){?>
                <div class="col-3">
                    
                </div>
                <div class="col-6 text-center">
                    <img class="img-fluid img-thumbnail" src="<?php echo base_url('uploads/' . $slug); ?>" style='height:250px; width:250px; border: 1px solid #ddd; border-radius: 4px; padding: 5px;' alt="Votre photo téléchargée"/>
                </div>
                
                <div class="col-3">
                    
                </div>
                <?php }?>
            </div>
            <!-- Content Row -->
                 
            <div class="row">
                <?php if(!empty ($_FILES['photo_file']['name']) && $_POST['type']==='V'){ ?>
                 <div class="col-3">
                    
                </div>
                <div class="col-6 text-center">
                    <video width="400" controls >
                        <source src="<?php echo base_url('uploads/' . $slug); ?>" type="video/mp4">
                    </video>
                </div>                
                <div class="col-3">
                    
                </div>
                <?php }?>
            </div>
            <!-- Content Row -->
            <div class="row">
                <?php if(isset ($_POST['url']) && $_POST['type']==='V'){ ?>
                <div class="col-4">
                    
                </div>
                <div class="col-6 text-center">
                    <figure class="media">
                        <oembed id="" url="<?php echo $_POST['url']?>" style="width:350px;">

                        </oembed>                            
                    </figure>
                </div>                
                <div class="col">
                    
                </div>
                <?php } ?>
            </div>
            <!-- Content Row -->
            <div class="row "> 
                <div class="col-2"></div>
                <div class="col-4 text-right mt-2">
                    <p><?php echo anchor('admin/add_photos', 'Téléchargez ou hébergez un autre média'); ?></p>
                </div>
                <div class="col-1"></div>
                <div class="col-3 text-left mt-2">
                    <p><?php echo anchor('admin/galery_photo', 'Gallerie médias'); ?></p>
                </div>
                <div class="col-2"></div>
            </div>

            <!-- Content Row -->
            <div class="row">

            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

