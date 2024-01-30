<?php include "header.php";?>

<body>

  <!--header-->
  
  <header>

    <?php include "navigation.php";?>

  </header>
  
  <div data-scroll-container>


    <section class="non-vh desktop-view" data-scroll-section>
      
      <div class="container-fluid bg-white">
        <div class="spacer-120"></div>
        <div class="spacer-40"></div>

        <div class="container">
          <h3 class="fnt-blue d-flex align-items-center">
            <img src="../img/drop-yellow-ar.svg" class="img-fluid fa-mar-right-20"> 
            الاقسام و المنتجات
          </h3>
          <div class="spacer-20"></div>

          <div class="product-filter button-group filters-button-group">
              <div class="row">
                <div class="col">
                  <center>
                    <button class="button d-flex align-items-center justify-content-center fnt-blue is-checked" data-filter="*">
                      <i class="fa-solid fa-table-list fa-mar-right icons"></i> جميع
                    </button>
                  </center>

                </div>

                <div class="col">
                  <center>
                    <button class="button d-flex align-items-center justify-content-center fnt-blue" data-filter=".food-products">
                     <img src="../img/icons/fp.svg" class="img-fluid fa-mar-right icons"> المنتجات الغذائية
                    </button>                   
                  </center>

                </div>

                <div class="col">
                  <center>
                    <button class="button d-flex align-items-center justify-content-center fnt-blue" data-filter=".non-food-products">
                      <img src="../img/icons/nfp.svg" class="img-fluid fa-mar-right icons"> المنتجات غير الغذائية
                    </button>                    
                  </center>

                </div>

                <div class="col">
                  <center>
                     <button class="button d-flex align-items-center justify-content-center fnt-blue" data-filter=".pet-products">
                      <img src="../img/icons/pp.svg" class="img-fluid fa-mar-right icons"> منتجات الحيوانات الأليفة
                    </button>                    
                  </center>
                </div>
              </div>

          </div>




        </div>
        <div class="spacer-40"></div>
      </div>

    </section>

    <section class="desktop-view" data-scroll-section>

      <div class="container-fluid bg-white">
         <div class="spacer-120"></div>

         <div class="container">
           
           <div class="row">
             <div class="col-md-3">
                
                <form action="">
                  <div class="accordion" id="filter-side">

                    <div class="accordion-item">
                      <h2 class="accordion-header" id="filter-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#filter-collapseOne">
                          <div class="row align-items-center w-100">
                            <div class="col-10">
                              العلامات التجارية
                            </div>
                            <div class="col-2">
                              <img src="../img/icons/dropdown.svg" class="img-fluid">
                            </div>
                          </div>
                        </button>
                      </h2>

                      <div id="filter-collapseOne" class="accordion-collapse collapse"  data-bs-parent="#filter-headingOne">
                        <div class="accordion-body">

                          <input type="text" name="search-brands" class="form-control filter-field-text" placeholder="ابحث عن العلامة التجارية">

                          <div class="spacer-20"></div>

                          <div class="filter-list">

                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="checkbox1">
                              <label class="form-check-label" for="checkbox1">
                                اسم البراند 
                              </label>
                            </div>

                          <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="checkbox2">
                              <label class="form-check-label" for="checkbox2">
                                اسم البراند
                              </label>
                            </div>

                          <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="checkbox3">
                              <label class="form-check-label" for="checkbox3">
                                اسم البراند
                              </label>
                            </div>                                                        
                                                        
                          </div>  
                          
                        </div>
                      </div>
                    </div>

                    <div class="accordion-item">
                      <h2 class="accordion-header" id="filter-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#filter-collapseTwo">

                          <div class="row align-items-center w-100">
                            <div class="col-10">
                              حدد الفئة
                            </div>
                            <div class="col-2">
                              <img src="../img/icons/dropdown.svg" class="img-fluid">
                            </div>
                          </div>

                        </button>
                      </h2>
                      <div id="filter-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#filter-headingTwo">
                        <div class="accordion-body">

                          <input type="text" name="search-categories" class="form-control filter-field-text" placeholder="ابحث عن الفئات">

                          <div class="spacer-20"></div>

                          <div class="filter-list">

                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="checkbox1">
                              <label class="form-check-label" for="checkbox1">
                                اسم البراند
                              </label>
                            </div>

                          <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="checkbox2">
                              <label class="form-check-label" for="checkbox2">
                               اسم البراند
                              </label>
                            </div>

                          <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="checkbox3">
                              <label class="form-check-label" for="checkbox3">
                                اسم البراند
                              </label>
                            </div>                                                        
                                                        
                          </div>                            
                          
                        </div>
                      </div>
                    </div>

                  </div>
                </form>
             </div>

             <div class="col-md-9">
               
               <div class="row grid">

                <div class="col-md-4 element-item food-products">
                  <a href="">
                    <div class="prod-item">
                      <img src="../img/products/prod-1.jpg" class="img-fluid">

                      <div class="caption">
                        <h5 class="fnt-brown">اسم المنتج</h5>
                        <p class="fnt-15">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة.</p>                      
                      </div>
                    </div>                    
                  </a>

                  <div class="spacer-20"></div>
                </div>

                <div class="col-md-4 element-item pet-products">
                  <a href="">
                    <div class="prod-item">
                      <img src="../img/products/prod-2.jpg" class="img-fluid">

                      <div class="caption">
                        <h5 class="fnt-brown">اسم المنتج</h5>
                        <p class="fnt-15">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة.</p>                      
                      </div>                   
                    </div>                    
                  </a>

                  <div class="spacer-20"></div>
                </div>

                <div class="col-md-4 element-item non-food-products">
                  <a href="">
                    <div class="prod-item">
                      <img src="../img/products/prod-3.jpg" class="img-fluid">
               
                      <div class="caption">
                        <h5 class="fnt-brown">اسم المنتج</h5>
                        <p class="fnt-15">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة.</p>                      
                      </div>                   
                    </div>                    
                  </a>

                  <div class="spacer-20"></div>                  
                </div>

                <div class="col-md-4 element-item food-products">
                  <a href="">
                    <div class="prod-item">
                      <img src="../img/products/prod-4.jpg" class="img-fluid">
                      
                      <div class="caption">
                        <h5 class="fnt-brown">اسم المنتج</h5>
                        <p class="fnt-15">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة.</p>                      
                      </div>                   
                    </div>                    
                  </a>

                  <div class="spacer-20"></div>                  
                </div>

                <div class="col-md-4 element-item non-food-products">
                  <a href="">
                    <div class="prod-item">
                      <img src="../img/products/prod-5.jpg" class="img-fluid">
                     
                      <div class="caption">
                        <h5 class="fnt-brown">اسم المنتج</h5>
                        <p class="fnt-15">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة.</p>                      
                      </div>                   
                    </div>                    
                  </a>

                  <div class="spacer-20"></div>                  
                </div>

                <div class="col-md-4 element-item pet-products">
                  <a href="">
                    <div class="prod-item">
                      <img src="../img/products/prod-6.jpg" class="img-fluid">
                      
                      <div class="caption">
                        <h5 class="fnt-brown">اسم المنتج</h5>
                        <p class="fnt-15">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة.</p>                      
                      </div>                  
                    </div>                    
                  </a>

                  <div class="spacer-20"></div>                  
                </div>

                <div class="col-md-4 element-item food-products">
                  <a href="">
                    <div class="prod-item">
                      <img src="../img/products/prod-7.jpg" class="img-fluid">
                      
                      <div class="caption">
                        <h5 class="fnt-brown">اسم المنتج</h5>
                        <p class="fnt-15">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة.</p>                      
                      </div>                  
                    </div>                    
                  </a>

                  <div class="spacer-20"></div>                  
                </div>

                <div class="col-md-4 element-item non-food-products">
                  <a href="">
                    <div class="prod-item">
                      <img src="../img/products/prod-8.jpg" class="img-fluid">
                      
                      <div class="caption">
                        <h5 class="fnt-brown">اسم المنتج</h5>
                        <p class="fnt-15">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة.</p>                      
                      </div>                  
                    </div>                     
                  </a>

                  <div class="spacer-20"></div>                 
                </div>

                <div class="col-md-4 element-item non-food-products">
                  <a href="">
                    <div class="prod-item">
                      <img src="../img/products/prod-9.jpg" class="img-fluid">
                      
                      <div class="caption">
                        <h5 class="fnt-brown">اسم المنتج</h5>
                        <p class="fnt-15">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة.</p>                      
                      </div>                  
                    </div>                    
                  </a>
 
                  <div class="spacer-20"></div>                 
                </div>
                
              </div>

             </div>
           </div>
           
         </div>

          <div class="spacer-120"></div>
      </div>

    </section>


    <?php include "footer-page.php";?>

  </div>

  <?php include "scripts.php";?>
   
  </body>
</html>