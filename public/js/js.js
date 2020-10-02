// var topNav = document.getElementById("topNav"),
//   stop = topNav.offsetTop,
//   docBody = document.documentElement || document.body.parentNode || document.body,
//   hasOffset = window.pageYOffset !== undefined,
//   scrollTop;

// window.onscroll = function(e) {
//   scrollTop = hasOffset ? window.pageYOffset : docBody.scrollTop;
//   if (scrollTop >= stop) {
//     topNav.className = 'sticky-nav';
//   } else {
//     topNav.className = '';
//   }
// }


// $('body').css('padding-top', $('.navbar').outerHeight() + 'px')
// if ($('.smart-scroll').length > 0) {
//     var last_scroll_top = 0;
//     $(window).on('scroll', function() {
//         scroll_top = $(this).scrollTop();
//         if(scroll_top < last_scroll_top) {
//             $('.smart-scroll').removeClass('scrolled-down').addClass('scrolled-up');
//         }
//         else {
//             $('.smart-scroll').removeClass('scrolled-up').addClass('scrolled-down');
//         }
//         last_scroll_top = scroll_top;
//     });
// }


var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
  var currentScrollpos = window.pageYOffset;
  if(prevScrollpos > currentScrollpos) {
    document.getElementById("navbar").style.top = "0px";
} else {
    document.getElementById("navbar").style.top = "-180px";
}
prevScrollpos = currentScrollpos;
}



$(document).ready(function () {
  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      $('.scroll-top').fadeIn();
    } else {
      $('.scroll-top').fadeOut();
    }
  });

  $('.scroll-top').click(function () {
    $("html, body").animate({
      scrollTop: 0
    }, 100);
      return false;
  });

});




$('.home-card-carousel').owlCarousel({
    loop:false,
    margin:15,
    nav:false,
    dots:false,
    items:1,
    rewind: true,
    autoplay:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
})






// read more js
$(document).ready(function () {
    $(".read-more-btn").click(function () {
        $(this).prev().slideToggle();
        if ($(this).text() == "Read More") {
            $(this).text("Read Less");
        } else {
            $(this).text("Read More");
        }
    });
});




$('.publication-carousel').owlCarousel({
    loop:false,
    margin:10,
    nav:true,
    items:1,
    rewind: true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:2
        }
    }
})






function myFunction(imgs) {
  // Get the expanded image
  var expandImg = document.getElementById("expandedImg");
  // Get the image text
  var imgText = document.getElementById("imgtext");
  // Use the same src in the expanded image as the image being clicked on from the grid
  expandImg.src = imgs.src;
  // Use the value of the alt attribute of the clickable image as text inside the expanded image
  imgText.innerHTML = imgs.alt;
  // Show the container element (hidden with CSS)
  expandImg.parentElement.style.display = "block";
}






// thumb hover effect
var view = function(e){
    $(".preview").html( $("<img>").attr("src", $(e.target).attr("rel")) );
};

$("img.zoom").mouseover(view);
view({target: $("img.zoom")[0]});

