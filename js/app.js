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

// Dynamically Populate Subcategory Dropdown in home.php
$("#selectCategoriesHome").change(function () {
  $("#selectSubcategoriesHome")
    .empty()
    .append('<option value="">--Please choose an option--</option>"');
  cat_ID = $(this).val();
  $.get(
    "http://jurrien.local/wp-json/wp/v2/categories?parent=" + cat_ID,
    function (data) {
      for (i = 0; i < Object.keys(data).length; i++) {
        $("#selectSubcategoriesHome").append(
          '<option value="' +
            data[i]["slug"] +
            '">' +
            data[i]["name"] +
            "</option>"
        );
      }
    }
  );
});

// Activate Button Conditionally on home.php
$("#searchHome").on("click", function () {
  // If Parent Category is Selected But No Subcategory
  if (
    $("#selectCategoriesHome").val() &&
    !$("#selectSubcategoriesHome").val()
  ) {
    $.get(
      "http://jurrien.local/wp-json/wp/v2/categories?include=" +
        $("#selectCategoriesHome").val(),
      function (data) {
        window.location.href =
          document.location.origin + "/category/" + data[0]["slug"];
      }
    );
  }

  // If Parent and Subcategory are Selected
  if ($("#selectCategoriesHome").val() && $("#selectSubcategoriesHome").val()) {
    window.location.href =
      document.location.origin +
      "/category/" +
      $("#selectSubcategoriesHome").val();
  }
});
