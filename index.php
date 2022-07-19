<?php get_header(); ?>

<!-- Z Section -->
<section class="mb-5">
    <div class="container pt-4">
        <h2 class="mb-4">Antiques Seller</h2>
        <div class="row align-items-center mb-4 gx-5">
            <div class="col-lg">
                <h3>Some Heading</h3>
                <p class="lh-base  mb-5 mb-lg-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia eius perferendis nisi ducimus repudiandae consectetur praesentium, numquam tempora vel fugiat reprehenderit deserunt suscipit, provident iste culpa aliquid similique, doloribus beatae adipisci quos magnam error. Molestiae dolor aspernatur, consequatur dolorum qui mollitia libero voluptate possimus eius odio harum praesentium ex vero!</p>
            </div>
            <img src="<?php echo get_template_directory_uri() . "/img/index1.jpg" ?>" alt="Bookshelf" class="col-lg">
        </div>
        <div class="row align-items-center mt-5 gx-5">
            <img src="<?php echo get_template_directory_uri() . "/img/index2.jpg" ?>" alt="Bookshelf" class="col-lg order-2 orger-lg-1">
            <div class="col-lg order-1 order-lg-2">
                <h3>Some Heading</h3>
                <p class="lh-base col-lg mb-5 mb-lg-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia eius perferendis nisi ducimus repudiandae consectetur praesentium, numquam tempora vel fugiat reprehenderit deserunt suscipit, provident iste culpa aliquid similique, doloribus beatae adipisci quos magnam error. Molestiae dolor aspernatur, consequatur dolorum qui mollitia libero voluptate possimus eius odio harum praesentium ex vero!</p>
            </div>
        </div>
    </div>
</section>

<!-- Latest Entries Cards -->
<section>
    <div class="container">
        <h2 class="pb-3 pt-5">Latest Entries</h2>
        <div class="row row-cols-1 row-cols-md-3 g-4 mb-5">
            <div class="col">
                <div class="card">
                    <img src="<?php echo get_template_directory_uri() . "/img/card1.jpg" ?>" class="card-img-top" alt="New Article">
                    <div class="card-body">
                        <h3 class="card-title">Card title</h3>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary text-light">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="<?php echo get_template_directory_uri() . "/img/card2.jpg" ?>" class="card-img-top" alt="New Article">
                    <div class="card-body">
                        <h3 class="card-title">Card title</h3>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary text-light">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="<?php echo get_template_directory_uri() . "/img/card3.jpg" ?>" class="card-img-top" alt="New Article">
                    <div class="card-body">
                        <h3 class="card-title">Card title</h3>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary text-light">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Favorite Categories -->
<section>
    <div class="container">
        <h2 class="pb-4 pt-5">Favorite Categories</h2>
        <div class="d-flex flex-column flex-lg-row justify-content-between gap-3 mb-5">
            <div class="favcatBox d-flex justify-content-center align-items-center mx-auto">
                <p class="text-uppercase text-light">Title</p>
            </div>
            <div class="favcatBox d-flex justify-content-center align-items-center mx-auto">
                <p class="text-uppercase text-light">Title</p>
            </div>
            <div class="favcatBox d-flex justify-content-center align-items-center mx-auto">
                <p class="text-uppercase text-light">Title</p>
            </div>
            <div class="favcatBox d-flex justify-content-center align-items-center mx-auto">
                <p class="text-uppercase text-light">Title</p>
            </div>
            <div class="favcatBox d-flex justify-content-center align-items-center mx-auto">
                <p class="text-uppercase text-light">Title</p>
            </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container" style="margin-bottom: 116px;">
        <h2 class="pb-3 pt-5">Finding Us</h2>
        <div class="row align-items-center gx-5">
            <div class="col-lg">
                <h3>Some Heading</h3>
                <p class="lh-base pb-lg-3 mb-lg-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia eius perferendis nisi ducimus repudiandae consectetur praesentium, numquam tempora vel fugiat reprehenderit deserunt suscipit, provident iste culpa aliquid similique, doloribus beatae adipisci quos magnam error.</p>
                <button class="btn btn-primary text-white me-1 mb-5 mb-lg-0">Contact Us</button>
                <button type="button" class="btn btn-secondary mb-5 mb-lg-0">Phone Us</button>
            </div>
            <img src="<?php echo get_template_directory_uri() . "/img/map.png" ?>" alt="Bookshelf" class="col-lg">
        </div>
    </div>
</section>

<?php get_footer(); ?>
