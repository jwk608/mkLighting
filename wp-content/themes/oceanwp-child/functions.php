<?php
//

function oceanwp_child_enqueue_parent_style() {
	// Dynamically get version number of the parent stylesheet (lets browsers re-cache your stylesheet when you update your theme)
	$theme   = wp_get_theme( 'OceanWP' );
	$version = $theme->get( 'Version' );
	// Load the stylesheet
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'oceanwp-style' ), $version );
	
}
add_action( 'wp_enqueue_scripts', 'oceanwp_child_enqueue_parent_style' );

add_action( 'wp_enqueue_scripts', 'mk_scripts' );

function mk_scripts(){


    wp_enqueue_style('google-font', 'https://fonts.googleapis.com/css?family=Roboto:400,400i,500,900&display=swap');
    wp_enqueue_style('daneden-animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css');
    wp_enqueue_style( 'slick-css' , "//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css");
    wp_enqueue_style('owl-carousel-css', get_stylesheet_directory_uri() . '/assets/owlCarousel/css/owl.carousel.min.css');
    wp_enqueue_style('owl-theme-css', get_stylesheet_directory_uri() . '/assets/owlCarousel/owl.theme.default.min.css');

    wp_enqueue_script( 'slick-js', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js');
    wp_enqueue_script('isotopes' , "https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js" );
    wp_enqueue_script('waypoint-js' , get_stylesheet_directory_uri() . "/js/noframework.waypoints.min.js");
    wp_enqueue_script( 'helper', get_stylesheet_directory_uri() . "/js/helper.js");
    wp_enqueue_script('owlCarousel', get_stylesheet_directory_uri() . '/assets/owlCarousel/js/owl.carousel.min.js');

}


add_action( 'wp_footer', 'my_footer_scripts' );


function my_footer_scripts(){
    ?>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({once: true});
    </script>
    <?php
}