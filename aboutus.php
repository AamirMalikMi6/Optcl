<?php include "header.php";?>

<body>

  <!--header-->
  
  <header>

    <?php include "navigation.php";?>

  </header>
  
  <div data-scroll-container>

  	<!--header-->
    <section class="desktop-view" data-scroll-section>
      

      <div class="container-fluid bg-white">
        <div class="spacer-120"></div>
        <div class="spacer-120"></div>
        
          <div class="container" data-scroll data-scroll-repeat data-scroll-direction="vertical" data-scroll-speed="3">
            <div class="row align-items-center">
              
              <div class="col-md-5">

                <h3 class="fnt-blue d-flex align-items-center">
                  <img src="img/drop-yellow-en.svg" class="img-fluid fa-mar-right-20"> 
                  About Us
                </h3>
                <div class="spacer-20"></div>

                <p class="fnt-blue">Lorem ipsum dolor sit amet consectetur. Ac lacus ac felis lacus enim nunc. Iaculis enim ipsum egestas viverra lacus mauris pellentesque id. A mauris consectetur ante vitae. Consectetur duis id egestas elit curabitur amet sed at. Varius auctor velit condimentum amet arcu.</p>
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
     
      </div>

    </section>

    <section class="non-parallax desktop-view posRel" style="min-height: 50vh;" data-scroll-section>
    
    	<div class="container-fluid bg-light-blue">
    		<div class="spacer-120"></div>

    		<div class="container" data-scroll data-scroll-repeat data-scroll-direction="horizontal" data-scroll-speed="3">
	    		<div class="row">
	    			<div class="col-md-4"></div>

	    			<div class="col-md-4">

					<h3 class="fnt-white d-flex align-items-center">
	                  <img src="img/drop-yellow-en.svg" class="img-fluid fa-mar-right-20"> 
	                  Our Mission
	                </h3>
	                <div class="spacer-20"></div>

	                <p class="fnt-white">Lorem ipsum dolor sit amet consectetur. Ac lacus ac felis lacus enim nunc. Iaculis enim ipsum egestas viverra lacus mauris pellentesque id. A mauris consectetur ante vitae. Consectetur duis id egestas elit curabitur amet sed at. Varius auctor velit condimentum amet arcu.</p>
	                <div class="spacer-20"></div>
	    				
	    			</div>

	    			<div class="col-md-4"></div>
	    		</div>
    		</div>

        	<div class="aboutus-float-right" data-scroll data-scroll-direction="vertical" data-scroll-speed="5">
              <img src="img/aboutus-right.svg" class="img-fluid" >
            </div>

    		<div class="spacer-120"></div>
    	</div>
    	
    </section>

    <section class="non-parallax desktop-view" style="min-height: 50vh;" data-scroll-section>
    	
    	<div class="container-fluid bg-light-white">
    		<div class="spacer-120"></div>

    		<div class="container" data-scroll data-scroll-repeat data-scroll-direction="horizontal" data-scroll-speed="-3">
	    		<div class="row">
	    			<div class="col-md-3"></div>

	    			<div class="col-md-6">

						<h3 class="fnt-blue d-flex align-items-center">
		                  <img src="img/drop-yellow-en.svg" class="img-fluid fa-mar-right-20"> 
		                  Our Vision
		                </h3>
		                <div class="spacer-20"></div>

		                <p class="fnt-blue">Lorem ipsum dolor sit amet consectetur. Ac lacus ac felis lacus enim nunc. Iaculis enim ipsum egestas viverra lacus mauris pellentesque id. A mauris consectetur ante vitae. Consectetur duis id egestas elit curabitur amet sed at. Varius auctor velit condimentum amet arcu.</p>
		                <div class="spacer-20"></div>
	    				
	    			</div>

	    			<div class="col-md-3"></div>

	    		</div>
    		</div>

        	<div class="aboutus-float-left" data-scroll data-scroll-direction="vertical" data-scroll-speed="3">
              <img src="img/aboutus-left.svg" class="img-fluid" >
            </div>

    		<div class="spacer-120"></div>
    	</div>

    </section>    


    <?php include "footer-page.php";?>

  </div>

  <?php include "scripts.php";?>
   
  </body>
</html>