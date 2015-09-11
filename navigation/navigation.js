jQuery(document).ready(function($){
  jQuery(window).scroll(function() {
    var scroll = $(window).scrollTop();
    if (scroll >= 10) {
      $(".menu").addClass("darken");
      $(".menu").removeClass("transparent");
    }
    if (scroll < 10) {
      $(".menu").removeClass("darken");
      $(".menu").addClass("transparent");
    }
  });
});
