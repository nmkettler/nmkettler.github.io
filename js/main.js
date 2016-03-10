$(window).scroll( function(){

  //get scroll position
  var topWindow = $(window).scrollTop();
  //multipl by 1.5 so the arrow will become transparent half-way up the page
  var topWindow = topWindow * 1.5;
  
  //get height of window
  var windowHeight = $(window).height();
      
  //set position as percentage of how far the user has scrolled 
  var position = topWindow / windowHeight;
  //invert the percentage
  position = 1 - position;

  //define arrow opacity as based on how far up the page the user has scrolled
  //no scrolling = 1, half-way up the page = 0
  $('.arrow-wrap').css('opacity', position);

});

$(function(){
  $('#contact').click(function(){
    $('html, body').animate({
      scrollTop: $(".content-space-two").offset().top
    }, 2000);
  });
});

//Back to top scrolling

$(function(){
  var offset = 120;
  var duration = 500;
  jQuery(window).scroll(function() {
    if (jQuery(this).scrollTop() > offset) {
      jQuery('.back-to-top').fadeIn(duration);
      jQuery('.scroll-down').fadeOut(duration);
    } else {
      jQuery('.back-to-top').fadeOut(duration);
      jQuery('.scroll-down').fadeIn(duration);
    }
  });

  jQuery('.back-to-top').click(function(event) {
    event.preventDefault();
    jQuery('html, body').animate({
      scrollTop: 0
    }, duration);
    return false;
  })
});	

//Smooth Scrolling

$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});

//Ham Menu Animation
$(function(){
        $(".navbar-toggle").on("click", function () {
            $(this).toggleClass("active");
            $('.mobileLogo').attr('src','css/photos/pcLogo.png');
        });
    });

//Change color of Ham menu on click

$(function(){
  $('.navbar-toggle').click(function(){
    $('.navbar').css('background-color', 'rgba(255,255,255,0.7)');
    $('.navbar-default .navbar-nav li a ').css('color', 'black');
    $(".icon-bar").css('background-color', 'black');                    
  });
});

//Project Images hover over effects
$(document).ready(function(){
	$('.gallery-item').hover(function(){
	            $(this).find('h5, p').stop().animate({
	                opacity: '1',              
	                marginLeft: '375px',
	            }, 300);
	        }, function(){
	            $(this).find('h5, p').stop().animate({
	                opacity: '0',              
	                marginLeft: '0px'
	            }, 100);
	        });

});


//Change Nav color on scroll

$(document).ready(function(){
    var duration = 500;
    var scroll_start = 0;
    var startchange = $('#startchange');
    var offset = startchange.offset();
    if ($(window).width() > 768) {
      if(startchange.length){
        $(document).scroll(function(){
          scroll_start = $(this).scrollTop();
          if(scroll_start > offset.top) {
            $(".navbar-default").css('background-color', 'rgba(255,255,255,0.7)');
            $(".navbar-default .navbar-nav li a").css('color', 'rgba(0,0,0,0.7)');          
          } else {
            $('.navbar-default').css('background-color', 'transparent');
            $(".navbar-default .navbar-nav li a").css('color', 'rgb(255,255,255)');          
          }
        });
      }
      }else if ($(window).width() < 768) {
      $('.navbar-default').css('background-color', 'transparent'); //color of mobile menu
      if(startchange.length){
        $(document).scroll(function(){
          scroll_start = $(this).scrollTop();
          if(scroll_start > offset.top) {
            $(".navbar-default").css('background-color', 'rgba(255,255,255,0.7)');
            $(".navbar-default .navbar-nav li a").css('color', 'rgba(0,0,0,0.7)');
            $(".icon-bar").css('background-color', 'black');                    
          } else {
            $('.navbar-default').css('background-color', 'transparent');
            $(".navbar-default .navbar-nav li a").css('color', 'rgb(255,255,255)');  
            $(".icon-bar").css('background-color', 'white');                            
          }
        });
      }
    } 
  });

//Submit Button Action

$(function(){
  $('#commentSubmit').on("click", function(){
    alert('Thank you!');
  });
});

//Input/Textarea of comment form effects

$(function() {
    $("input:text, #comment").focus(function(){
        $(this).css({'background-color' : 'rgba(0,0,0,0.7)'});
    });

    $("input:text, #comment").blur(function(){
        $(this).css({'background-color' : 'rgba(128,128,128,0.7)'});
    });
});

