<?php include "header.php";?>

<body>

  <!--header-->
  
  <header>

    <?php include "navigation.php";?>

  </header>
  
  <div data-scroll-container>


    <section class="non-vh" data-scroll-section>
      
      <div class="container-fluid bg-white">
        <div class="spacer-120 d-none d-md-block"></div>
        <div class="spacer-40"></div>

        <div class="container">
          <h3 class="fnt-blue d-flex align-items-center h3-responsive">
            <img src="../img/drop-yellow-ar.svg" class="img-fluid fa-mar-right-20"> 
            الموزعون
          </h3>
          <div class="spacer-20"></div>

          <p class="fnt-20 fnt-16-responsive">نحن متحمسون لاهتمامك بأن تصبح موزع لمنتجاتنا. يرجى ملء النموذج التالي وسيقوم ممثل من مكتبنا بالاتصال بك لمناقشة الفرص المتاحة.</p>
          <div class="spacer-20"></div>

          <img src="../img/dist-banner.jpg" class="img-fluid w-100 br-rad-shadowed br-rad-shadowed-responsive-ar">

        </div>

      </div>

    </section>

    <section class="distributor-responsive" data-scroll-section>
      
      <div class="container-fluid bg-white">
        <div class="spacer-120"></div>

        <div class="container">
           <h3 class="h3-responsive">نموذج طلب </h3>
           <div class="spacer-20"></div>

           <form action="">
             <div class="row">

               <div class="col-md-4">
                 <input type="text" name="fullname" class="form-control cu-control fc-responsive" placeholder="الاسم" required>
                 <div class="spacer-20"></div>
               </div>

                <div class="col-md-4">
                 <input type="tel" name="phone" class="form-control cu-control fc-responsive force-rtl" placeholder="رقم الجوال" required>
                 <div class="spacer-20"></div>
               </div>

                <div class="col-md-4">
                 <input type="email" name="email" class="form-control cu-control fc-responsive force-rtl" placeholder="البريد الالكتروني" required>
                 <div class="spacer-20"></div>
               </div>

                <div class="col-md-6">
                 <input type="text" name="add1" class="form-control cu-control fc-responsive" placeholder="العنوان ١" required>
                 <div class="spacer-20"></div>
               </div> 

                <div class="col-md-6">
                 <input type="text" name="add12" class="form-control cu-control fc-responsive" placeholder="العنوان ١">
                 <div class="spacer-20"></div>
               </div>  

               <div class="col-md-4">
                 <input type="text" name="city" class="form-control cu-control fc-responsive" placeholder="المدينة" required>
                 <div class="spacer-20"></div>
               </div>  

               <div class="col-md-4">
                 <input type="text" name="gov" class="form-control cu-control fc-responsive" placeholder="المحافظة" required>
                 <div class="spacer-20"></div>
               </div> 

               <div class="col-md-4">
                 <input type="text" name="postal" class="form-control cu-control fc-responsive" placeholder="الرمز البريدي" required>
                 <div class="spacer-20"></div>
               </div>

                <div class="col-md-3">
                 <<button class="btn btn-warning btn-yellow w-100">إرسال <i class="fa-solid fa-location-arrow"></i></button>
               </div>


             </div>
           </form>

        </div>

      
        <div class="spacer-40"></div>
      </div>
      
      
    </section>


    <?php include "footer-page.php";?>

  </div>

  <?php include "scripts.php";?>
   
  </body>
</html>