<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'pwl'); ?></a>

        <header id="masthead" class="site-header">

<nav class="navbar navbar-expand-lg navbar-light ">
    <div class="container-lg container-fluid px-lg-0 px-md-5 px-2">

        <!-- Brand -->
        <a class="navbar-brand" href="#"><img src="<?php echo get_template_directory_uri().'/assets/img/logo.svg'; ?>" alt=""></a>

        <!-- Hamburger only visible on mobile -->
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileMenu" aria-controls="mobileMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Desktop Menu (visible on lg and up) -->
        <div class="collapse navbar-collapse d-none d-lg-flex">
            <ul class="navbar-nav m-auto">
                <li class="nav-item"><a class="nav-link" href="#">Find a Doctor</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Specialities</a></li>
                <li class="nav-item"><a class="nav-link ">Download</a></li>
                <li class="nav-item"><a class="nav-link ">About</a></li>
            </ul>
              <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="#">Login</a></li>
                <li class="nav-item"><a class="nav-link header_cta" href="#">Book an Appointment</a></li>
            </ul>
        </div>

        <!-- Mobile Offcanvas Menu -->
        <div class="offcanvas offcanvas-start d-lg-none w-75" tabindex="-1" id="mobileMenu" aria-labelledby="mobileMenuLabel">
            <div class="offcanvas-header">
                <a class="navbar-brand" href="#"><img src="<?php echo get_template_directory_uri().'/assets/img/logo.svg'; ?>" alt=""></a>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav">
                  <li class="nav-item"><a class="nav-link" href="#">Find a Doctor</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Specialities</a></li>
                <li class="nav-item"><a class="nav-link ">Download</a></li>
                <li class="nav-item"><a class="nav-link ">About</a></li>
                 <li class="nav-item"><a class="nav-link" href="#">Login</a></li>
                <li class="nav-item"><a class="nav-link header_cta mt-5" href="#">Book an Appointment</a></li>
                </ul>
               
            </div>
        </div>

    </div>
</nav>

        </header><!-- #masthead -->