<?php get_header(); ?>

  <section class="mb-5">
    <div class="container pt-4">
      <h2 class="mb-4">Category: <?php echo single_cat_title(); ?></h2>
    </div>
  </section>

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
