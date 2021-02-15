<footer class="footer text-faded text-center py-5">
  <div class="container"> 
    <div class="row">
      <div class="col-md-4">
      <h6 class="suivi pr-3"><u>Coordonnées de contact :</u></h6>
          laetit'papattes</br>
          194 lotissement etcheverry</br>
          64310 St Pee sur Nivelle</br>
          <a href="tel:0668023051"><i class="fas fa-mobile-alt"></i> 06.68.02.30.51</a></br>    
          <i class="fas fa-envelope"></i> <?= anchor('contact', "laetitia.peral@laposte.net",array("class" =>"")); ?>          
      </div>
      <div class="col-md-4 footerMap text-center">
      <h6 class="suivi pr-3"><u>Nous situer :</u></h6>
      <div id="map">
      </div>
      </div>
      <div class="col-md-4">
        <h6 class="suivi pr-3"><u>Suivez-nous :</u></h6>
        <div class="mr-3 mb-3">
          <a class=" text-uppercase text-expanded font-weight-bold" href="https://www.facebook.com/Laetitpapattes-2079488815660324"><i class="fab fa-facebook"></i></a>
          <a class=" text-uppercase text-expanded font-weight-bold" href="#"><i class="fab fa-twitter"></i></a>
          <a class=" text-uppercase text-expanded font-weight-bold" href="#"><i class="fab fa-instagram"></i></a>
          <a class="text-uppercase text-expanded font-weight-bold" href="#"><i class="fab fa-linkedin"></i></a>
        </div>
        <h6 class="suivi pr-3"><u><?= anchor('mention_legales', "Mention légales",array("id" =>"lienML")); ?></u></h6>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <p class="m-0 small">Copyright &copy; Kifftonweb.fr</p>
      </div>
    </div>
  </div>
</footer>

  <!-- Bootstrap core JavaScript -->
  <script src="<?php echo base_url("assets/vendor/jquery/jquery.min.js") ?>"></script>  
  <script src="<?php echo base_url("assets/vendor/bootstrap/js/bootstrap.bundle.min.js") ?>"></script>
  
  <!-- Script pour reCaptcha -->
  <script async defer src="https://www.google.com/recaptcha/api.js?render=_6LfBOtUUAAAAAGuCn9zSXhf5l0WnkPcm4oPoWMO6"></script>
  
  <!-- Script pour l'API Maps -->
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAtGg-mRBf8NSHAj1Qyxqhab7pEkp1AlJY&callback=initMap">
  </script>
 
  <!-- Scripts for iframely-->
<script async charset="utf-8"
    src="//cdn.iframe.ly/embed.js" 
></script>
<script charset="utf-8" src="//cdn.iframe.ly/embed.js?api_key=0c014c1d0213e7d2c5e8a0"></script>
  
  <!-- Script pour afficher la map dans ma div -->
<script type="text/javascript">
        //Je déclare la variable map
        var map;        
        function initMap() {
            //J'initialise ma variable myLatLng avec les valeurs de latitude
            //et longitude correspondant à l'adresse de l'entreprise.
            var myLatLng={lat: 43.318643166903094, lng: -1.5981651855468781},
            //Je crée une nouvelle instance de la classe Map pour créer un nouvel objet qui définira la map.
            //Grâce à getElementById je définis l'élément dans lequel doit apparaître la carte
            map = new google.maps.Map(document.getElementById('map'), {
            //Je précise les options de ma map
            center: myLatLng,//Indique à l'API où centre la carte
            zoom: 10// Indique le niveau de zoom
          });
            //J'instancie un nouvel objet marker
            var marker = new google.maps.Marker({
            position: myLatLng,//Définit la position du marker
            map: map,//Définit la map concernée
            title: 'Nous sommes ici'//Définit l'info-bulle
          });
        }
</script>
<!-- Script pour afficher la map dans mon footer -->
<!--<script type="text/javascript">
        //Je déclare la variable map
        var mapFoot;        
        function initMap() {
            //J'initialise ma variable myLatLng avec les valeurs de latitude
            //et longitude correspondant à l'adresse de l'entreprise.
            var myLatLng={lat: 43.318643166903094, lng: -1.5981651855468781},
            //Je crée une nouvelle instance de la classe Map pour créer un nouvel objet qui définira la map.
            //Grâce à getElementById je définis l'élément dans lequel doit apparaître la carte
            mapFoot = new google.maps.Map(document.getElementById('mapFoot'), {
            //Je précise les options de ma map
            center: myLatLng,//Indique à l'API où centre la carte
            zoom: 10// Indique le niveau de zoom
          });
            //J'instancie un nouvel objet marker
            var marker = new google.maps.Marker({
            position: myLatLng,//Définit la position du marker
            map: mapFoot,//Définit la map concernée
            title: 'Nous sommes ici'//Définit l'info-bulle
          });
        }
</script> -->
<!-- Script pour calculer la distance entre le visteur et l'entreprise -->
<script type="text/javascript">
    $(window).ready(function(){
        //Script pour calculer la distance entre le visteur et l'entreprise
        //Déclaration de mes variables
        lat1=43.318643166903094;//Variable avec la latitude de l'entreprise
        lon1=-1.5981651855468781;//Variable avec la longitude de l'entreprise
        lat2=0;//Variable avec la latitude de l'utilisateur initialisée à 0
        lon2=0;//Variable avec la longitude de l'utilisateur initialisée à 0
        unit="k";// variable pour définir l'unité de mesure désirée "K"=résultat calculé en km,"N"=résultat calculé en nautic,
        navigator.geolocation.getCurrentPosition(function(position){//Récupère les coordonnées géographique du visiteur
            lat2=position.coords.latitude;//Prend la valeur retournée en latitude
            lon2=position.coords.longitude;//Prend la valeur retournée en longitude              
                if ((lat1 === lat2) && (lon1 === lon2)) {
                    return 0;
            }else{//Fonction de calcul récupérer sur internet
             radlat1 = Math.PI * lat1/180;
             radlat2 = Math.PI * lat2/180;
             theta = lon1-lon2;
             radtheta = Math.PI * theta/180;
             dist = Math.sin(radlat1) * Math.sin(radlat2) + Math.cos(radlat1) * Math.cos(radlat2) * Math.cos(radtheta);
            } if (dist > 1) {
                        dist = 1;
            }
                dist = Math.acos(dist);
                dist = dist * 180/Math.PI;
                dist = dist * 60 * 1.1515;
                if (unit==="K") {
                    dist = dist * 1.609344; //Retourne la distance en km
                }
                if (
                        unit==="N") { dist = dist * 0.8684 ;//Retourne la distance en nautic
                }
                //Repére l'élément qui a pour class "distance" gràce à document.querySelector(".distance")
                //et écrit le résultat obtenu dans cet élément grâce à .innerHTML = dist
                //Le résultat est arrondi à un chiffre aprés la virgule avec .toFixed(1)
                document.querySelector(".distance").innerHTML = dist.toFixed(1);
        });
        //Script pour iframely
         document.querySelectorAll('oembed[url]').forEach(element => {
            iframely.load(element, element.attributes.url.value);
        });
    });
</script>

</body>

</html>