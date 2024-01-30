<?php include "header.php";?>

<body>

  <!--header-->
  
  <header>

    <?php include "navigation.php";?>

  </header>
  
  <div data-scroll-container>

    <!--home banner-->
    <section id="homebanner" class="non-parallax desktop-view" style="background-image: url('img/home-banner1.jpg');" data-scroll-section>
      
      <div class="container-fluid">
        <div class="spacer-120"></div>
          <div class="container">

            <div class="row align-items-center">

              <!--home banner left-->
              <div class="col-md-6">

                <div class="row">
                  <div class="col-md-2">
                    
                    <div class="home-banner-social">
                      <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                      <a href="#"><i class="fa-brands fa-instagram"></i></a>
                      <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                      <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    </div>

                  </div>
                  <div class="col-md-10">

                    <h3 class="fnt-40 fnt-blue fnt-poppins-regular remMar">We offer products</h3>
                    <h1 class="fnt-80"><font class="fnt-blue"><b>High</b></font> <font class="fnt-is-yellow"><b>Quality</b></font></h1>

                    <div class="spacer-20"></div>

                    <div class="row">
                      <div class="col-md-3">
                        
                        <img src="img/logo2.svg" class="img-fluid w-100">
                        <div class="spacer-20"></div>

                        <a href="#" class="btn btn-warning btn-yellow w-100">Read More</a>

                      </div>
                      <div class="col-md-7">

                        <center>
                          <h2 class="fnt-brown fnt-poppins-block fnt-60 remMar fnt-is-brown"><b>1965</b></h2>
                          <h3 class="fnt-blue fnt-poppins-regular fnt-30">for a year</h3>
                        </center>

                      </div>
                    </div>

                  </div>
                </div>
                
                <div class="spacer-20"></div>
              </div>

              <!--home banner right-->
              <div class="col-md-6">

                <div class="row">
                  <div class="col-md-5"></div>
                  <div class="col-md-7">
                    <div class="teardropbox">
                      <img id="bg-teardrop" src="img/teardrop.svg" class="img-fluid w-100 pb-red">

                      <div id="teardropSLide">

                        <div class="row">
                          <div class="col-md-2"></div>
                          <div class="col-md-8">

                            <div id="teardropProducts" class="carousel slide carousel-fade" data-bs-ride="carousel">

                              <div class="carousel-inner">
                                <div class="carousel-item active" data-border="pb-red"><img src="img/products/prdct1.png" class="d-block w-100 img-fluid"></div>
                                <div class="carousel-item" data-border="pb-green"><img src="img/products/prdct2.png" class="d-block w-100 img-fluid"></div>
                                <div class="carousel-item" data-border="pb-blue"><img src="img/products/prdct3.png" class="d-block w-100 img-fluid"></div>
                                <div class="carousel-item" data-border="pb-green"><img src="img/products/prdct4.png" class="d-block w-100 img-fluid"></div>
                                <div class="carousel-item" data-border="pb-brown"><img src="img/products/prdct5.png" class="d-block w-100 img-fluid"></div>
                                <div class="carousel-item" data-border="pb-red"><img src="img/products/prdct6.png" class="d-block w-100 img-fluid"></div>
                                <div class="carousel-item" data-border="pb-blue"><img src="img/products/prdct7.png" class="d-block w-100 img-fluid"></div>
                                <div class="carousel-item" data-border="pb-red"><img src="img/products/prdct8.png" class="d-block w-100 img-fluid"></div>
                                <div class="carousel-item" data-border="pb-blue"><img src="img/products/prdct9.png" class="d-block w-100 img-fluid"></div>
                                <div class="carousel-item" data-border="pb-red"><img src="img/products/prdct10.png" class="d-block w-100 img-fluid"></div>
                                <div class="carousel-item" data-border="pb-green"><img src="img/products/prdct11.png" class="d-block w-100 img-fluid"></div>
                                <div class="carousel-item" data-border="pb-red"><img src="img/products/prdct12.png" class="d-block w-100 img-fluid"></div>
                                <div class="carousel-item" data-border="pb-brown"><img src="img/products/prdct13.png" class="d-block w-100 img-fluid"></div>
                                <div class="carousel-item" data-border="pb-red"><img src="img/products/prdct14.png" class="d-block w-100 img-fluid"></div>
                                <div class="carousel-item" data-border="pb-red"><img src="img/products/prdct15.png" class="d-block w-100 img-fluid"></div>
                                <div class="carousel-item" data-border="pb-red"><img src="img/products/prdct16.png" class="d-block w-100 img-fluid"></div>
                              </div>

                               <button class="carousel-control-prev hideThis" type="button" data-bs-target="#teardropProducts" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                              </button>
                              <button class="carousel-control-next hideThis" type="button" data-bs-target="#teardropProducts" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                              </button>                           
                            </div>                          

                          </div>
                          <div class="col-md-2"></div>
                        </div>

                          
                       
                      </div>
                    </div>
                  </div>
                </div>



                <div class="spacer-20"></div>


              </div>
            </div>

            <div class="spacer-20"></div>

            <div id="teardropThumbs" class="row carousel-indicators desktop-view">
              <div class="col"><img src="img/products/prdct1.png" class="img-fluid" data-bs-target="#teardropProducts" data-bs-slide-to="0" class="active"></div>
              <div class="col"><img src="img/products/prdct2.png" class="img-fluid" data-bs-target="#teardropProducts" data-bs-slide-to="1" class="active"></div>
              <div class="col"><img src="img/products/prdct3.png" class="img-fluid" data-bs-target="#teardropProducts" data-bs-slide-to="2" class="active"></div>
              <div class="col"><img src="img/products/prdct4.png" class="img-fluid" data-bs-target="#teardropProducts" data-bs-slide-to="3" class="active"></div>
              <div class="col"><img src="img/products/prdct5.png" class="img-fluid" data-bs-target="#teardropProducts" data-bs-slide-to="4" class="active"></div>
              <div class="col"><img src="img/products/prdct6.png" class="img-fluid" data-bs-target="#teardropProducts" data-bs-slide-to="5" class="active"></div>
              <div class="col"><img src="img/products/prdct7.png" class="img-fluid" data-bs-target="#teardropProducts" data-bs-slide-to="6" class="active"></div>
              <div class="col"><img src="img/products/prdct8.png" class="img-fluid" data-bs-target="#teardropProducts" data-bs-slide-to="7" class="active"></div>
              <div class="col"><img src="img/products/prdct9.png" class="img-fluid" data-bs-target="#teardropProducts" data-bs-slide-to="8" class="active"></div>
              <div class="col"><img src="img/products/prdct10.png" class="img-fluid" data-bs-target="#teardropProducts" data-bs-slide-to="9" class="active"></div>
              <div class="col"><img src="img/products/prdct11.png" class="img-fluid" data-bs-target="#teardropProducts" data-bs-slide-to="10" class="active"></div>
              <div class="col"><img src="img/products/prdct12.png" class="img-fluid" data-bs-target="#teardropProducts" data-bs-slide-to="11" class="active"></div>
              <div class="col"><img src="img/products/prdct13.png" class="img-fluid" data-bs-target="#teardropProducts" data-bs-slide-to="12" class="active"></div>
              <div class="col"><img src="img/products/prdct14.png" class="img-fluid" data-bs-target="#teardropProducts" data-bs-slide-to="13" class="active"></div>
              <div class="col"><img src="img/products/prdct15.png" class="img-fluid" data-bs-target="#teardropProducts" data-bs-slide-to="14" class="active"></div>
              <div class="col"><img src="img/products/prdct16.png" class="img-fluid" data-bs-target="#teardropProducts" data-bs-slide-to="15" class="active"></div>
            </div>
            

            
          </div>

          <div class="spacer-80"></div>
      </div>
      
    </section>

    <!--about us-->
    <section id="aboutus" class="desktop-view" style="min-height: 50vh;" data-scroll-section>
      

      <div class="container-fluid bg-light-blue">
        <div class="spacer-120"></div>
        
          <div class="container" data-scroll data-scroll-repeat data-scroll-direction="vertical" data-scroll-speed="3">
            <div class="row align-items-center">
              
              <div class="col-md-5">

                <h3 class="fnt-white d-flex align-items-center">
                  <img src="img/drop-yellow-en.svg" class="img-fluid fa-mar-right-20"> 
                  About Us
                </h3>
                <div class="spacer-20"></div>

                <p class="fnt-white">Lorem ipsum dolor sit amet consectetur. Ac lacus ac felis lacus enim nunc. Iaculis enim ipsum egestas viverra lacus mauris pellentesque id. A mauris consectetur ante vitae. Consectetur duis id egestas elit curabitur amet sed at. Varius auctor velit condimentum amet arcu.</p>
                <div class="spacer-20"></div>

                <div class="row">
                  <div class="col-md-4">
                    <a href="#" class="btn btn-warning btn-yellow w-100">Read More</a>
                  </div>
                  <div class="col-md-8"></div>
                </div>
                <div class="spacer-20"></div>

                <div class="row">
                  <div class="col-md-6">
                      <a href="" class="fnt-white d-flex align-items-center fnt-20">
                        <i class="fa-solid fa-book fnt-yellow fa-mar-right"></i>
                        Company Cataloge
                      </a>
                    <div class="spacer-20"></div>
                  </div>

                  <div class="col-md-6">

                      <a href="" class="fnt-white d-flex align-items-center fnt-20">
                        <i class="fa-solid fa-file fnt-yellow fa-mar-right"></i>
                        Company File
                      </a>
                    <div class="spacer-20"></div>
                  </div>
                </div>
                
                
                <div class="spacer-20"></div>
              </div>

              <div class="col-md-1"></div>

              <div class="col-md-6">

                 
                   <video id="background-video" autoplay="" loop="" muted="" class="w-100 bordered-shadow">
                      <source src="vid/home-about.mov" type="video/mp4">
                    </video>  


                <div class="spacer-20"></div>
              </div>


            </div>
          </div>

        <div class="spacer-120"></div>

        <!--floating details-->
        
      <div id="floating-details" class="container-fluid" data-scroll data-scroll-direction="vertical" data-scroll-speed="3" data-scroll-call="triggerCounter">
        <div class="container bordered-shadow">

          <div class="row">
            <div class="col-md-2"></div>

            <div class="col-md-2">
                <div class="spacer-40"></div>
                  <center>  
                      <i class="fd-icon fa-solid fa-users fnt-brown"></i>
                      <p class="fd-count fnt-blue remMar counter" data-from="0" data-to="100" data-speed="5000" data-refresh-interval="50">0</p>
                      <p class="fd-type fnt-blue remMar">Employee</p>
                  </center>
               <div class="spacer-40"></div>
            </div>

            <div class="col-md-2">
               <div class="spacer-40"></div>
                  <center>  
                      <i class="fd-icon fa-solid fa-archway fnt-brown"></i>
                      <p class="fd-count fnt-blue remMar counter" data-from="0" data-to="100" data-speed="4000" data-refresh-interval="50">0</p>
                      <p class="fd-type fnt-blue remMar">Client</p>
                  </center>

               <div class="spacer-40"></div>
            </div>

            <div class="col-md-2">
               <div class="spacer-40"></div>
                  <center>  
                      <i class="fd-icon fa-solid fa-boxes-stacked fnt-brown"></i>
                      <p class="fd-count fnt-blue remMar counter" data-from="0" data-to="100" data-speed="6000" data-refresh-interval="50">0</p>
                      <p class="fd-type fnt-blue remMar">Type</p>
                  </center>

               <div class="spacer-40"></div>
            </div>

            <div class="col-md-2">
               <div class="spacer-40"></div>
                  <center>  
                      <i class="fd-icon fa-solid fa-award fnt-brown"></i>
                      <p class="fd-count fnt-blue remMar counter" data-from="0" data-to="100" data-speed="7000" data-refresh-interval="50">0</p>
                      <p class="fd-type fnt-blue remMar">Our Brands</p>
                  </center>

               <div class="spacer-40"></div>
            </div>

            <div class="col-md-2"></div>
          </div>
          
        </div>
    
      </div>     
      </div>

    </section>

    <!--products-->
    <section id="products" class="parallax desktop-view" data-scroll-section> 
      <div class="spacer-120"></div>

      <div class="container" data-scroll data-scroll-repeat data-scroll-direction="vertical" data-scroll-speed="3">
        <div class="row">
          <div class="col-md-6">

            <div class="spacer-120"></div>
            <h3 class="fnt-blue d-flex align-items-center">
              <img src="img/drop-yellow-en.svg" class="img-fluid fa-mar-right-20"> 
              Departments and Products
            </h3>
            <div class="spacer-100"></div>

            <div class="row">
              <div class="col-md-6">
                <a href="">
                  <center>
                    <img src="img/icons/prod-nonfood.svg" class="img-fluid prod-img">
                    <div class="spacer-10"></div>
                    <p class="fnt-blue fnt-25"><b>Non-Food Products</b></p>
                  </center>
                </a>
              </div>

              <div class="col-md-6">
                <a href="">
                  <center>
                    <img src="img/icons/prod-food.svg" class="img-fluid prod-img">
                    <div class="spacer-10"></div>
                    <p class="fnt-blue fnt-25"><b>Food Products</b></p>
                  </center>
                </a>
              </div>

              <div class="col-md-3"></div>
              <div class="col-md-6">
                <a href="">
                  <center>
                    <img src="img/icons/prod-pet.svg" class="img-fluid prod-img">
                    <div class="spacer-10"></div>
                    <p class="fnt-blue fnt-25"><b>Pet Products</b></p>
                  </center>
                </a>
              </div>
              <div class="col-md-3"></div>
            </div>

          </div>
          <div class="col-md-6">

            <div class="prod-float" data-scroll data-scroll-direction="vertical" data-scroll-speed="5">
              <img src="img/home-products-bg-en.svg" class="img-fluid" >
            </div>
            

          </div>
        </div>

      </div>

      <div class="spacer-120"></div>
    
    </section>

    <!--services-->
    <section id="services" class="non-parallax desktop-view" style="background-image: url('img/home-services-bg.jpg');" data-scroll-section>
      <div class="spacer-120"></div>

      <div class="container" data-scroll-direction="vertical" data-scroll-repeat data-scroll-speed="3">
        <h3 class="fnt-white d-flex align-items-center">
          <img src="img/drop-yellow-en.svg" class="img-fluid fa-mar-right-20"> 
          Services
        </h3>
        <div class="spacer-20"></div>

        <div class="row">
          <div class="col-md-3"></div>
          <div class="col-md-6">
            <div class="spacer-40"></div>

            <div class="services-gallery">

              <div class="service-items services-header active" id="serv-0">

                <div class="top">
                  <img src="img/services-plate.svg" alt="">
                </div>
                <div class="bottom">

                  <h4 class="fnt-blue">Catering</h4>
                  <p class="fnt-blue fnt-20">Lorem ipsum dolor sit amet consectetur. Ut volutpat dui elit rhoncus faucibus. Aliquam lacus lectus et auctor urna magna in.</p>
                  <div class="spacer-40"></div>

                  <div class="row">
                    <div class="col-md-4">
                      
                      <a href="#" class="btn btn-warning btn-yellow w-100">Read More</a>

                    </div>
                    <div class="col-md-8"></div>

                  </div>

                </div>

              </div>

              <div class="service-items services-header" id="serv-1">
                
                <div class="top">
                  <img src="img/services-plate.svg" alt="">
                </div>
                <div class="bottom">

                  <h4 class="fnt-blue">Suppliers</h4>
                  <p class="fnt-blue fnt-20">Lorem ipsum dolor sit amet consectetur. Ut volutpat dui elit rhoncus faucibus. Aliquam lacus lectus et auctor urna magna in.</p>
                  <div class="spacer-40"></div>

                  <div class="row">
                    <div class="col-md-4">
                      
                      <a href="#" class="btn btn-warning btn-yellow w-100">Read More</a>

                    </div>
                    <div class="col-md-8"></div>

                  </div>

                </div>

              </div>

              <div class="service-items services-header" id="serv-2">
                
                <div class="top">
                  <img src="img/services-plate.svg" alt="">
                </div>
                <div class="bottom">

                  <h4 class="fnt-blue">Supermarket</h4>
                  <p class="fnt-blue fnt-20">Lorem ipsum dolor sit amet consectetur. Ut volutpat dui elit rhoncus faucibus. Aliquam lacus lectus et auctor urna magna in.</p>
                  <div class="spacer-40"></div>

                  <div class="row">
                    <div class="col-md-4">
                      
                      <a href="#" class="btn btn-warning btn-yellow w-100">Read More</a>

                    </div>
                    <div class="col-md-8"></div>

                  </div>

                </div>

              </div> 

              <div class="service-items services-header" id="serv-3">
                
                <div class="top">
                  <img src="img/services-plate.svg" alt="">
                </div>
                <div class="bottom">

                  <h4 class="fnt-blue">Hotels and Restaurants</h4>
                  <p class="fnt-blue fnt-20">Lorem ipsum dolor sit amet consectetur. Ut volutpat dui elit rhoncus faucibus. Aliquam lacus lectus et auctor urna magna in.</p>
                  <div class="spacer-40"></div>

                  <div class="row">
                    <div class="col-md-4">
                      
                      <a href="#" class="btn btn-warning btn-yellow w-100">Read More</a>

                    </div>
                    <div class="col-md-8"></div>

                  </div>

                </div>

              </div>

              <div class="service-items services-header" id="serv-4">
                
                <div class="top">
                  <img src="img/services-plate.svg" alt="">
                </div>
                <div class="bottom">

                  <h4 class="fnt-blue">Family Products</h4>
                  <p class="fnt-blue fnt-20">Lorem ipsum dolor sit amet consectetur. Ut volutpat dui elit rhoncus faucibus. Aliquam lacus lectus et auctor urna magna in.</p>
                  <div class="spacer-40"></div>

                  <div class="row">
                    <div class="col-md-4">
                      
                      <a href="#" class="btn btn-warning btn-yellow w-100">Read More</a>

                    </div>
                    <div class="col-md-8"></div>

                  </div>

                </div>

              </div>             
              
            </div>

                              

          </div>
          <div class="col-md-3"></div>
        </div>

        <div class="spacer-80"></div>

        <div class="services-thumbs">

          <div class="row">

            <div class="item-thumb col">
              <center>
                <a href="" onClick="return false;" data-thumb="serv-0">
                  <img src="img/services/service0.jpg" class="img-fluid">
                </a>
                <p class="caption fnt-white">Catering</p>
              </center>
            </div>

            <div class="item-thumb col">
              <center>
                <a href="" onClick="return false;" data-thumb="serv-1">
                  <img src="img/services/service1.jpg" class="img-fluid">
                </a>
                <p class="caption fnt-white">Suppliers</p>
              </center>
            </div> 

            <div class="caption item-thumb col">
              <center>
                <a href="" onClick="return false;" data-thumb="serv-2">
                  <img src="img/services/service2.jpg" class="img-fluid">
                </a>
                <p class="caption fnt-white">Supermarket</p>
              </center>
            </div> 

            <div class="item-thumb col">
              <center>
                <a href="" onClick="return false;" data-thumb="serv-3">
                  <img src="img/services/service3.jpg" class="img-fluid">
                </a>
                <p class="caption fnt-white">Hotels and Restaurants</p>
              </center>
            </div>

            <div class="item-thumb col">
              <center>
                <a href="" onClick="return false;" data-thumb="serv-4">
                  <img src="img/services/service4.jpg" class="img-fluid">
                </a>
                <p class="caption fnt-white">Family Products</p>
              </center>
            </div>                                        

          </div>
          
        </div>
      </div>


      <div class="spacer-120"></div>
    </section>


    <?php include "footer-home.php";?>

  </div>

  <?php include "scripts.php";?>

  <script>
    jQuery(document).ready(function(){

      var myCarousel = document.getElementById('teardropProducts');
      myCarousel.addEventListener('slid.bs.carousel', function (e) {

        var lastClass = jQuery('#bg-teardrop').attr('class').split(' ').pop();
        jQuery('#bg-teardrop').removeClass(lastClass);

        var getActive = jQuery(".active", e.target).attr("data-border");
        jQuery('#bg-teardrop').addClass(getActive);
        //console.log(getActive);
      });

      jQuery(".item-thumb a").each(function(){

        jQuery(this).on("click touch",function(){
          var getDataServ = jQuery(this).attr("data-thumb");
          console.log(getDataServ);

          jQuery(".service-items").removeClass("active");
          jQuery("#"+getDataServ+"").addClass(" active");
        });

      }); 

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