<?php
/**
/* Template Name: Home
 *
 * Displays Only Home template
 *
 * @package WordPress
 * @subpackage website
 * @since website 1.0
 */

 get_header(); ?>
  
    <!-- ==============================================
    Particles Background
    =============================================== -->

    <div id="particles-bg" class="full-screen" style="position: relative; height: 100vh;">
       <div id="particles-js" style="position: absolute; width: 100%; height: 100%;"></div><!-- /.particles div -->
        <div class="hero-caption" style="position: relative; z-index: 1;">
            <div class="hero-text">
                <h2>Showcase</h2>
                <h1>Your Best Work</h1>
                <a class="waves-effect waves-light btn-large btn-secondary">Purchase</a>
                <a class="waves-effect waves-light btn-large btn-white">learn More</a>
            </div>
        </div>
    </div>


    <style>
        #particles-bg {
    height: 100vh; /* Set hero height to 100% of viewport height */
}

footer {
    display: none; /* Hide footer */
}

    </style>



<?php get_footer(); ?>