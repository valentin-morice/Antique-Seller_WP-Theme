<?php get_header() ?>

<!-- Display Post Content -->
<section>
    <div class="container pt-4 mb-5">
    <?php
			// Start the Loop.
			while ( have_posts() ) :
				the_post(); ?>
                    <h1 class="mb-5"><?php the_title() ?></h1>
                    <div class="row gx-5 mb-4">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Post Thumbnail" class="col-lg-6 mb-lg-0 mb-3">
                        <div class="col-lg-6">
                            <h2>Some Heading</h2>
                            <p class="text-uppercase pb-2">Additional Information</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam natus totam est iure molestias eaque molestiae saepe reprehenderit eligendi quos doloremque perspiciatis exercitationem, harum quae. Ab ducimus repudiandae quasi veritatis?</p>
                            <p>PRICE: €4000</p>
                            <button class="btn btn-primary text-white me-1 mb-5 mb-lg-0">Contact Us</button>
                            <button type="button" class="btn btn-secondary mb-5 mb-lg-0">Phone Us</button>
                        </div>
                    </div>
                    <?php the_content(); ?>
				<?php endwhile;
			?>
    </div>
</section>

<!-- More from Category -->
<section></section>
<?php get_footer() ?>