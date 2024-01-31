<?php include "header.php";?>

<body>

  <!--header-->
  
  <header>
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" type="text/css" href="service.css">
    <?php include "navigation.php";?>

  </header>
  
  <div data-scroll-container>


    <section class="non-vh  posRel-zIndex" data-scroll-section>
      
      <div class="container-fluid bg-white">
        <div class="spacer-120 d-none d-sm-block"></div>
        <div class="spacer-40"></div>

        <div class="container">
          <h3 class="fnt-blue d-flex align-items-center justify-content-center justify-content-md-start">
            <img src="img/drop-yellow-en.svg" class="img-fluid fa-mar-right-20"> 
           Services
          </h3>
          <div class="spacer-20"></div>

          <div class="services-thumbs services-inner">

            <div class="row d-md-none">
            <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner ">
                  <div class="carousel-item active position-relative"
                    <center>
                      <a href="" data-bs-target="#servicesCarousel" data-bs-slide-to="0">
                        <img src="img/services/service0.jpg" class="img-fluid serviceCaptionImg ">
                      </a>

                      <p class="serviceCaptionText fnt-white position-absolute ">Catering</p>
                    </center>
                  </div>
                  <div class="carousel-item "
                    <center>
                      <a href="" data-bs-target="#servicesCarousel" data-bs-slide-to="1">
                        <img src="img/services/service1.jpg" class="img-fluid serviceCaptionImg ">
                      </a>
                      <p class="serviceCaptionText fnt-white position-absolute ">Suppliers</p>
                    </center>
                  </div>
                  <div class="carousel-item "
                    <center>
                      <a href="" data-bs-target="#servicesCarousel" data-bs-slide-to="2">
                        <img src="img/services/service2.jpg" class="img-fluid serviceCaptionImg ">
                      </a>
                      <p class="serviceCaptionText fnt-white position-absolute ">Supermarket</p>
                    </center>
                  </div>
                  <div class="carousel-item "
                    <center>
                      <a href="" data-bs-target="#servicesCarousel" data-bs-slide-to="3">
                        <img src="img/services/service3.jpg" class="img-fluid serviceCaptionImg ">
                      </a>
                      <p class="serviceCaptionHotel fnt-white position-absolute ">Hotels and Restaurants</p>
                    </center>
                  </div>
                  <div class="carousel-item "
                    <center>
                      <a href="" data-bs-target="#servicesCarousel" data-bs-slide-to="4">
                        <img src="img/services/service4.jpg" class="img-fluid serviceCaptionImg ">
                      </a>
                      <p class="caption serviceCaptionText captionFamily fnt-white position-absolute">Family Products</p>
                    </center>
                  </div>
                  
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            </div>
            <div class="row d-none d-md-flex">

              <div class="item-thumb col">
                <center>
                  <a href="" data-bs-target="#servicesCarousel" data-bs-slide-to="0">
                    <img src="img/services/service0.jpg" class="img-fluid serviceCaptionImg serviceCaptionImg">
                  </a>
                  <p class="caption serviceCaptionText fnt-white serviceCaption serviceCaptionTextText">Catering</p>
                </center>
              </div>

              <div class="item-thumb col">
                <center>
                  <a href="" data-bs-target="#servicesCarousel" data-bs-slide-to="1">
                    <img src="img/services/service1.jpg" class="img-fluid serviceCaptionImg">
                  </a>
                  <p class="caption serviceCaptionText fnt-white">Suppliers</p>
                </center>
              </div> 

              <div class="caption serviceCaptionText item-thumb col">
                <center>
                  <a href="" data-bs-target="#servicesCarousel" data-bs-slide-to="2">
                    <img src="img/services/service2.jpg" class="img-fluid serviceCaptionImg">
                  </a>
                  <p class="caption serviceCaptionText fnt-white">Supermarket</p>
                </center>
              </div> 

              <div class="item-thumb col">
                <center>
                  <a href="" data-bs-target="#servicesCarousel" data-bs-slide-to="3" data-thumb="serv-3">
                    <img src="img/services/service3.jpg" class="img-fluid serviceCaptionImg">
                  </a>
                  <p class="caption serviceCaptionText fnt-white">Hotels and Restaurants</p>
                </center>
              </div>

              <div class="item-thumb col">
                <center>
                  <a href="" data-bs-target="#servicesCarousel" data-bs-slide-to="4" data-thumb="serv-4">
                    <img src="img/services/service4.jpg" class="img-fluid serviceCaptionImg">
                  </a>
                  <p class="caption serviceCaptionText fnt-white">Family Products</p>
                </center>
              </div>                                        

            </div>
            
          </div>          


        </div>

      </div>

    </section>

    <section class="" data-scroll-section>

      <div class="container-fluid">
        <div class="spacer-120"></div>

        <div class="container">

          <div id="servicesCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">

              <div class="carousel-item posRel active" data-bs-interval="10000">
                <div class="row">
                  <div class="col-md-6 text-center text-sm-start">
                    <h4 class="fnt-blue d-flex align-items-center justify-content-center justify-content-sm-start">
                      <img src="img/drop-yellow-en.svg" class="img-fluid fa-mar-right-20"> 
                     Catering
                    </h4>
                    <div class="spacer-20"></div>
                    <p>Lorem ipsum dolor sit amet consectetur. Egestas mauris mi nulla sed varius sit libero massa. Ipsum ut pellentesque quisque mi. Consectetur volutpat molestie odio lectus semper dignissim diam.</p>

                     <p>Lorem ipsum dolor sit amet consectetur. Egestas mauris mi nulla sed varius sit libero massa. Ipsum ut pellentesque quisque mi. Consectetur volutpat molestie odio lectus semper dignissim diam.</p>

                      <p>Lorem ipsum dolor sit amet consectetur. Egestas mauris mi nulla sed varius sit libero massa. Ipsum ut pellentesque quisque mi. Consectetur volutpat molestie odio lectus semper dignissim diam.</p>
                  </div>
                  <div class="col-md-6  sideMenu">
                    <img src="img/services/menu1-en.png" class="d-block w-100">
                  </div>
                </div>
              </div>

              <div class="carousel-item posRel" data-bs-interval="10000">
                <div class="row">
                  <div class="col-md-6 text-center text-sm-start">
                    <h4 class="fnt-blue d-flex align-items-center justify-content-center justify-content-sm-start">
                      <img src="img/drop-yellow-en.svg" class="img-fluid fa-mar-right-20"> 
                     Suppliers
                    </h4>
                    <div class="spacer-20"></div>
                    <p>Lorem ipsum dolor sit amet consectetur. Egestas mauris mi nulla sed varius sit libero massa. Ipsum ut pellentesque quisque mi. Consectetur volutpat molestie odio lectus semper dignissim diam.</p>

                     <p>Lorem ipsum dolor sit amet consectetur. Egestas mauris mi nulla sed varius sit libero massa. Ipsum ut pellentesque quisque mi. Consectetur volutpat molestie odio lectus semper dignissim diam.</p>

                      <p>Lorem ipsum dolor sit amet consectetur. Egestas mauris mi nulla sed varius sit libero massa. Ipsum ut pellentesque quisque mi. Consectetur volutpat molestie odio lectus semper dignissim diam.</p>                    
                  </div>
                  <div class="col-md-6  sideMenu">
                   <img src="img/services/menu2-en.png" class="d-block w-100" >
                  </div>
                </div>
              </div>

              <div class="carousel-item posRel" data-bs-interval="10000">
                <div class="row">
                  <div class="col-md-6 text-center text-sm-start">
                    <h4 class="fnt-blue d-flex align-items-center justify-content-center justify-content-sm-start">
                      <img src="img/drop-yellow-en.svg" class="img-fluid fa-mar-right-20"> 
                     Supermarket
                    </h4>
                    <div class="spacer-20"></div>
                    <p>Lorem ipsum dolor sit amet consectetur. Egestas mauris mi nulla sed varius sit libero massa. Ipsum ut pellentesque quisque mi. Consectetur volutpat molestie odio lectus semper dignissim diam.</p>

                     <p>Lorem ipsum dolor sit amet consectetur. Egestas mauris mi nulla sed varius sit libero massa. Ipsum ut pellentesque quisque mi. Consectetur volutpat molestie odio lectus semper dignissim diam.</p>

                      <p>Lorem ipsum dolor sit amet consectetur. Egestas mauris mi nulla sed varius sit libero massa. Ipsum ut pellentesque quisque mi. Consectetur volutpat molestie odio lectus semper dignissim diam.</p>                          
                  </div>
                  <div class="col-md-6 posRel sideMenu">
                   <img src="img/services/menu1-en.png" class="d-block w-100" >
                  </div>
                </div>
              </div>

              <div class="carousel-item  posRel" data-bs-interval="10000">
                <div class="row">
                  <div class="col-md-6 text-center text-sm-start">
                    <h4 class="fnt-blue d-flex align-items-center justify-content-center justify-content-sm-start">
                      <img src="img/drop-yellow-en.svg" class="img-fluid fa-mar-right-20"> 
                     Hotels and Restaurants
                    </h4>
                    <div class="spacer-20"></div>
                    <p>Lorem ipsum dolor sit amet consectetur. Egestas mauris mi nulla sed varius sit libero massa. Ipsum ut pellentesque quisque mi. Consectetur volutpat molestie odio lectus semper dignissim diam.</p>

                     <p>Lorem ipsum dolor sit amet consectetur. Egestas mauris mi nulla sed varius sit libero massa. Ipsum ut pellentesque quisque mi. Consectetur volutpat molestie odio lectus semper dignissim diam.</p>

                      <p>Lorem ipsum dolor sit amet consectetur. Egestas mauris mi nulla sed varius sit libero massa. Ipsum ut pellentesque quisque mi. Consectetur volutpat molestie odio lectus semper dignissim diam.</p>                          
                  </div>
                  <div class="col-md-6 sideMenu">
                    <img src="img/services/menu2-en.png" class="d-block w-100">
                  </div>
                </div>
              </div>

              <div class="carousel-item posRel" data-bs-interval="10000">
                <div class="row">
                  <div class="col-md-6 text-center text-sm-start">
                    <h4 class="fnt-blue d-flex align-items-center justify-content-center justify-content-sm-start">
                      <img src="img/drop-yellow-en.svg" class="img-fluid fa-mar-right-20"> 
                     Family Products
                    </h4>
                    <div class="spacer-20"></div>
                    <p>Lorem ipsum dolor sit amet consectetur. Egestas mauris mi nulla sed varius sit libero massa. Ipsum ut pellentesque quisque mi. Consectetur volutpat molestie odio lectus semper dignissim diam.</p>

                     <p>Lorem ipsum dolor sit amet consectetur. Egestas mauris mi nulla sed varius sit libero massa. Ipsum ut pellentesque quisque mi. Consectetur volutpat molestie odio lectus semper dignissim diam.</p>

                      <p>Lorem ipsum dolor sit amet consectetur. Egestas mauris mi nulla sed varius sit libero massa. Ipsum ut pellentesque quisque mi. Consectetur volutpat molestie odio lectus semper dignissim diam.</p>                          
                  </div>
                  <div class="col-md-6 sideMenu">
                   <img src="img/services/menu1-en.png" class="d-block w-100">
                  </div>
                </div>
              </div>                            
            </div>
            <div class="hideThis">
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
          
        </div>  

        <div class="spacer-120"></div>
      </div>
      
    </section>

    <section  class="non-parallax  posRel-zIndex servicesendSlider" style="background-image: url('img/home-services-bg.jpg')" data-scroll-section>

      <div class="spacer-120 "></div>

      <div class="container">

        <div id="services-slider" class="owl-carousel">
          
          <div class="slide-item">
            <img src="img/services/slide-1.jpg" class="img-fluid br-rad-shadowed">
          </div>

          <div class="slide-item">
            <img src="img/services/slide-2.jpg" class="img-fluid br-rad-shadowed">
          </div>

          <div class="slide-item">
            <img src="img/services/slide-3.jpg" class="img-fluid br-rad-shadowed">
          </div>  

          <div class="slide-item">
            <img src="img/services/slide-2.jpg" class="img-fluid br-rad-shadowed">
          </div>                      

        </div>
        <!-- <div class="spacer-20"></div> -->


      </div>

      <div class="spacer-120 "></div>
    </section>


    <?php include "footer-page.php";?>

  </div>

  <?php include "scripts.php";?>

  <script>
    jQuery(document).ready(function(){

      jQuery('#services-slider').owlCarousel({
        loop: true,
        dots: false,
        responsiveClass: true,
        autoplay: true,
        navText: ["<i class='fa fa-chevron-left fnt-yellow fnt-30'></i>","<i class='fa fa-chevron-right fnt-yellow fnt-30'></i>"],
        nav: true,
        responsive: {
          0: {
            items: 1,
            nav: true,
          },
          600: {
            items: 2,
            nav: true
          },
          1000: {
            items: 3,
            nav: true,
            loop: true,
            margin: 20,
          }
        }
      });      

       

    });
  </script>
   
  </body>
</html>