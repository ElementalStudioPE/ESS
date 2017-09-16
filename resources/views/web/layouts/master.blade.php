<!DOCTYPE html>
<html lang="es">
<head>
 <title>Elemental Studio</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta name="description" content="">
 <meta name="author" content="">
 <!-- Favicon -->
 <link rel="shortcut icon" href="img/favicon.png">
 <!-- Web Fonts -->
 <link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">
 <!-- CSS Global Compulsory -->
 <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
 <link rel="stylesheet" href="{{asset('css/style.css')}}">
 <!-- CSS Header and Footer -->
 <link rel="stylesheet" href="{{asset('css/header-v6.css')}}">
 <link rel="stylesheet" href="{{asset('css/footer-v6.css')}}">
 <!-- CSS Implementing Plugins -->
 <link rel="stylesheet" href="{{asset('css/animate.css')}}">
 <link rel="stylesheet" href="{{asset('css/line-icons.css')}}">
 <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome/css/font-awesome.css')}}">
 <link rel="stylesheet" href="{{asset('css/cubeportfolio.min.css')}}">
 <link rel="stylesheet" href="{{asset('css/custom-cubeportfolio.css')}}">
 <link rel="stylesheet" href="{{asset('css/animated-headline.css')}}">
 <!-- CSS Theme -->
 <link rel="stylesheet" href="{{asset('css/default.css" id="style_color')}}">
 <link rel="stylesheet" href="{{asset('css/dark.css')}}">

 <link rel="stylesheet" href="{{asset('css/sky-forms.css')}}">
 <link rel="stylesheet" href="{{asset('css/custom-sky-forms.css')}}">
 <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
 <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">

 
 <!-- CSS Customization -->
 <link rel="stylesheet" href="{{asset('css/custom.css')}}">
 <script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
</head>
<body class="header-fixed">

  @include('web.layouts.nav')


  @yield('content')


  @include('web.layouts.footer')



</body>

<!-- JS Global Compulsory -->
<script type="text/javascript" src="{{asset('js/jquery-migrate.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<!-- JS Implementing js -->
<script type="text/javascript" src="{{asset('js/back-to-top.js')}}"></script>
<script type="text/javascript" src="{{asset('js/smoothScroll.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.parallax.js')}}"></script>
<script type="text/javascript" src="{{asset('js/waypoints.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.counterup.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/wow.min.js')}}"></script>
<script src="{{asset('js/modernizr.js')}}"></script>
<script src="{{asset('js/jquery.easing.min.js')}}"></script>
<script src="{{asset('js/animated-headline.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.cubeportfolio.min.js')}}"></script>
<!-- JS Customization -->
<script type="text/javascript" src="{{asset('js/custom.js')}}"></script>
<!-- JS Page Level -->
<script type="text/javascript" src="{{asset('js/app.js')}}"></script>
<script type="text/javascript" src="{{asset('js/cube-portfolio-lightbox.js')}}"></script>
<script type="text/javascript" src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/google-map.js')}}"></script>
<script type="text/javascript">
 jQuery(document).ready(function() {
  App.init();
  new WOW().init();
  App.initCounter();
  App.initParallaxBg();
});
</script>
<script>
               // Google Map
               function initMap() {
                GoogleMap.initGoogleMap();
                GoogleMap.initPanorama1();
                GoogleMap.initPanorama2();
              }
            </script>

            <script>
             $(document).ready(function(){
              $('#carousel-footer').owlCarousel({
               loop:true,
               margin:10,
               dots: true,
               autoplay:true,
               responsiveClass:true,
               responsive:{
                 0:{
                   items:2,
                   nav:false
                 },
                 600:{
                   items:3,
                   nav:false,
                   slideBy: 3
                 },
                 1000:{
                   items:5,
                   nav:false,
                   autoplayTimeout:4300,
                   loop:true,
                   slideBy: 5
                 }
               }
             });
            });
          </script>


          <script>
            $(document).ready(function(){
             $('#carousel-logos').owlCarousel({
               navText: ["<i class='fa fa-long-arrow-left'></i>", "<i class='fa fa-long-arrow-right'></i>"],
               loop:true,
               autoplay:true,
               margin:10,
               responsiveClass:true,
               responsive:{
                0:{
                  items:1,
                  autoplayTimeout:5000,
                  nav:true
                },
                600:{
                  items:1,
                  autoplayTimeout:5000,
                  nav:false
                },
                1000:{
                  items:1,
                  nav:true,
                  autoplayTimeout:5000,
                  loop:true
                }
              }
            });
           });


         </script>

         <script>
          $(function() {
            $('.page-scroll a').bind('click', function(event) {
              var $anchor = $(this);

              if (  $(window).width() < 767 ) {

                if ($anchor.attr('id') == 'a-quienes-somos') {

                  $('html, body').stop().animate({
                    scrollTop: $($anchor.attr('href')).offset().top - 18
                  }, 1500, 'easeInOutExpo');
                  $('.navbar-toggle').click();

                }

                else if ($anchor.attr('id') == 'a-contacto') {

                  $('html, body').stop().animate({
                    scrollTop: $($anchor.attr('href')).offset().top - 84
                  }, 1500, 'easeInOutExpo');
                  $('.navbar-toggle').click();

                }


                else if ($anchor.attr('id') == 'a-clientes') {

                  $('html, body').stop().animate({
                    scrollTop: $($anchor.attr('href')).offset().top - 84
                  }, 1500, 'easeInOutExpo');
                  $('.navbar-toggle').click();

                }

                else if ($anchor.attr('id') == 'a-portafolio') {

                  $('html, body').stop().animate({
                    scrollTop: $($anchor.attr('href')).offset().top - 86
                  }, 1500, 'easeInOutExpo');
                  $('.navbar-toggle').click();

                }

                else if ($anchor.attr('id') == 'a-servicios') {

                  $('html, body').stop().animate({
                    scrollTop: $($anchor.attr('href')).offset().top - 87
                  }, 1500, 'easeInOutExpo');
                  $('.navbar-toggle').click();

                }
                else{

                  $('html, body').stop().animate({
                    scrollTop: $($anchor.attr('href')).offset().top
                  }, 1500, 'easeInOutExpo');
                  

                }

              }
              else{




                if ($anchor.attr('id') == 'a-quienes-somos') {

                  $('html, body').stop().animate({
                    scrollTop: $($anchor.attr('href')).offset().top - 14
                  }, 1500, 'easeInOutExpo');

                }

                else if ($anchor.attr('id') == 'a-contacto') {

                  $('html, body').stop().animate({
                    scrollTop: $($anchor.attr('href')).offset().top - 84
                  }, 1500, 'easeInOutExpo');

                }


                else if ($anchor.attr('id') == 'a-clientes') {

                  $('html, body').stop().animate({
                    scrollTop: $($anchor.attr('href')).offset().top - 80
                  }, 1500, 'easeInOutExpo');

                }

                else if ($anchor.attr('id') == 'a-portafolio') {

                  $('html, body').stop().animate({
                    scrollTop: $($anchor.attr('href')).offset().top - 80
                  }, 1500, 'easeInOutExpo');

                }

                else if ($anchor.attr('id') == 'a-servicios') {

                  $('html, body').stop().animate({

                    scrollTop: $($anchor.attr('href')).offset().top - 190
                  }, 1500, 'easeInOutExpo');

                }
                else{

                  $('html, body').stop().animate({
                    scrollTop: $($anchor.attr('href')).offset().top
                  }, 1500, 'easeInOutExpo');

                }



              }

              
              
              event.preventDefault();
            });




            $('.page-scroll.scroll-down-style a').bind('click', function(event) {
              var $anchor = $(this);

              if (  $(window).width() < 767 ) {

                $('html, body').stop().animate({
                  scrollTop: $($anchor.attr('href')).offset().top - 18
                }, 1500, 'easeInOutExpo');
                $('.navbar-toggle').click();

              }
              else{

                $('html, body').stop().animate({
                  scrollTop: $($anchor.attr('href')).offset().top - 13
                }, 1500, 'easeInOutExpo');
                $('.navbar-toggle').click();

              }
              
              event.preventDefault();
            });

          });
        </script>

        <script>
          $(function() {
            $('.navbar-toggle').click(function(){
              if ( $('.mega-menu').hasClass('mega-menu-negro') ) {
                $('.mega-menu').removeClass('mega-menu-negro');
              }
              else{
                $('.mega-menu').addClass('mega-menu-negro');
              }
              
            });
          });
        </script>
        </html>