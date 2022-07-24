<?php 
get_header();
// Build Queries 
$categories = $wp_query->get_queried_object();
$subcategories = get_categories([
    "child_of" => $categories->term_id,
]);
?>


  <!-- Conditionally Display Search Filter or Go Back Link -->
  <section class="mb-5">
    <div class="container pt-4">
      <h2 class="mb-4">Category: <?php echo single_cat_title(); ?></h2>
                <!-- If Browsing a Subcategory -->
                <?php if($categories->category_parent !== 0) {
                        $parent = get_category($categories->category_parent);
                        echo '<div class="d-flex flex-lg-row flex-column align-items-lg-end align-items-lg-start align-items-stretch py-4 pt-3 px-4 border rounded">';
                        echo "<p class='mb-0'><a href='/catalogue'>Catalogue</a>" . "/<a href='/category/" . $parent->slug . "'>" . $parent->cat_name . "</a>/" . single_cat_title('', false) . "</p>";
                        echo '</div>';
                    } 
                ?>
                <!-- If Browsing a Parent Category, Beginning of Form -->
                <?php if($categories->category_parent === 0) {
                        get_template_part('template_parts/searchCategories');
                    } 
                ?>
                <!-- If Browsing a Parent Category, Populate Form -->
                <?php if ($categories->category_parent === 0) {
                    foreach ($subcategories as $subcategory) {
                        echo "<option value='" . $subcategory->slug . "'>" . $subcategory->name . "</option>";
                    }
                }
                ?>
                <!-- If Browsing a Parent Category, End of Form -->
                <?php if($categories->category_parent === 0) {
                        get_template_part('template_parts/searchEnd');
                    } 
                ?>
    </div>
  </section>

  <!-- Display Posts from Category -->
  <section>
    <div class="container">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3  g-4 mb-5">
            <?php 
            // Call Posts From Same Category
            while(have_posts()) {
                    the_post(); 
                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
                ?>
                <div class="col">
                    <div class="card h-100">
                        <img src="<?php echo $image[0]; ?>" class="card-img-top" alt="New Antique Thumbnail">
                        <div class="card-body d-flex flex-column">
                            <h3 class="card-title"><?php the_title(); ?></h3>
                            <p class="card-text"><?php echo wp_trim_words( get_the_content(), 24 ) ?></p>
                            <a href="<?php the_permalink(); ?>" class="btn btn-primary text-light mt-auto align-self-start">Learn More</a>
                        </div>
                    </div>
                </div>
            <?php  }
            echo paginate_links();
            ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
