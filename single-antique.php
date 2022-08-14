<?php get_header() ?>

    <!-- Display Post Content -->
    <section>
        <div class="container pt-4 mb-5">
            <?php

            // Store Current Post's Category
            $categories = 0;
            // Store Current Post's ID
            $currentPostID = 0;

            // Start the Loop.
            while (have_posts()) :
                the_post();
                $currentPostID = get_the_ID();
                $style = get_the_terms($currentPostID, 'style',);
                $century = get_the_terms($currentPostID, 'century');
                $designer = get_the_terms($currentPostID, 'designer');
                $categories = wp_get_post_categories($currentPostID, [
                    "fields" => "all",
                    "parent" => 0,
                ]);
                $subcategories = wp_get_post_categories($currentPostID, [
                    "fields" => "all",
                    "child_of" => $categories[0]->term_id,
                ]);
                ?>
                <h1 class="mb-5"><?php the_title() ?></h1>
                <div class="row gx-5 mb-4">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Post Thumbnail"
                         class="col-lg-6 mb-lg-0 mb-3">
                    <div class="col-lg-6">
                        <h2>Some Heading</h2>
                        <p class="mb-1">Category: <a
                                    href="<?php echo get_site_url() . "/category/" . $categories[0]->slug ?>"><?php echo $categories[0]->name ?></a>/<a
                                    href="<?php echo get_site_url() . "/category/" . $subcategories[0]->slug ?>"><?php echo $subcategories[0]->name ?></a>
                        </p>
                        <p class="mb-1">Century:
                            <?php
                            if ($century[0]) {
                                echo "<a href='/century/" . $century[0]->slug . "'>" . $century[0]->name . "</a>";
                            } else {
                                echo "<i>Unattributed</i>";
                            } ?>
                        </p>
                        <p class="mb-1">Style:
                            <?php
                            if ($style[0]) {
                                echo "<a href='/style/" . $style[0]->slug . "'>" . $style[0]->name . "</a>";
                            } else {
                                echo "<i>Unattributed</i>";
                            } ?>
                        </p>
                        <p>Designer:
                            <?php
                            if ($designer[0]) {
                                echo "<a href='/designer/" . $designer[0]->slug . "'>" . $designer[0]->name . "</a>";
                            } else {
                                echo "<i>Unattributed</i>";
                            } ?>
                        </p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam natus totam est iure
                            molestias eaque molestiae saepe reprehenderit eligendi quos doloremque perspiciatis
                            exercitationem, harum quae. Ab ducimus repudiandae quasi veritatis?</p>
                        <p>PRICE: €4000</p>
                        <button class="btn btn-primary text-white me-1 mb-5 mb-lg-0">Contact Us</button>
                        <button type="button" class="btn btn-secondary mb-5 mb-lg-0">Phone Us</button>
                    </div>
                </div>
                <?php the_content();
            endwhile;
            ?>
        </div>
    </section>

    <!-- More from Same Category -->
    <section>
        <div class="container">
            <h2 class="pb-3 pt-5">More Entries For <?php echo $categories[0]->name ?></h2>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3  g-4 mb-5">
                <?php
                // Build Same Category Query
                $homepageAntiques = new WP_Query(array(
                    'posts_per_page' => 3,
                    'post_type' => 'antique',
                    'cat' => $categories[0]->term_id,
                    'post__not_in' => [$currentPostID],
                ));

                // Call Posts From Same Category
                while ($homepageAntiques->have_posts()) {
                    $homepageAntiques->the_post();
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
        </div>
    </section>
<?php get_footer() ?>