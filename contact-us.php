<?php include "header.php";?>

<body>

  <!--header-->
  
  <header>

    <?php include "navigation.php";?>

  </header>
  
  <div data-scroll-container>


    <section class="" data-scroll-section>
      
      <div class="container-fluid bg-white">
        <div class="spacer-120"></div>
        <div class="spacer-40"></div>

        <div class="container">
          <h3 class="fnt-blue d-flex align-items-center">
            <img src="img/drop-yellow-en.svg" class="img-fluid fa-mar-right-20"> 
            Contact Us
          </h3>
          <div class="spacer-20"></div>

            <div class="row contactus_col" data-scroll-direction="vertical" data-scroll-repeat data-scroll-speed="3">
              
              <div class="col-md-5 remPad bg-light-white contactus-form contactus-form-responsive">  
                 <form action="">
                   <input type="text" class="form-control cu-control" placeholder="Name" />
                   <div class="spacer-10"></div>

                   <input type="tel" class="form-control cu-control" placeholder="Phone Number"/>
                   <div class="spacer-10"></div>

                   <input type="email" class="form-control cu-control" placeholder="Email"/>
                   <div class="spacer-10"></div>

                   <textarea name="" id="" cols="30" rows="10" class="form-control cu-control" placeholder="Message">
                   </textarea> 
                   <div class="spacer-10"></div>

                   <button class="btn btn-warning btn-yellow w-100">Send <i class="fa-solid fa-location-arrow"></i></button>

                 </form>
           


              </div>
              <div class="col-md-7 mapbox-container remPad  contactus-map-responsive">

                <div id="map">test</div>

              </div>

            </div>




        </div>

        <div class="spacer-40"></div>
        <div class="spacer-120"></div>
      </div>


    </section>


    <?php include "footer-page.php";?>

  </div>

  <?php include "scripts.php";?>

  <script>
    jQuery(document).ready(function(){

      mapboxgl.accessToken = 'pk.eyJ1IjoibG1jLW1pY3JvIiwiYSI6ImNscTR6bnVheTBld28yanBhYWhsanZ4YW4ifQ.hbYCxop6tcl06SEt8j0UoA';
      const map = new mapboxgl.Map({
        container: 'map',
        // Choose from Mapbox's core styles, or make your own style with Mapbox Studio
        style: 'mapbox://styles/mapbox/satellite-streets-v11',
        zoom: 1.5,
        center: [30, 50],
        projection: 'globe'
      });

      map.on('load', () => {
        // Set the default atmosphere style
        map.setFog({});
      }); 

    });
  </script>
   
  </body>
</html>