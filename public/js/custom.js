
// dropdown-menu
var w = window.innerWidth;
if(w > 768) {
    $('.navbar-nav-dropdown li.has-children').hover(function(){
        if ($('.navbar-nav-dropdown:hover li.has-children').length > 0) {
            $(this).children('ul').stop(true, false, true).slideDown(400);
            $(this).siblings().find('ul').slideUp(400);
        } else {
            $(this).children('ul').stop(true, false, true).slideUp(400);
        }
    });
} else if(w <= 768) {
    $('.navbar-nav-dropdown li.has-children > a').click(function(){
        $(this).parent().children('ul').stop(true,false,true).slideToggle(400);
    });
};

$(document).click(function(e) {
    var target = $(e.target);

    if( !target.is('.navbar-nav-dropdown') && target.closest('.navbar-nav-dropdown').length === 0 ) {
        // click was not on or inside #panel
        $('.navbar-nav-dropdown li.has-children').children('ul').stop(true, false, true).slideUp(400);
    }
});

$(document).ready(function(){



    $('.navbar-nav-dropdown li.has-children-onClick > a').click(function(){
      $(this).parent().children('ul').stop(true,false,true).fadeToggle(400);
    });

    // navbar scroll
    $(window).scroll(function() {
      if ($(".navbar").offset().top > 50) {
          $(".navbar-fixed-top").addClass("top-nav-collapse");
          $(".navbar-fixed-top").addClass("bg-navbar");
          $(".dropdown-menu").removeClass("dropdown-menu-opacity");
      } else {
          $(".navbar-fixed-top").removeClass("top-nav-collapse");
          $(".navbar-fixed-top").removeClass("bg-navbar");
          $(".dropdown-menu").addClass("dropdown-menu-opacity");
      }
    });

    // slick
    $('.multiple-items').slick({
        infinite: true,
        slidesToShow: 5,
        slidesToScroll: 5,
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2,
            }
          },
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2,
            }
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
            }
          }
        ]
      });
      $('.multiple-items-3').slick({
          infinite: true,
          slidesToShow: 3,
          slidesToScroll: 3,
          responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
              }
            },
            {
              breakpoint: 768,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
              }
            },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
              }
            }
          ]
        });
    $(".slider").slick({
          dots: true,
          infinite: true,
          slidesToShow: 1,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 3000
        });

    // reply
    $("#showToggle").click(function(){
        $("#thisToggle").slideToggle("slow");
    });
    $("#showToggle-r").click(function(){
        $("#thisToggle-r").slideToggle("slow");
    });

    //mansory
    $('.grid').masonry({
      itemSelector: '.grid-item',
      columnWidth: '.grid-sizer',
      percentPosition: true
    });

    //lightcase
    $('a[data-rel^=lightcase]').lightcase({
      transition: 'fade'
    });

    $('#accordion .panel').hover(function() {
      $(this).find(".accordion-toggle .indicator").removeClass("glyphicon-chevron-down").addClass("glyphicon-chevron-up");
      $(this).find(".panel-collapse").collapse("show");
    }, function() {
      var $collapse = $(this).find(".panel-collapse");
      $(this).find(".accordion-toggle .indicator").addClass("glyphicon-chevron-down").removeClass("glyphicon-chevron-up");
        setTimeout(function(){
        $collapse.collapse("hide");
      },50);
    });

    // function
    function giveLove(elmnt) {
      // if(elmnt.className == "fa-heart-o"){
      //   elmnt.removeClass("fa-heart-o");
      //   elmnt.addClass("fa-heart");
      // }
      alert(elmnt.className);
    }

    // init Masonry
    var $grid = $('.grid').masonry({
      itemSelector: '.grid-item',
      percentPosition: true,
      columnWidth: '.grid-sizer'
    });
    // layout Masonry after each image loads
    $grid.imagesLoaded().progress( function() {
      $grid.masonry();
    });
});
