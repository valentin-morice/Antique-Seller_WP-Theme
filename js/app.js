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

// Listen to Subcategory Select on category.php
let subcategory;
$("#selectSubcategories").change(function () {
  subcategory = $(this).val();
  console.log(subcategory);
  if (subcategory) {
    $("#searchSubcategories").on("click", function () {
      window.location.href =
        document.location.origin + "/category/" + subcategory;
    });
  }
});

// Activate Button Only if a Subcategory is Selected
if (subcategory) {
  $("#searchSubcategories").on("click", function () {
    window.location.href = "http://stackoverflow.com";
  });
}
