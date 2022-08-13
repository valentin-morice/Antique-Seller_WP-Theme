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
    let cat_ID = $(this).val();
    $.get(
        "http://jurrien.local/wp-json/wp/v2/categories?parent=" + cat_ID,
        function (data) {
            for (i = 0; i < Object.keys(data).length; i++) {
                $("#selectSubcategoriesHome").append(
                    '<option value="' +
                    data[i]["id"] +
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

    // Sets Category or Subcategory ID in URL Query
    const category_id = $("#selectSubcategoriesHome").val() ? `cat=${$("#selectSubcategoriesHome").val()}` : `cat=${$("#selectCategoriesHome").val()}`;
    const century = $("#century").val() ? `&century=${$("#century").val()}` : '';
    const style = $("#style").val() ? `&style=${$("#style").val()}` : '';

    // Build URL Query
    if ($("#selectCategoriesHome").val() || $("#selectSubcategoriesHome").val() || $("#century").val() || $("#style").val()) {
        window.location.href =
            document.location.origin +
            "?" + category_id + century + style;
    }
});

/* Sets the width of the side navigation to 250px */
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

/* Sets the width of the side navigation to 0 */
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
