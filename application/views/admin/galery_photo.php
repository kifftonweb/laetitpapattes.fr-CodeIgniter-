 <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
        
      <!-- Main Content -->
      <div id="content">

        <?php
            include VIEWPATH . 'admin/inc/topbar.php';
        ?>

        <!-- Begin Page Content -->
        <div class="container">
           
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <i class="fas fa-download fa-sm text-white-50">
            </i>
            <?= anchor ('index', "<i class='fas fa-home fa-sm text-white-50'></i>retourner sur le site",array("class" =>"d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm")); ?>             
            
          </div>
          
          <!-- Content Row -->
          
          <div class="row">
               <div class="col-3 mt-3 mb-3">
                    
                </div>
              <div class="col-6 text-center mt-3 mb-3">
              <h1 class="h3 mb-0 text-gray-800"><?= heading($titre); ?> </h1>
              </div>
               <div class="col-3 mt-3 mb-3">
                    
                </div>
          </div>
          
          <!-- Content Row -->
          
          <h2 class="font-weight-light text-center text-lg-left mt-4 mb-0">Photos téléchargées</h2>

          <hr class="mt-2 mb-5">
          
          <div class="row text-center text-lg-left" >
          <?php 
          foreach ($photo as $value):
          if (isset($photo) && $value['type'] == 'P'){?>          
            
              <div class="col-lg-3 col-md-4 col-6">
                    
                      <img class="img-fluid img-thumbnail" src="<?php echo base_url('uploads/'.$value['slug']); ?>" style='height:250px; width:250px; border: 1px solid #ddd; position: relative;' alt="<?php $value['titre']; ?>">
                    
                  <?= anchor (array('admin','delete_media',$value['slug']),'<i class="fas fa-times"></i>',array("class"=>"position-absolute border close  btn-light text-danger","onclick"=>"return confirm('Voulez-vous vraiment supprimer cette photo?')"));?>
              </div>
              
          <?php }?>
          <?php endforeach;?>
            </div>

          <h2 class="font-weight-light text-center text-lg-left mt-4 mb-0">Vidéos téléchargées</h2>

          <hr class="mt-2 mb-5">
          <!-- Content Row -->
          <div class="row">
              
              <?php 
                foreach ($photo as $value):
                if (isset($photo) && $value['type'] == 'V' && $value['url'] ==''){?> 
                <div class="col-3">
                    
                </div>
                <div class="col-6 text-center">
                    <video width="400" controls >
                        <source src="<?php echo base_url('uploads/' . $value['slug']); ?>" type="video/mp4">
                    </video>
                </div>                
                <div class="col-3">
                    <?= anchor (array('admin','delete_media',$value['slug']),'<i class="fas fa-times"></i>',array("class"=>"position-absolute border close  btn-light text-danger","onclick"=>"return confirm('Voulez-vous vraiment supprimer cette vidéo?')"));?>
                </div>
              <?php }?>
              <?php endforeach;?>
          </div>
          
          <h2 class="font-weight-light text-center text-lg-left mt-4 mb-0">Vidéos hébergées</h2>

          <hr class="mt-2 mb-5">
          <!-- Content Row -->
          <div class="row">
              <?php 
                foreach ($photo as $value):
                if (isset($photo) && $value['type'] == 'V' && $value['url'] !==''){?> 
                    <div class="col-4">
                    
                </div>
                <div class="col-6 text-center">
                    <figure class="media">
                        <oembed id="" url="<?php echo $value['url']?>" style="width:350px;">

                        </oembed>                            
                    </figure>
                </div>                
                <div class="col">
                    <?= anchor (array('admin','delete_mediaWithUrl',$value['id']),'<i class="fas fa-times"></i>',array("class"=>"position-absolute border close  btn-light text-danger","onclick"=>"return confirm('Voulez-vous vraiment supprimer cette vidéo?')"));?>
                </div>
              <?php }?>
              <?php endforeach;?>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

     