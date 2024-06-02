<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Top-notch web development services in Nairobi, Kenya. Specializing in custom website solutions for businesses and startups.">
    <meta name="author" content="Nairobi website Developers">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
    <meta property="og:site_name" content="Nairobi website Developers" /> <!-- website name -->
    <meta property="og:site" content="https://www.nairobiwebsitedevelopers.com" /> <!-- website link -->
    <meta property="og:title" content="Leading Web Development Company in Nairobi, Kenya"/> <!-- title shown in the actual shared post -->
    <meta property="og:description" content="Expert web development and custom website solutions for businesses and startups in Nairobi, Kenya." /> <!-- description shown in the actual shared post -->
    <meta property="og:image" content="https://www.nairobiwebsitedevelopers.com/images/og-image.jpg" /> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="https://www.nairobiwebsitedevelopers.com" /> <!-- where do you want your post to link to -->
    <meta name="twitter:card" content="summary_large_image"> <!-- to have large image post format in Twitter -->

    <!-- Webpage Title -->
    <title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>    
    <!-- ==============================================
    CSS Files
    =============================================== -->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://use.fontawesome.com/33f079f2f4.js"></script>
    <link type="text/css" rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri());?>/assets/materialize-assets/css/materialize.min.css">
    <link type="text/css" rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri());?>/assets/js/plugins/OwlCarousel/owl-carousel/owl.carousel.css">
    <link type="text/css" rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri());?>/assets/js/plugins/OwlCarousel/owl-carousel/owl.theme.css">
    <link type="text/css" rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri());?>/assets/js/plugins/OwlCarousel/owl-carousel/">
    <link type="text/css" rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri());?>/assets/js/plugins/lightbox2-master/dist/css/lightbox.min.css">
    <link type="text/css" rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri());?>/assets/css/main.css">

    <!-- Include particles.js library -->
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>



    

</head>
 <body >
    

     <!-- ==============================================
    Preloader
    =============================================== -->

    <div class="preloader">
        <h2><?php bloginfo('name'); ?><span>.</span></h2>
        <div class="preloader-wrapper big active">
            <div class="spinner-layer spinner-blue">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>

            <div class="spinner-layer spinner-red">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>

            <div class="spinner-layer spinner-yellow">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>

            <div class="spinner-layer spinner-green">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- ==============================================
    Navigation
    =============================================== -->

    <header>
        <nav>
            <div class="container">
                <div class="nav-wrapper">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="brand-logo page-scroll"><?php bloginfo('name'); ?><span>.</span></a>
                    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                    <!-- Side Nav Links -->
                    <ul class="side-nav" id="mobile-demo">
                        <li><a href="<?php echo esc_url(home_url('about/')); ?>" class="page-scroll">About</a></li>
                        <li><a href="<?php echo esc_url(home_url('skills/')); ?>" class="page-scroll">Skills</a></li>
                        <li><a href="<?php echo esc_url(home_url('portfolio/')); ?>" class="page-scroll">Portfolio</a></li>
                        <li><a href="<?php echo esc_url(home_url('services/')); ?>" class="page-scroll">Services</a></li>
                        <li><a href="<?php echo esc_url(home_url('team/')); ?>" class="page-scroll">Team</a></li>
                        <li><a href="<?php echo esc_url(home_url('price/')); ?>" class="page-scroll">Price</a></li>
                        <li><a href="<?php echo esc_url(home_url('blog/')); ?>" class="page-scroll">Blog</a></li>
                        <li><a href="<?php echo esc_url(home_url('contact/')); ?>" class="page-scroll">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

  