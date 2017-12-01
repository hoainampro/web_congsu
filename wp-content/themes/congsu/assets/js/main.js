jQuery(document).ready(function($) {
    $(".main-menu").flmenu();
    $( "#accordion" ).accordion({
      
    });
     $(".slider-top").owlCarousel({
    	nav:true,
		loop:true,
	    margin:0,
	    autoplay: true,
	    pagination: true,
	    // navText: [
	    //   "<i class='fa fa-chevron-left'></i>",
	    //   "<i class='fa fa-chevron-right'></i>"
	    // ],
	    responsive:{
	        0:{
	            items:1
	        },
	        600:{
	            items:1
	        },
	        1000:{
	            items:1,
	            nav:true,
	        }
	    }
	});
    $(".owlslider").owlCarousel({
    	loop:true,
	    margin: 0,
	    autoplay: true,
	    pagination: true,
	    navText: [
	      "<i class='fa fa-long-arrow-left'></i>",
	      "<i class='fa fa-long-arrow-right'></i>"
	    ],
	    responsive:{
	        0:{
	            items:1,
	            nav:true
	        },
	        600:{
	            items:3
	        },
	        1000:{
	            items: 3,
	            nav:true
	        }
	    }
	});
	

    $(".owl-slider").owlCarousel({
		loop:true,
	    margin: 0,
	    autoplay: true,
	    pagination: true,
	    navText: [
	      "<i class='fa fa-long-arrow-left'></i>",
	      "<i class='fa fa-long-arrow-right'></i>"
	    ],
	    responsive:{
	        0:{
	            items:1,
	            nav:true
	        },
	        600:{
	            items:3
	        },
	        1000:{
	            items:4,
	            nav:true
	        }
	    }
	});
    $(".owl-pro-slider").owlCarousel({
		loop:true,
	    margin: 0,
	    autoplay: true,
	    pagination: true,
	    navText: [
	      "<i class='fa fa-long-arrow-left'></i>",
	      "<i class='fa fa-long-arrow-right'></i>"
	    ],
	    responsive:{
	        0:{
	            items:1,
	            nav:true
	        },
	        600:{
	            items:3
	        },
	        1000:{
	            items:3,
	            nav:true
	        }
	    }
	});
    $(".news_slider").owlCarousel({
    	nav:true,
		loop:true,
	    margin:0,
	    navText: [
	      "<i class='fa fa-angle-left'></i>",
	      "<i class='fa fa-angle-right'></i>"
	    ],
	    responsive:{
	        0:{
	            items:1
	        },
	        600:{
	            items:3
	        },
	        1000:{
	            items:3
	        }
	    }
	});
     $(".old_slider").owlCarousel({
    	nav:true,
		loop:true,
	    margin:0,
	    navText: [
	      "<i class='fa fa-angle-left'></i>",
	      "<i class='fa fa-angle-right'></i>"
	    ],
	    responsive:{
	        0:{
	            items:1
	        },
	        600:{
	            items:3
	        },
	        1000:{
	            items:3
	        }
	    }
	});
	$(".donor-slider").owlCarousel({
		loop:true,
	    margin:0,
	    navText: [
	      "<i class='fa fa-chevron-left'></i>",
	      "<i class='fa fa-chevron-right'></i>"
	    ],
	    nav:true,
	    responsive:{
	        0:{
	            items:1
	        },
	        600:{
	            items:3
	        },
	        1000:{
	            items:6
	        }
	    }
	});

	var acc = document.getElementsByClassName("accordion");
	var i;

	for (i = 0; i < acc.length; i++) {
	  acc[i].onclick = function() {
	    this.classList.toggle("active");
	    var panel = this.nextElementSibling;
	    if (panel.style.maxHeight){
	      panel.style.maxHeight = null;
	    } else {
	      panel.style.maxHeight = panel.scrollHeight + "px";
	    } 
	  }
	}
	// Back to top
    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) { $('#wrap-back-to-top').css('display', 'block'); } else { $('#wrap-back-to-top').css('display', 'none'); }
    });
    $('#wrap-back-to-top').click(function() { $("html, body").animate({ scrollTop: 0 }, 1000); });

    $('.grid').masonry({
	    columnWidth: '.grid-sizer',
		gutter: '.gutter-sizer',
		itemSelector: '.grid-item',
		percentPosition: true
	})
});


