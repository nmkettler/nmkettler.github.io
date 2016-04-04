$(document).ready(function(){



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

$(function contactScroll(){
  $('#contact').click(function(){
    $('html, body').animate({
      scrollTop: $(".content-space-two").offset().top
    }, 2000);
  });
});

//Back to top scrolling

$(function backToTop(){
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

$(function smoothScroll() {
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
$(function hamMenuAnimation(){
        $(".navbar-toggle").on("click", function () {
            $(this).toggleClass("active");
            $('.mobileLogo').attr('src','css/photos/pcLogo.png');
        });

      //Change color of Ham menu on click
    $('.navbar-toggle').click(function(){
    $('.navbar').css('background-color', 'rgba(255,255,255,0.7)');
    $('.navbar-default .navbar-nav li a ').css('color', 'black');
    $(".icon-bar").css('background-color', 'black');                    
  });
    
    });

//Project Images hover over effects
 
$(function projectHoverAnimation(){
	if ($(window).width() > 768) {
    $(".gallery-item").hover(function(){
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
    }else if ($(window).width() < 768) {
       $(".gallery-item").hover(function(){
              $(this).find('h5, p').stop().animate({
                  opacity: '1',              
                  marginLeft: '320px',
              }, 300);
          }, function(){
              $(this).find('h5, p').stop().animate({
                  opacity: '0',              
                  marginLeft: '0px'
              }, 100);
          });
    }
});


//What I Love typwriter
$(function typer(){
  $(".typer").typed({
    strings: ["PHP", "Javascript", "Jquery", "MySQL", "Java", "Photoshop", "JSON", "Ajax", "Learning"],
    typeSpeed: 150
  }); 
    });

//Rotate self image
(function rotateImage() {
    var imgs = document.getElementById('imageRotator').getElementsByTagName('img'),
        index = 0;
    imgs[0].style.display = 'block';
    setInterval(function () {
        imgs[index].style.display = 'none';
        index = (index + 1) % imgs.length;
        imgs[index].style.display = 'block';
    }, 1000);
}());
       

//Change Nav color on scroll

$(function navColorChange(){
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
            $(".icon-bar").css('background-color', 'black');             
          } else {
            $('.navbar-default').css('background-color', 'transparent');
            $(".navbar-default .navbar-nav li a").css('color', 'rgb(255,255,255)');
            $(".icon-bar").css('background-color', 'white');             
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




$(function commentForm() {
  //Input/Textarea of comment form effects
    $("input:text, #comment").focus(function(){
        $(this).css({'background-color' : 'rgba(0,0,0,0.7)'});
    });

    $("input:text, #comment").blur(function(){
        $(this).css({'background-color' : 'rgba(128,128,128,0.7)'});
    });

    //Submit button popup
    $('#commentSubmit').on("click", function(){
    alert('Thank you!');
  });
});

//Hover over bold effect of LI, Github, and Resume link
$(function linkIconHover(){
  $(".hov").on({
      mouseenter: function () {
          $('#linkIconGroup p').css("color", "white");
          $('#linkIconGroup p').css("font-weight", "bold");
      },
      mouseleave: function () {
          $('#linkIconGroup p').css("color", "black");
          $('#linkIconGroup p').css("font-weight", "normal");
      }
  });
});

//Acordian project
$(function accordianMenu(){
  $("#accordian h3").click(function(){
    //slide up all the link lists
    $("#accordian ul ul").slideUp();
    //slide down the link list below the h3 clicked - only if its closed
    if(!$(this).next().is(":visible"))
    {
      $(this).next().slideDown();
    }
  });

});

$(function showBox() {
  $("#viewPop").on("click", function(){
    $( "#dialog-message" ).dialog({
      modal: true,
      buttons: {
        Ok: function() {
          $( this ).dialog( "close" );
        }
      }
    });
  });
  });

});



