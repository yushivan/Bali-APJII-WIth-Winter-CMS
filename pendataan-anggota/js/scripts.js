$(function () {
  if (window.pageYOffset == 0) {
    $(".logo-putih").addClass("display-none");
  }
  $(window).scroll(function () {
    var top_offset = $(window).scrollTop();
    if (top_offset > 50) {
      $(".header").addClass("header-blue");
      $(".logo-biru").addClass("display-none");
      $(".logo-putih").removeClass("display-none");
    } else {
      $(".header").removeClass("header-blue");
      $(".logo-biru").removeClass("display-none");
      $(".logo-putih").addClass("display-none");
    }
  });
});