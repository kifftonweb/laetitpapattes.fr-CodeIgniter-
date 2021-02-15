<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Prêt à partir?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Selectionnez "Déconnexion" si vous voulez mettre fin à la session</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Annuler</button>
                <a class="btn btn-primary" href="<?php echo base_url("admin/deconnexion") ?>">Déconnexion</a>
            </div>
        </div>
    </div>
</div>


<!-- Bootstrap core JavaScript-->
<script src="<?php echo base_url("assets/vendor/jquery/jquery.min.js"); ?>"></script>
<script src="<?php echo base_url("assets/vendor/bootstrap/js/bootstrap.bundle.min.js"); ?>"></script>

<!-- Core plugin JavaScript-->
<script src="<?php echo base_url("assets/vendor/jquery-easing/jquery.easing.min.js"); ?>"></script>

<!-- Custom scripts for all pages-->
<script src="<?php echo base_url("assets/js/sb-admin-2.min.js"); ?>"></script>
<script src="<?php echo base_url("assets/js/jquery-3.2.1.min.js"); ?>"></script>

<!-- Scripts for ckeditor-->


<script type='text/javascript' src='https://code.jquery.com/jquery-1.9.1.js'></script>

<!-- Scripts for ckfinder-->



<!-- Scripts for iframely-->
<script async charset="utf-8"
    src="//cdn.iframe.ly/embed.js" 
></script>
<script charset="utf-8" src="//cdn.iframe.ly/embed.js?api_key=0c014c1d0213e7d2c5e8a0"></script>

<!-- Scripts for datatables-->
<script src="<?php echo base_url("assets/vendor/datatables/jquery.dataTables.min.js"); ?>"></script>
<script src="<?php echo base_url("assets/vendor/datatables/dataTables.bootstrap4.min.js"); ?>"></script>
<script src="<?php echo base_url("assets/vendor/datatables/data_table.js"); ?>"></script>
<script type='text/javascript'>
    $(window).load(function () {
        
        document.querySelectorAll('oembed[url]').forEach(element => {
            iframely.load(element, element.attributes.url.value);
        });
        
        function typeImg() {
            $contain = '#extrait_img';    
            $('.lgd_video').css('display','none');
            $('#lgd_img').css('display', 'block');
            $('#media_file').css('display', 'block');
            $('#url_file').css('display', 'none');
        }

        $("#photos").change(function () {
            typeImg();
        });

        function typeVid() {
            $contain = '#extrait';
            $('#lgd_img').css('display', 'none');
            $('.lgd_video').css('display','block');
            $('#media_file').css('display', 'block');
            $('#url_file').css('display', 'block');
        }

        $("#videos").change(function () {
            typeVid();
        });

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    if ($contain === '#extrait') {                        
                        $('#extrait').attr('src', e.target.result).css('display', 'block');
                        $('#extrait_img').attr('src', e.target.result).css('display', 'none');
                    } else if ($contain === '#extrait_img') {
                        $('#extrait_img').attr('src', e.target.result).css('display', 'block');
                        $('#extrait').attr('src', e.target.result).css('display', 'none');
                    }
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#photo_file").change(function () {
            $('#extrait_url').css('display', 'none');
            readURL(this);
        });
        
        
        
        $("#url").change(function(event){
             $url=event.target.value;
             $('#extrait').css('display', 'none');
             $('#extrait_url').attr('url',$url).css('display', 'block');
            document.querySelectorAll('oembed[url]').forEach(element => {
            iframely.load(element, element.attributes.url.value);
        });
        });
    });

</script> 


</body>

</html>


