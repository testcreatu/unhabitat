var topNav = document.getElementById("topNav"),
  stop = topNav.offsetTop,
  docBody = document.documentElement || document.body.parentNode || document.body,
  hasOffset = window.pageYOffset !== undefined,
  scrollTop;

window.onscroll = function(e) {
  scrollTop = hasOffset ? window.pageYOffset : docBody.scrollTop;
  if (scrollTop >= stop) {
    topNav.className = 'sticky-nav';
  } else {
    topNav.className = '';
  }
}




$('.home-card-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})




// sticky sidebar
function sticky_relocate() {
    var window_top = $(window).scrollTop() ;
    var footer_top = $(".none-sticky").offset().top -10;
    var div_top = $('#sticky-anchor').offset().top ;
    var div_height = $(".sidebar").height();
    var leftHeight = $('.left-container').height(); 

    if (window_top + div_height > footer_top){
        $('.sidebar').removeClass('stick');
        $('.sidebar').addClass('abs');
            $('.right-conatainer').css('min-height', leftHeight + 'px');
        }
    else if (window_top > div_top) {
        $('.sidebar').addClass('stick');
        $('.sidebar').removeClass('abs');
    } else {
        $('.sidebar').removeClass('stick');
        $('.sidebar').removeClass('abs');
    }
}

$(function () {
    $(window).scroll(sticky_relocate);
    sticky_relocate();
});