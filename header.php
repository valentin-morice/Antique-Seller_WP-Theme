<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <!-- Banner -->
    <div>
        <img src="https://i0.wp.com/theantiquegallery.com/wp-content/uploads/2021/12/cropped-Antique-Gallery-300x100px.png?fit=300%2C54&ssl=1" class="mx-auto d-block p-4" alt="Logo">
    </div>

    <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <button class="navbar-toggler mx-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active" href="/catalogue">Catalogue</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Categories
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <!-- Get All Parent Categories -->
                    <?php 
                    $args = array(
                        'orderby' => 'name',
                        'order' => 'ASC',
                        'parent' => 0,
                        'exclude' => 1,
                      );
                    $categories = get_categories($args); 
                    foreach ($categories as $category) {
                        echo '<li><a class="dropdown-item" href="/category/' . $category->slug . '">' . $category->cat_name . '</a></li>';
                    }
                    ?>
                    </ul>
                    </li>
                </ul>
                <form class="d-flex lg-me-2">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                </div>
            </div>
        </nav>

        <!-- Header Image -->
        <img 
            src="<?php echo get_template_directory_uri() . "/img/header.jpg" ?>"
            class="w-100" 
            style="height: 337px; object-fit: cover; " 
            alt="Sunset"
        >