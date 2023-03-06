jQuery(document).ready(function($){

    // menu
    $('.menu-trigger').click(function(){
        $('.mobile-menu').slideToggle()
    });

    $('.menu-trigger').click(function(){
        $('.mobile-menu').toggleClass('active')
        $(this).toggleClass('active')
    });

    // scrolled-top-sec
    const header = $(".header-sec"); 

    $(window).scroll(function(){
        if($(window).scrollTop()>15){
            header.addClass('scrolled')
        }
        else{
            header.removeClass('scrolled')
        }
    });

    // body-height
    var headerHeight = $('.header-sec').outerHeight()
    $("body").css("padding-top", headerHeight);

    // fitvid js
    $("body").fitVids();

    // preloader
    var loader = document.getElementById('preloader');
    window.addEventListener('load', function(){
        loader.style.display =('none');
    });

   // go-top
   $("body").prepend('<div class="go-top"><i class="fa-solid fa-angle-up"></i></div>');
   $(window).scroll(function(){
       if($(window).scrollTop() > 200){
           $(".go-top").fadeIn();
       }else{
           $(".go-top").fadeOut();
       }
   });
   $(".go-top").on('click', function(){
       $("body, html").animate({scrollTop:0}, 999);
   });

    

    

    
    
});