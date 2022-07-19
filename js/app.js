// Add fixed-top class to the navbar when scrolling past the banner
$(document).ready(function () {
  $(window).scroll(function () {
    if ($(window).scrollTop() > 73) {
      $(".navbar").addClass("fixed-top");
    } else {
      $(".navbar").removeClass("fixed-top");
    }
  });
});
