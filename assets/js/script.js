$(function() {

    $(window).on("scroll", function () {
        if ($(window).width() > 319) {
            if ($(window).scrollTop() > 200) {
                $("header").addClass("fixed-top");
            } else {

             $("header").removeClass("fixed-top");
            }
        }
    });

   $("nav.navbar .close-btn").on("click", function () {
        $("nav.navbar .navbar-collapse").removeClass("show");
    });

   


/** OwlCarousel **/

$('#banner-carousel').owlCarousel({
    nav:true,
    navText: ["<span class=prev></span>","<span class=next></span>"],
    loop: true,
    margin: 15,
    dots:true,
    autoplay:true,
    autoplayTimeout:4000,
    autoplayHoverPause:true,
    responsiveClass: true,
    responsive:{
        0:{
            items:1
        },
        800:{
            items:1
        },
        1200:{
            items:1
        }
    }
});

$('#product-carousel').owlCarousel({
    loop: true,
    margin: 20,
    navText: ['<svg width="10px" height="20px" viewBox="0 0 11 20"><path style="fill:none;stroke-width: 3px;stroke: #fff;" d="M9.554,1.001l-8.607,8.607l8.607,8.606"/></svg>', '<svg width="10px" height="20px" viewBox="0 0 11 20" version="1.1"><path style="fill:none;stroke-width: 3px;stroke: #fff;" d="M1.054,18.214l8.606,-8.606l-8.606,-8.607"/></svg>'],
    nav: true,
    dots: false,
    autoplay:false,
    responsiveClass: true,
    responsive:{
        0:{
            items:1,
            stagePadding: 70, 
            margin:20
        },
        600:{
            items:2,
            stagePadding: 100, 
            margin:20
        },
        1400:{
            items:3,
            stagePadding: 120, 
            margin:20
        }
    }
  });

/** OwlCarousel **/

AOS.init({
      duration: 1500
   });

});
/* ss */
$(function() {
   $('a[href*=\\#]:not([href=\\#])').on('click', function() {
       var target = $(this.hash);
       target = target.length ? target : $('[name=' + this.hash.substr(1) +']');
       console.log(target.length);
       if (target.length) {

        $('.header a').removeClass('active');
        $(this).addClass('active');
           $('html,body').animate({
               scrollTop: target.offset().top
           }, 1000);
           $('.navbar-collapse.in').collapse('hide');
        $('.navbar-collapse.show').collapse('hide');
           return false;
       }
   });
}); 

