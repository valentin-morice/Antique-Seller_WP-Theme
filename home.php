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
        <div class="container pt-4">
            <h2 class="pb-2">Catalogue</h2>
            <p>Filter the articles using the form below.</p>
            <div class="d-flex flex-xxl-row flex-column align-items-xxl-end align-items-xxl-start align-items-stretch mb-5 py-4 pt-3 px-4 border rounded">
                <div class="d-flex flex-column">
                    <label class="pb-1" for="selectCategoriesHome">Category:</label>
                    <select name="categories" id="selectCategoriesHome" class="p-2 me-xxl-2">
                        <option value="">--Choose an option--</option>
                        <?php
                        foreach ($categories as $category) {
                            echo "<option value='" . $category->term_id . "'>" . $category->name . "</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="d-flex flex-column">
                    <label class="pb-1 pt-2 pt-xxl-0" for="selectSubcategoriesHome">Subcategory: (Optional)</label>
                    <select name="subcategories" id="selectSubcategoriesHome" class="p-2 me-xxl-2">
                        <option value="">--Choose an option--</option>
                    </select>
                </div>
                <div class="d-flex flex-column">
                    <label class="pb-1 pt-2 pt-xxl-0" for="century">Century: (Optional)</label>
                    <select name="century" id="century" class="p-2 me-xxl-2">
                        <option value="">--Choose an option--</option>
                        <?php
                        $terms = get_terms([
                            'taxonomy' => 'century',
                            'hide_empty' => false,
                        ]);
                        foreach ($terms as $term) {
                            echo "<option value='" . $term->slug . "'>" . ucfirst($term->name) . "</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="d-flex flex-column">
                    <label class="pb-1 pt-2 pt-xxl-0" for="style">Style: (Optional)</label>
                    <select name="style" id="style" class="p-2 me-xxl-2">
                        <option value="">--Choose an option--</option>
                        <?php
                        $terms = get_terms([
                            'taxonomy' => 'style',
                            'hide_empty' => false,
                        ]);
                        foreach ($terms as $term) {
                            echo "<option value='" . $term->slug . "'>" . ucfirst($term->name) . "</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="d-flex flex-column">
                    <label class="pb-1 pt-2 pt-xxl-0" for="designer">Designer: (Optional)</label>
                    <select name="designer" id="designer" class="p-2">
                        <option value="">--Choose an option--</option>
                        <?php
                        $terms = get_terms([
                            'taxonomy' => 'designer',
                            'hide_empty' => false,
                        ]);
                        foreach ($terms as $term) {
                            echo "<option value='" . $term->slug . "'>" . ucfirst($term->name) . "</option>";
                        }
                        ?>
                    </select>
                </div>
                <button class="btn btn-primary text-white mt-4 mt-xxl-0 ms-xxl-2 mb-xxl-0 pt-2 mt-2" id="searchHome">
                    Search
                </button>
            </div>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 mb-5">
                <?php
                // Call Posts
                while (have_posts()) {
                    the_post();
                    $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail');
                    ?>
                    <div class="col">
                        <div class="card h-100">
                            <img src="<?php echo $image[0]; ?>" class="card-img-top" alt="New Antique Thumbnail">
                            <div class="card-body d-flex flex-column">
                                <h3 class="card-title"><?php the_title(); ?></h3>
                                <p class="card-text"><?php echo wp_trim_words(get_the_content(), 24) ?></p>
                                <a href="<?php the_permalink(); ?>"
                                   class="btn btn-primary text-light mt-auto align-self-start">Learn More</a>
                            </div>
                        </div>
                    </div>
                <?php }
                ?>
            </div>
            <div class="pb-5 pagination">
                <?php echo paginate_links(); ?>
            </div>
        </div>
    </section>
<?php get_footer() ?>