jQuery(document).ready(function(){

	//import LocomotiveScroll from 'locomotive-scroll';
	const scroll = new LocomotiveScroll({
		el: document.querySelector('[data-scroll-container]'),
		smooth: true,
		getDirection: true,
		reloadOnContextChange: true,
		lerp: 0.085,
		touchMultiplier: 2,
		smoothMobile: 0,
		smartphone: {
			smooth: !0,
			breakpoint: 767
		},
		tablet: {
			smooth: !1,
			breakpoint: 1024
		},
	});
		
	new ResizeObserver(() => scroll.update()).observe(document.querySelector("[data-scroll-container]"));

	scroll.on('call', (obj) => {
	  if(obj == "triggerCounter"){
	  	 jQuery('.counter').countTo();
	  }
	});

	// const myCarousel = document.getElementById('servicesCarousel')

	// myCarousel.addEventListener('slid.bs.carousel', event => {
	//   scroll.update();
	// });


	jQuery(".navbar-nav .nav-link").each(function(){

		jQuery(this).on("click touch", function(){
			jQuery(".navbar-nav .nav-link").removeClass("active");
			jQuery(this).addClass(" active");
		});
	});

	 var container = jQuery('.grid');

	container.isotope({
	    animationEngine: 'best-available',
	    itemSelector: '.element-item'
    });

    jQuery('.product-filter button').on('click', function() {
	    var selector = jQuery(this).data('filter');
	  	 container.isotope({
	    	filter: selector
   	 	}); 

	  	 jQuery(".product-filter button").removeClass("is-checked");
	  	 jQuery(this).addClass(" is-checked");
   	 }); 


   	 jQuery(".mc-item").each(function(){

   	 	jQuery(this).on("mouseover", function(){
	   	 	jQuery(this).find(".top").removeClass("showThis");
	   	 	jQuery(this).find(".top").addClass("hideThis");
 	   	 	jQuery(this).find(".bottom").removeClass("showThis");
 			jQuery(this).find(".bottom").addClass("showThis");
 			jQuery(this).find(".mc-caption").css("height","100%");
   	 	});

   	 	jQuery(this).on("mouseleave", function(){
	   	 	jQuery(this).find(".top").removeClass("hideThis");
	   	 	jQuery(this).find(".top").addClass("showThis");
 	   	 	jQuery(this).find(".bottom").removeClass("hideThis");
 			jQuery(this).find(".bottom").addClass("showThis");
 			jQuery(this).find(".mc-caption").css("height","50%");
   	 	});

   	 }); 





           	 


	//jQuery('.grid').isotope();

	// init Isotope
		// var $grid = jQuery('.grid').isotope({
		//   itemSelector: '.element-item',
		//   layoutMode: 'fitRows'
		// });

		// // bind filter button click
		// jQuery('.filters-button-group').on( 'click', 'button', function() {
		//   var filterValue = jQuery( this ).attr('data-filter');
		//   // use filterFn if matches value
		//   filterValue = filterFns[ filterValue ] || filterValue;
		//   $grid.isotope({ filter: filterValue });
		// });
		// // change is-checked class on buttons
		// jQuery('.button-group').each( function( i, buttonGroup ) {
		//   var $buttonGroup = jQuery( buttonGroup );
		//   $buttonGroup.on( 'click', 'button', function() {
		//     $buttonGroup.find('.is-checked').removeClass('is-checked');
		//     jQuery( this ).addClass('is-checked');
		//   });
		// });




	


  // jQuery("#teardropProducts").owlCarousel({
  // 		// autoplay: true,
  // 		items: 1,
// 	    loop:true,
// 	    margin:10,
// 	    responsiveClass:true,
// 	    dots: false,
// 	    responsive:{
// 	        0:{
// 	            items:1,
// 	            nav:false
// 	        },
// 	        600:{
// 	            items:1,
// 	            nav:false
// 	        },
// 	        1000:{
// 	            items:1,
// 	            nav:false,
// 	            loop:true
// 	        }
// 	    }
// 	});



});