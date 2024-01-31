<?php include "header.php";?>

<body>

  <!--header-->
  
  <header>
  <link rel="stylesheet" type="text/css" href="css/main.css">

    <?php include "navigation.php";?>

  </header>
  
  <div data-scroll-container>


    <section class="non-vh " data-scroll-section>
      
      <div class="container-fluid bg-white">
        <div class="spacer-120 spacer-mobile-60"></div>
        <div class="spacer-40 mobile-remove-space"></div>

        <div class="container">
          <h3 class="fnt-blue d-flex align-items-center justify-content-center justify-content-md-start">
            <img src="img/drop-yellow-en.svg" class="img-fluid fa-mar-right-20 "> 
           Media Center
          </h3>
          <div class="spacer-20"></div>

          <div class="csc-video mobile-height-13rem mobile-overlay">
            <div class="ratio ratio-16x9">
             <video id="background-video" autoplay="" loop="" muted="">
                <source src="vid/media-center.mov" type="video/mp4">
              </video>  
             </div> 
             <div id="vid-caption" class="mobile-vid-caption">
              <h1 class="fnt-white d-flex align-items-center">News</h1>

              <div class="spacer-20"></div>

              <div class="row">
                <div class="col-md-11 w-100">
                  <p class="fnt-white fnt-20">
                    Lorem ipsum dolor sit amet consectetur.
                  </p>
                </div>
                <div class="col-md-1"></div>
              </div>
              
             </div>                            
          </div>          

        </div>

      </div>


    </section>

    <section class="" data-scroll-section>

      <div class="container-fluid bg-white">
        <div class="spacer-120 spacer-mobile-30"></div>

        <div class="container">
          <div class="row">

            <div class="col-md-3">

              <a href="media-center.php" class="btn w-100 mc-nav active">News</a>
              <a href="media-center.php" class="btn w-100 mc-nav">Image Gallery</a>
              
              <div class="spacer-20"></div>
            </div>

            <div class="col-md-9">
                <div id="mc-list" class="row">

                  <div class="mc-item col-md-4">
                    <div class="mc-content">
                      <img src="img/media-center/mc-thumb1.jpg" class="mc-img img-fluid w-100">
                      <div class="mc-caption mobile-text-end mobile-mc-caption-height-35 mobile-mc-caption-padding">
                        <div class="top showThis">
                          <h5 class="fnt-white mobile-text-ellipsis">News Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestias obcaecati corporis nisi itaque, molestiae nobis consequuntur tempore quod illum quo, nemo temporibus dolor quidem aliquid beatae quam eos nulla. Accusantium.</h5>
                          <p class="fnt-white fnt-15 mobile-text-ellipsis">Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Commodi nihil numquam explicabo exercitationem recusandae. Sed excepturi sapiente quo dolor. Harum neque sequi iusto molestias nobis tempore, at illum non autem eos deleniti aperiam dolorum voluptate quidem rerum temporibus reiciendis fugiat? Dolorem eveniet officia obcaecati porro non expedita, quisquam autem reprehenderit tenetur libero hic doloribus, quaerat rerum atque aliquid. Amet voluptas hic autem laboriosam natus ea recusandae temporibus vitae ab error, nemo modi sit tempore, obcaecati rem. Deleniti rerum esse magni tempora culpa sapiente reiciendis veritatis dolorum modi magnam in dignissimos nesciunt illo corporis, doloribus ducimus! Delectus ipsa vitae velit rem.</p>
                          <div class="spacer-10"></div>
                          <p class="mc-date fnt-12"><i class="fa-solid fa-calendar-day fa-mar-right"></i> 10 Oct 2023 </p>
                        </div>

                        <div class="bottom hideThis">
                          <div class="row">
                            <div class="col-1"></div>
                            <div class="col-10">
                               <center><a href="#" class="btn btn-warning btn-yellow w-100">Read More</a></center>
                            </div>
                            <div class="col-1"></div>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                  <div class="mc-item col-md-4">
                    <div class="mc-content">
                      <img src="img/media-center/mc-thumb2.jpg" class="mc-img img-fluid w-100">
                      <div class="mc-caption mobile-text-end mobile-mc-caption-height-35 mobile-mc-caption-padding">
                        <div class="top showThis">
                          <h5 class="fnt-white mobile-text-ellipsis">News Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestias obcaecati corporis nisi itaque, molestiae nobis consequuntur tempore quod illum quo, nemo temporibus dolor quidem aliquid beatae quam eos nulla. Accusantium.</h5>
                          <p class="fnt-white fnt-15 mobile-text-ellipsis">Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Commodi nihil numquam explicabo exercitationem recusandae. Sed excepturi sapiente quo dolor. Harum neque sequi iusto molestias nobis tempore, at illum non autem eos deleniti aperiam dolorum voluptate quidem rerum temporibus reiciendis fugiat? Dolorem eveniet officia obcaecati porro non expedita, quisquam autem reprehenderit tenetur libero hic doloribus, quaerat rerum atque aliquid. Amet voluptas hic autem laboriosam natus ea recusandae temporibus vitae ab error, nemo modi sit tempore, obcaecati rem. Deleniti rerum esse magni tempora culpa sapiente reiciendis veritatis dolorum modi magnam in dignissimos nesciunt illo corporis, doloribus ducimus! Delectus ipsa vitae velit rem.</p>
                          <div class="spacer-10"></div>
                          <p class="mc-date fnt-12"><i class="fa-solid fa-calendar-day fa-mar-right"></i> 10 Oct 2023 </p>
                        </div>

                        <div class="bottom hideThis">
                          <div class="row">
                            <div class="col-1"></div>
                            <div class="col-10">
                               <center><a href="#" class="btn btn-warning btn-yellow w-100">Read More</a></center>
                            </div>
                            <div class="col-1"></div>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                  <div class="mc-item col-md-4">
                    <div class="mc-content">
                      <img src="img/media-center/mc-thumb3.jpg" class="mc-img img-fluid w-100">
                      <div class="mc-caption mobile-text-end mobile-mc-caption-height-35 mobile-mc-caption-padding">
                        <div class="top showThis">
                          <h5 class="fnt-white mobile-text-ellipsis">News Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestias obcaecati corporis nisi itaque, molestiae nobis consequuntur tempore quod illum quo, nemo temporibus dolor quidem aliquid beatae quam eos nulla. Accusantium.</h5>
                          <p class="fnt-white fnt-15 mobile-text-ellipsis">Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Commodi nihil numquam explicabo exercitationem recusandae. Sed excepturi sapiente quo dolor. Harum neque sequi iusto molestias nobis tempore, at illum non autem eos deleniti aperiam dolorum voluptate quidem rerum temporibus reiciendis fugiat? Dolorem eveniet officia obcaecati porro non expedita, quisquam autem reprehenderit tenetur libero hic doloribus, quaerat rerum atque aliquid. Amet voluptas hic autem laboriosam natus ea recusandae temporibus vitae ab error, nemo modi sit tempore, obcaecati rem. Deleniti rerum esse magni tempora culpa sapiente reiciendis veritatis dolorum modi magnam in dignissimos nesciunt illo corporis, doloribus ducimus! Delectus ipsa vitae velit rem.</p>
                          <div class="spacer-10"></div>
                          <p class="mc-date fnt-12"><i class="fa-solid fa-calendar-day fa-mar-right"></i> 10 Oct 2023 </p>
                        </div>

                        <div class="bottom hideThis">
                          <div class="row">
                            <div class="col-1"></div>
                            <div class="col-10">
                               <center><a href="#" class="btn btn-warning btn-yellow w-100">Read More</a></center>
                            </div>
                            <div class="col-1"></div>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                  <div class="mc-item col-md-4">
                    <div class="mc-content">
                      <img src="img/media-center/mc-thumb4.jpg" class="mc-img img-fluid w-100">
                      <div class="mc-caption mobile-text-end mobile-mc-caption-height-35 mobile-mc-caption-padding">
                        <div class="top showThis">
                          <h5 class="fnt-white mobile-text-ellipsis">News Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestias obcaecati corporis nisi itaque, molestiae nobis consequuntur tempore quod illum quo, nemo temporibus dolor quidem aliquid beatae quam eos nulla. Accusantium.</h5>
                          <p class="fnt-white fnt-15 mobile-text-ellipsis">Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Commodi nihil numquam explicabo exercitationem recusandae. Sed excepturi sapiente quo dolor. Harum neque sequi iusto molestias nobis tempore, at illum non autem eos deleniti aperiam dolorum voluptate quidem rerum temporibus reiciendis fugiat? Dolorem eveniet officia obcaecati porro non expedita, quisquam autem reprehenderit tenetur libero hic doloribus, quaerat rerum atque aliquid. Amet voluptas hic autem laboriosam natus ea recusandae temporibus vitae ab error, nemo modi sit tempore, obcaecati rem. Deleniti rerum esse magni tempora culpa sapiente reiciendis veritatis dolorum modi magnam in dignissimos nesciunt illo corporis, doloribus ducimus! Delectus ipsa vitae velit rem.</p>
                          <div class="spacer-10"></div>
                          <p class="mc-date fnt-12"><i class="fa-solid fa-calendar-day fa-mar-right"></i> 10 Oct 2023 </p>
                        </div>

                        <div class="bottom hideThis">
                          <div class="row">
                            <div class="col-1"></div>
                            <div class="col-10">
                               <center><a href="#" class="btn btn-warning btn-yellow w-100">Read More</a></center>
                            </div>
                            <div class="col-1"></div>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                  <div class="mc-item col-md-4">
                    <div class="mc-content">
                      <img src="img/media-center/mc-thumb5.jpg" class="mc-img img-fluid w-100">
                      <div class="mc-caption mobile-text-end mobile-mc-caption-height-35 mobile-mc-caption-padding">
                        <div class="top showThis">
                          <h5 class="fnt-white mobile-text-ellipsis">News Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestias obcaecati corporis nisi itaque, molestiae nobis consequuntur tempore quod illum quo, nemo temporibus dolor quidem aliquid beatae quam eos nulla. Accusantium.</h5>
                          <p class="fnt-white fnt-15 mobile-text-ellipsis">Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Commodi nihil numquam explicabo exercitationem recusandae. Sed excepturi sapiente quo dolor. Harum neque sequi iusto molestias nobis tempore, at illum non autem eos deleniti aperiam dolorum voluptate quidem rerum temporibus reiciendis fugiat? Dolorem eveniet officia obcaecati porro non expedita, quisquam autem reprehenderit tenetur libero hic doloribus, quaerat rerum atque aliquid. Amet voluptas hic autem laboriosam natus ea recusandae temporibus vitae ab error, nemo modi sit tempore, obcaecati rem. Deleniti rerum esse magni tempora culpa sapiente reiciendis veritatis dolorum modi magnam in dignissimos nesciunt illo corporis, doloribus ducimus! Delectus ipsa vitae velit rem.</p>
                          <div class="spacer-10"></div>
                          <p class="mc-date fnt-12"><i class="fa-solid fa-calendar-day fa-mar-right"></i> 10 Oct 2023 </p>
                        </div>

                        <div class="bottom hideThis">
                          <div class="row">
                            <div class="col-1"></div>
                            <div class="col-10">
                               <center><a href="#" class="btn btn-warning btn-yellow w-100">Read More</a></center>
                            </div>
                            <div class="col-1"></div>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                  <div class="mc-item col-md-4">
                    <div class="mc-content">
                      <img src="img/media-center/mc-thumb6.jpg" class="mc-img img-fluid w-100">
                      <div class="mc-caption mobile-text-end mobile-mc-caption-height-35 mobile-mc-caption-padding">
                        <div class="top showThis">
                          <h5 class="fnt-white mobile-text-ellipsis">News Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestias obcaecati corporis nisi itaque, molestiae nobis consequuntur tempore quod illum quo, nemo temporibus dolor quidem aliquid beatae quam eos nulla. Accusantium.</h5>
                          <p class="fnt-white fnt-15 mobile-text-ellipsis">Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Commodi nihil numquam explicabo exercitationem recusandae. Sed excepturi sapiente quo dolor. Harum neque sequi iusto molestias nobis tempore, at illum non autem eos deleniti aperiam dolorum voluptate quidem rerum temporibus reiciendis fugiat? Dolorem eveniet officia obcaecati porro non expedita, quisquam autem reprehenderit tenetur libero hic doloribus, quaerat rerum atque aliquid. Amet voluptas hic autem laboriosam natus ea recusandae temporibus vitae ab error, nemo modi sit tempore, obcaecati rem. Deleniti rerum esse magni tempora culpa sapiente reiciendis veritatis dolorum modi magnam in dignissimos nesciunt illo corporis, doloribus ducimus! Delectus ipsa vitae velit rem.</p>
                          <div class="spacer-10"></div>
                          <p class="mc-date fnt-12"><i class="fa-solid fa-calendar-day fa-mar-right"></i> 10 Oct 2023 </p>
                        </div>

                        <div class="bottom hideThis">
                          <div class="row">
                            <div class="col-1"></div>
                            <div class="col-10">
                               <center><a href="#" class="btn btn-warning btn-yellow w-100">Read More</a></center>
                            </div>
                            <div class="col-1"></div>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                  <div class="mc-item col-md-4">
                    <div class="mc-content">
                      <img src="img/media-center/mc-thumb7.jpg" class="mc-img img-fluid w-100">
                      <div class="mc-caption mobile-text-end mobile-mc-caption-height-35 mobile-mc-caption-padding">
                        <div class="top showThis">
                          <h5 class="fnt-white mobile-text-ellipsis">News Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestias obcaecati corporis nisi itaque, molestiae nobis consequuntur tempore quod illum quo, nemo temporibus dolor quidem aliquid beatae quam eos nulla. Accusantium.</h5>
                          <p class="fnt-white fnt-15 mobile-text-ellipsis">Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Commodi nihil numquam explicabo exercitationem recusandae. Sed excepturi sapiente quo dolor. Harum neque sequi iusto molestias nobis tempore, at illum non autem eos deleniti aperiam dolorum voluptate quidem rerum temporibus reiciendis fugiat? Dolorem eveniet officia obcaecati porro non expedita, quisquam autem reprehenderit tenetur libero hic doloribus, quaerat rerum atque aliquid. Amet voluptas hic autem laboriosam natus ea recusandae temporibus vitae ab error, nemo modi sit tempore, obcaecati rem. Deleniti rerum esse magni tempora culpa sapiente reiciendis veritatis dolorum modi magnam in dignissimos nesciunt illo corporis, doloribus ducimus! Delectus ipsa vitae velit rem.</p>
                          <div class="spacer-10"></div>
                          <p class="mc-date fnt-12"><i class="fa-solid fa-calendar-day fa-mar-right"></i> 10 Oct 2023 </p>
                        </div>

                        <div class="bottom hideThis">
                          <div class="row">
                            <div class="col-1"></div>
                            <div class="col-10">
                               <center><a href="#" class="btn btn-warning btn-yellow w-100">Read More</a></center>
                            </div>
                            <div class="col-1"></div>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                  <div class="mc-item col-md-4">
                    <div class="mc-content">
                      <img src="img/media-center/mc-thumb8.jpg" class="mc-img img-fluid w-100">
                      <div class="mc-caption mobile-text-end mobile-mc-caption-height-35 mobile-mc-caption-padding">
                        <div class="top showThis">
                          <h5 class="fnt-white mobile-text-ellipsis">News Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestias obcaecati corporis nisi itaque, molestiae nobis consequuntur tempore quod illum quo, nemo temporibus dolor quidem aliquid beatae quam eos nulla. Accusantium.</h5>
                          <p class="fnt-white fnt-15 mobile-text-ellipsis">Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Commodi nihil numquam explicabo exercitationem recusandae. Sed excepturi sapiente quo dolor. Harum neque sequi iusto molestias nobis tempore, at illum non autem eos deleniti aperiam dolorum voluptate quidem rerum temporibus reiciendis fugiat? Dolorem eveniet officia obcaecati porro non expedita, quisquam autem reprehenderit tenetur libero hic doloribus, quaerat rerum atque aliquid. Amet voluptas hic autem laboriosam natus ea recusandae temporibus vitae ab error, nemo modi sit tempore, obcaecati rem. Deleniti rerum esse magni tempora culpa sapiente reiciendis veritatis dolorum modi magnam in dignissimos nesciunt illo corporis, doloribus ducimus! Delectus ipsa vitae velit rem.</p>
                          <div class="spacer-10"></div>
                          <p class="mc-date fnt-12"><i class="fa-solid fa-calendar-day fa-mar-right"></i> 10 Oct 2023 </p>
                        </div>

                        <div class="bottom hideThis">
                          <div class="row">
                            <div class="col-1"></div>
                            <div class="col-10">
                               <center><a href="#" class="btn btn-warning btn-yellow w-100">Read More</a></center>
                            </div>
                            <div class="col-1"></div>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                  <div class="mc-item col-md-4">
                    <div class="mc-content">
                      <img src="img/media-center/mc-thumb9.jpg" class="mc-img img-fluid w-100">
                      <div class="mc-caption mobile-text-end mobile-mc-caption-height-35 mobile-mc-caption-padding">
                        <div class="top showThis">
                          <h5 class="fnt-white mobile-text-ellipsis">News Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestias obcaecati corporis nisi itaque, molestiae nobis consequuntur tempore quod illum quo, nemo temporibus dolor quidem aliquid beatae quam eos nulla. Accusantium.</h5>
                          <p class="fnt-white fnt-15 mobile-text-ellipsis">Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Commodi nihil numquam explicabo exercitationem recusandae. Sed excepturi sapiente quo dolor. Harum neque sequi iusto molestias nobis tempore, at illum non autem eos deleniti aperiam dolorum voluptate quidem rerum temporibus reiciendis fugiat? Dolorem eveniet officia obcaecati porro non expedita, quisquam autem reprehenderit tenetur libero hic doloribus, quaerat rerum atque aliquid. Amet voluptas hic autem laboriosam natus ea recusandae temporibus vitae ab error, nemo modi sit tempore, obcaecati rem. Deleniti rerum esse magni tempora culpa sapiente reiciendis veritatis dolorum modi magnam in dignissimos nesciunt illo corporis, doloribus ducimus! Delectus ipsa vitae velit rem.</p>
                          <div class="spacer-10"></div>
                          <p class="mc-date fnt-12"><i class="fa-solid fa-calendar-day fa-mar-right"></i> 10 Oct 2023 </p>
                        </div>

                        <div class="bottom hideThis">
                          <div class="row">
                            <div class="col-1"></div>
                            <div class="col-10">
                               <center><a href="#" class="btn btn-warning btn-yellow w-100">Read More</a></center>
                            </div>
                            <div class="col-1"></div>
                          </div>
                        </div>

                      </div>
                    </div>
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