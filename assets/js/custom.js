/**
 * Exoplanet Custom JS
 *
 * @package Exoplanet
 *
 * Distributed under the MIT license - https://opensource.org/licenses/MIT
 */
var menu_width="";
jQuery(function($){
    jQuery('.search-icon > i').click(function(){
        jQuery(".serach_outer").slideDown(700);  
    });

    jQuery('.closepop i').click(function(){
        jQuery(".serach_outer").slideUp(700);
    });
    menu_width=parseInt(jQuery("#menu-width").text().trim());
    document.getElementById("open_nav").addEventListener("click", open);
        function open() {
            document.getElementById("sidebar1").style.width = menu_width + "px";
            document.getElementById("sidebar1").style.display = "block";
    }
    document.getElementById("close_nav").addEventListener("click", close);
        function close() {
             document.getElementById("sidebar1").style.width = "0";
            document.getElementById("sidebar1").style.display = "none";
    }
});

/* Mobile responsive Menu*/

function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}


openAllPanels = function(aId) {
  console.log("setAllPanelOpen");
  jQuery(aId + ' .panel-collapse:not(".in")').collapse('show');
}
closeAllPanels = function(aId) {
  console.log("setAllPanelclose");
  jQuery(aId + ' .panel-collapse.in').collapse('hide');
}

jQuery(function() {
  //----- OPEN
  jQuery('[data-popup-open]').on('click', function(e) {
    var targeted_popup_class = jQuery(this).attr('data-popup-open');
    jQuery('[data-popup="' + targeted_popup_class + '"]').fadeIn(350);

    e.preventDefault();
  });

  //----- CLOSE
  jQuery('[data-popup-close]').on('click', function(e) {
    var targeted_popup_class = jQuery(this).attr('data-popup-close');
    jQuery('[data-popup="' + targeted_popup_class + '"]').fadeOut(350);

    e.preventDefault();
  });
});
  
jQuery('document').ready(function(){

   
    var services_loop="";
    var feature_loop="";
    var project_loop="";
    var records_loop="";
    var plan_loop="";
    var testi_loop="";
    var product_loop="";
    var team_loop="";
    var news_loop="";
    var partner_loop="";
  
    if(jQuery("#services-loop").text()=='true')
    {
      services_loop=true;
    }else{
      services_loop=false;
    }

    if(jQuery("#feature-loop").text()=='true')
    {
      feature_loop=true;
    }else{
      feature_loop=false;
    }

    if(jQuery("#projects-loop").text()=='true')
    {
      project_loop=true;
    }else{
      project_loop=false;
    }

    if(jQuery("#records-loop").text()=='true')
    {
      records_loop=true;
    }else{
      records_loop=false;
    }
    if(jQuery("#plan-loop").text()=='true')
    {
      plan_loop=true;
    }else{
      plan_loop=false;
    }

    if(jQuery("#testimonial-loop").text()=='true')
    {
      testi_loop=true;
    }else{
      testi_loop=false;
    }
    if(jQuery("#products-loop").text()=='true')
    {
      product_loop=true;
    }else{
      product_loop=false;
    }
    if(jQuery("#team-loop").text()=='true')
    {
      team_loop=true;
    }else{
      team_loop=false;
    }
    if(jQuery("#news-loop").text()=='true')
    {
      news_loop=true;
    }else{
      news_loop=false;
    }
    if(jQuery("#partners-loop").text()=='true')
    {
      partner_loop=true;
    }else{
      partner_loop=false;
    }


    var owl = jQuery('#our-services .owl-carousel');
      owl.owlCarousel({
      margin: 20,
      nav:true,
      autoplay : true,
      lazyLoad: true,
      autoplayTimeout: 5000,
      loop: services_loop,
      dots: false,
      autoplayHoverPause:true,
      navText : ['<i class="fa fa-chevron-left" aria-hidden="true"></i>','<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
      responsive: {
        0: {
          items: 1
        },
        320: {
          items: 1
        },
        500: {
          items: 2
        },
        600: {
          items: 2
        },
        800: {
          items: 2
        },
        900: {
          items: 2
        },
        1000: {
          items: 2
        },
        1100: {
          items: 3
        }
      },
      autoplayHoverPause : true,
      mouseDrag: true
    });


    var owl = jQuery('#our-features .owl-carousel');
      owl.owlCarousel({
      margin: 20,
      nav:false,
      autoplay : true,
      lazyLoad: true,
      autoplayTimeout: 5000,
      loop: feature_loop,
      dots: true,
      autoplayHoverPause:true,
      navText : ['<i class="fa fa-chevron-left" aria-hidden="true"></i>','<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
      responsive: {
        0: {
          items: 1
        },
        500: {
          items: 1
        },
        600: {
          items: 2
        },
        700: {
          items: 2
        },
        900: {
          items: 2
        },
        1000: {
          items: 3
        }
      },
      autoplayHoverPause : true,
      mouseDrag: true
    });

    var owl = jQuery('#our-projects .owl-carousel');
      owl.owlCarousel({
      margin: 20,
      nav:true,
      autoplay : true,
      lazyLoad: true,
      autoplayTimeout: 5000,
      loop: project_loop,
      dots: false,
      autoplayHoverPause:true,
      navText : ['<i class="fa fa-chevron-left" aria-hidden="true"></i>','<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
      responsive: {
        0: {
          items: 1
        },
        500: {
          items: 1
        },
        600: {
          items: 2
        },
        800: {
          items: 3
        },
        900: {
          items: 2
        },
        1000: {
          items: 3
        },
        1100: {
          items: 3
        }
      },
      autoplayHoverPause : true,
      mouseDrag: true
    });

    var owl = jQuery('#our-records .owl-carousel');
      owl.owlCarousel({
      margin: 20,
      nav:false,
      autoplay : true,
      lazyLoad: true,
      autoplayTimeout: 5000,
      loop: records_loop,
      dots: true,
      autoplayHoverPause:true,
      navText : ['<i class="fa fa-chevron-left" aria-hidden="true"></i>','<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
      responsive: {
        0: {
          items: 1
        },
        320: {
          items: 1
        },
        500: {
          items: 2
        },
        600: {
          items: 2
        },
        800: {
          items: 3
        },
        900: {
          items: 3
        },
        1000: {
          items: 4
        }
      },
      autoplayHoverPause : true,
      mouseDrag: true
    });

    var owl = jQuery('#pricing-plan .owl-carousel');
      owl.owlCarousel({
      margin: 20,
      nav:true,
      autoplay : true,
      lazyLoad: true,
      autoplayTimeout: 5000,
      loop: plan_loop,
      dots: false,
      autoplayHoverPause:true,
      navText : ['<i class="fa fa-chevron-left" aria-hidden="true"></i>','<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
      responsive: {
        0: {
          items: 1
        },
        320: {
          items: 1
        },
        500: {
          items: 1
        },
        600: {
          items: 2
        },
        800: {
          items: 2
        },
        900: {
          items: 2
        },
        1000: {
          items: 3
        }
      },
      autoplayHoverPause : true,
      mouseDrag: true
    });

    var owl = jQuery('#testimonial-video .owl-carousel');
      owl.owlCarousel({
      margin: 25,
      nav: false,
      autoplay : true,
      lazyLoad: true,
      autoplayTimeout: 5000,
      loop: testi_loop,
      dots: true,
      autoplayHoverPause:true,
      navText : ['<i class="fa fa-chevron-left" aria-hidden="true"></i>','<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 1
        },
        650: {
          items: 1
        },
        1000: {
          items: 1
        }
      },
      autoplayHoverPause : true,
      mouseDrag: true
    }); 

    var owl = jQuery('#our-products .owl-carousel');
      owl.owlCarousel({
      margin: 20,
      nav:true,
      autoplay : true,
      lazyLoad: true,
      autoplayTimeout: 5000,
      loop: product_loop,
      dots: false,
      autoplayHoverPause:true,
      navText : ['<i class="fa fa-chevron-left" aria-hidden="true"></i>','<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
      responsive: {
        0: {
          items: 1
        },
        320: {
          items: 1
        },
        500: {
          items: 2
        },
        600: {
          items: 2
        },
        800: {
          items: 3
        },
        900: {
          items: 3
        },
        1000: {
          items: 4
        }
      },
      autoplayHoverPause : true,
      mouseDrag: true
    });

    var owl = jQuery('#our-team .owl-carousel');
      owl.owlCarousel({
      margin: 20,
      nav:true,
      autoplay : true,
      lazyLoad: true,
      autoplayTimeout: 5000,
      loop: team_loop,
      dots: false,
      autoplayHoverPause:true,
      navText : ['<i class="fa fa-chevron-left" aria-hidden="true"></i>','<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
      responsive: {
        0: {
          items: 1
        },
        320: {
          items: 1
        },
        500: {
          items: 1
        },
        600: {
          items: 2
        },
        800: {
          items: 1
        },
        900: {
          items: 1
        },
        1000: {
          items: 2
        }
      },
      autoplayHoverPause : true,
      mouseDrag: true
    });

    var owl = jQuery('#latest-news .owl-carousel');
      owl.owlCarousel({
      margin: 20,
      nav:false,
      autoplay : true,
      lazyLoad: true,
      autoplayTimeout: 5000,
      loop: news_loop,
      dots: true,
      autoplayHoverPause:true,
      navText : ['<i class="fa fa-chevron-left" aria-hidden="true"></i>','<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
      responsive: {
        0: {
          items: 1
        },
        320: {
          items: 1
        },
        500: {
          items: 2
        },
        600: {
          items: 2
        },
        800: {
          items: 2
        },
        900: {
          items: 3
        },
        1000: {
          items: 3
        }
      },
      autoplayHoverPause : true,
      mouseDrag: true
    });

    var owl = jQuery('#footer .owl-carousel');
      owl.owlCarousel({
      margin: 20,
      nav:false,
      autoplay : true,
      lazyLoad: true,
      autoplayTimeout: 5000,
      loop: partner_loop,
      dots: true,
      autoplayHoverPause:true,
      navText : ['<i class="fa fa-chevron-left" aria-hidden="true"></i>','<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
      responsive: {
        0: {
          items: 1
        },
        320: {
          items: 1
        },
        500: {
          items: 2
        },
        600: {
          items: 2
        },
        800: {
          items: 3
        },
        900: {
          items: 3
        },
        1000: {
          items: 6
        }
      },
      autoplayHoverPause : true,
      mouseDrag: true
    });
    
    new WOW().init();

  jQuery('#our-services .owl-nav .owl-next').append('<span class="testimonial-dots">nav</span>');
  jQuery('#our-services .owl-nav .owl-prev').append('<span class="testimonial-dots">nav</span>');
  
  jQuery('#our-features .owl-nav .owl-next').append('<span class="testimonial-dots">nav</span>');
  jQuery('#our-features .owl-nav .owl-prev').append('<span class="testimonial-dots">nav</span>');
  
  jQuery('#our-projects .owl-nav .owl-next').append('<span class="testimonial-dots">nav</span>');
  jQuery('#our-projects .owl-nav .owl-prev').append('<span class="testimonial-dots">nav</span>');

  jQuery('#our-records .owl-nav .owl-next').append('<span class="testimonial-dots">nav</span>');
  jQuery('#our-records .owl-nav .owl-prev').append('<span class="testimonial-dots">nav</span>');
 
  jQuery('#pricing-plan .owl-nav .owl-next').append('<span class="testimonial-dots">nav</span>');
  jQuery('#pricing-plan .owl-nav .owl-prev').append('<span class="testimonial-dots">nav</span>');
  
  jQuery('#testimonial-video .owl-nav .owl-next').append('<span class="testimonial-dots">nav</span>');
  jQuery('#testimonial-video .owl-nav .owl-prev').append('<span class="testimonial-dots">nav</span>');
  jQuery('#testimonial-video .owl-dots .owl-dot').append('<span class="testimonial-dots">dots</span>');

  jQuery('#our-products .owl-nav .owl-next').append('<span class="testimonial-dots">nav</span>');
  jQuery('#our-products .owl-nav .owl-prev').append('<span class="testimonial-dots">nav</span>');
  
  jQuery('#our-team .owl-nav .owl-next').append('<span class="testimonial-dots">nav</span>');
  jQuery('#our-team .owl-nav .owl-prev').append('<span class="testimonial-dots">nav</span>');
  
  jQuery('#latest-news .owl-nav .owl-next').append('<span class="testimonial-dots">nav</span>');
  jQuery('#latest-news .owl-nav .owl-prev').append('<span class="testimonial-dots">nav</span>');
  
  jQuery('#our-partners .owl-nav .owl-next').append('<span class="testimonial-dots">nav</span>');
  jQuery('#our-partners .owl-nav .owl-prev').append('<span class="testimonial-dots">nav</span>');
  
  jQuery('#footer_box .owl-nav .owl-next').append('<span class="testimonial-dots">nav</span>');
  jQuery('#footer_box .owl-nav .owl-prev').append('<span class="testimonial-dots">nav</span>');
});


var interval=null;
function show_loading_box()
{
  jQuery(".spinner-loading-box").css("display","none");
  clearInterval(interval);
}
jQuery('document').ready(function(){
  
  interval = setInterval(show_loading_box,1000);

  jQuery('.count').each(function () {
      jQuery(this).prop('Counter',0).animate({
          Counter: jQuery(this).text()
      }, {
          duration: 8000,
          easing: 'swing',
          step: function (now) {
             jQuery(this).text(Math.ceil(now));
          }
      });
  });     

  // ------------ Scroll Top ---------------

  jQuery(window).scroll(function() {
    if (jQuery(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
      jQuery('#return-to-top').fadeIn(200);    // Fade in the arrow
    } else {
      jQuery('#return-to-top').fadeOut(200);   // Else fade out the arrow
    }
  });
  jQuery('#return-to-top').click(function() {      // When arrow is clicked
    jQuery('body,html').animate({
      scrollTop : 0                       // Scroll to top of body
    }, 2000);
  });

  jQuery('#workout-timing .workout-tabs ul li a').click(function()
  {
    jQuery('#workout-timing .workout-tabs ul li a').removeClass('active');
  });
  
  jQuery('#our-products .cart a').text('');
  jQuery('#our-products .cart a').append('<i class="fas fa-shopping-basket"></i>');

  // ------------ Video Popup ----------
  jQuery('#myBtn').click(function()
  {
    jQuery("#myNewModal").css("display","block");

  });
  jQuery('.close-one').click(function()
  {
    jQuery("#myNewModal").css("display","none");

  });

  jQuery('#why-choose-us .why-tabs li a').click(function()
  {
    jQuery('#why-choose-us .why-tabs li a').removeClass('active');
  });

  jQuery('#appointment .wpcf7-form-control-wrap textarea').parent('span').addClass('app-textarea');

  var stickyon=jQuery('#sticky-onoff').text().trim();
  var a1=stickyon.length;
  //alert(a1);
  window.onscroll = function() {
    if(a1==3){
      myScrollNav();
    }
    
  }

  var navbar = document.getElementById("sticky-menu-box");
  var sticky = jQuery( navbar ).offset().top;
  function myScrollNav() {
    // alert("Hii");
    if (window.pageYOffset > sticky) {
      //alert(window.pageYOffset);
      navbar.classList.add("sticky");
      
    } else {
      navbar.classList.remove("sticky");
      
    }
  }

  // ------ Counter -------
  var count_no="yes";
  jQuery('#our-records').on('appear',function(){
    if(count_no=="yes")
    {
      count_no="no";
      jQuery('.count').each(function () {
        jQuery(this).prop('Counter',0).animate({
            Counter: jQuery(this).text()
        }, {
            duration: 8000,
            easing: 'swing',
            step: function (now) {
               jQuery(this).text(Math.ceil(now));
            }
        });
      });
    }
  });     
  jQuery('#our-records').appear();

  jQuery('.services-short').parent().addClass('services-short-page');
  jQuery('.short-projects').parent().addClass('projects-short-page');

  jQuery("h4.num-text").html(function(){
    var text1= jQuery(this).text().trim().split(" ");
    console.log(text1, "my text")
    var last = text1[1];
    var l = text1.length;
    var ninth = text1[2];
    var endlast = text1[l-1];
    text1.splice(1,1)
    if(text1.length > 0 ){
      var updatedText = `<span class='last_slide_head'>${last}</span>`
      text1.splice(1, 0, updatedText)
    text1.splice(2,1);
    var updatedText2 = `<span class='last_slide_head'>${ninth}</span>`
    text1.splice(2, 0, updatedText2)
      return text1.join(" ");
    }else{
      return text1.join(" ");
    }
  });
});

(function ($) {
    wp.customize("logo_alignment", function(value) {
        value.bind(function(newval) {
            console.log("Logo Alignment: "+newval);
        });
        value.bind("saved", function() { 
            console.log("Saved!");
        })

        this.selectiveRefresh.bind("render-partials-response", function(response) {
            // Issue it partially here. The response of the triggered event. 
            // However the data has been acquired before the ajax was able to finish updating the database.
            console.log(response);
        });
    });


})(jQuery);