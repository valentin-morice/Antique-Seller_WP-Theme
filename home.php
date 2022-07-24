<?php get_header();
$args = array(
    'orderby' => 'name',
    'order' => 'ASC',
    'parent' => 0,
    'exclude' => 1,
  );
$categories = get_categories($args); 
?>
<section>
    <div class="container">
        <h2 class="pb-2 pt-5">Catalogue</h2>
        <p>Filter the articles using the form below.</p>
            <div class="d-flex flex-lg-row flex-column align-items-lg-end align-items-lg-start align-items-stretch mb-5 py-4 pt-3 px-4 border rounded">
                <div class="d-flex flex-column">
                    <label class="pb-1" for="categories">Category:</label>
                    <select name="categories" id="selectCategoriesHome" class="p-2 me-lg-2">
                    <option value="">--Please choose an option--</option>
                    <?php 
                        foreach ($categories as $category) {
                            echo "<option value='" . $category->term_id . "'>" . $category->name . "</option>";
                        } 
                    ?>
                    </select>
                </div>
                    <div class="d-flex flex-column">
                    <label class="pb-1 pt-2 pt-lg-0" for="subcategories">Subcategory (Optional):</label>
                    <select name="subcategories" id="selectSubcategoriesHome" class="p-2">
                        <option value="">--Please choose an option--</option>
                    </select>
                </div>
                <button class="btn btn-primary text-white mt-4 mt-lg-0 ms-lg-2 mb-lg-0 pt-2 mt-2" id="searchHome">Search</button>
            </div>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 mb-5">
            <?php 
            // Call Posts
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
            ?>
        </div>
        <div class="pb-5 pagination">
            <?php echo paginate_links(); ?>
        </div>
    </div>
</section>
<?php get_footer() ?>