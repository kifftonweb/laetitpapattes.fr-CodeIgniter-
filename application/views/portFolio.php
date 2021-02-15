 <!-- Page Content -->
<div class="container">

  <h1 class="titrePage d-none text-center text-uppercase mt-3">Réalisations</h1>
    <div class="product-item-title d-flex mt-3">
        <div class="bg-faded p-5 d-flex mr-lg-auto mr-md-auto m-auto rounded">
          <h2 class="section-heading mb-0">
            <!-- <span class="section-heading-upper">Blended to Perfection</span> -->
            <span class="section-heading-lower">En photos</span>
          </h2>
        </div>
      </div>
  <hr class="mt-2 mb-5">

  <div class="row text-center text-lg-left">

    <?php 
          foreach ($photo as $value):
          if (isset($photo) && $value['type'] == 'P'){?>          
            
              <div class="col-lg-3 col-md-4 col-6">
                    <div class="d-block mb-4 h-100">
                      <img class="img-fluid img-thumbnail" src="<?php echo base_url('uploads/'.$value['slug']); ?>" style='height:250px; width:250px;' alt="<?php $value['titre']; ?>">
                    </div>
                 
              </div>
              
          <?php }?>
          <?php endforeach;?>
      
  </div>
  <div class="product-item-title d-flex mt-3">
        <div class="bg-faded p-5 d-flex ml-lg-auto ml-md-auto m-auto rounded">
          <h2 class="section-heading mb-0">
            <!-- <span class="section-heading-upper">Blended to Perfection</span> -->
            <span class="section-heading-lower">En vidéos</span>
          </h2>
        </div>
      </div>
  <hr class="mt-2 mb-5">

 <!-- Content Row -->
          <div class="row text-center text-lg-left">
              
              <?php 
                foreach ($photo as $value):
                if (isset($photo) && $value['type'] == 'V' && $value['url'] ==''){?> 
                
                <div class="col-lg-4 col-md-6 col-12 text-center">
                    <video width="100%" controls d-block>
                        <source src="<?php echo base_url('uploads/' . $value['slug']); ?>" type="video/mp4">
                    </video>
                </div>                
                
                <?php }  elseif (isset($photo) && $value['type'] == 'V' && $value['url'] !==''){ ?>
                  <div class="col-lg-4 col-md-6 col-12 text-center">
                    <figure class="media">
                        <oembed id="" url="<?php echo $value['url']?>" style="width:100%">

                        </oembed>                            
                    </figure>
                </div>     
             <?php } ?>
              <?php endforeach;?>
          </div>
<!-- /.container --> 
</div>

