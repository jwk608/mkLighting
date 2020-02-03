<?php
/**
 * Main Header Layout
 *
 * @package OceanWP WordPress theme
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>
    <header id="ha-header" class="ha-header ha-header-large"

            data-aos="fade-down"
            data-aos-easing="linear"
            data-aos-duration="200">
                <nav>
                    <a href="/"><img src="<?php echo get_stylesheet_directory_uri(); ?> images/logo.png" alt=""></a>
                    <a href="<?php echo get_site_url()?>">HOME</a>
                    <a href="<?php echo get_site_url()?>/about-us">ABOUT US</a>
                    <a href="<?php echo get_site_url()?>/gallery">SOLUTION</a>
                    <a href="<?php echo get_site_url()?>/contact-us" class="contact-us">CONTACT US</a>
                </nav>

    </header>

<!--    <nav>-->
<!--        <div class="logo">-->
<!--            <img src="logo.png" alt="" class="logo">-->
<!--        </div>-->
<!--        <ul>-->
<!--            <li><a href="--><?php //echo esc_url( home_url( '/' ) ); ?><!--" class="active">Home</a></li>-->
<!--            <li><a href="/about-us">About</a></li>-->
<!--            <li><a href="/gallery">Gallery</a></li>-->
<!--            <li><a href="/contact">Contact</a></li>-->
<!--            <li><a href="/services">Services</a></li>-->
<!--        </ul>-->
<!--    </nav>-->

<?php

do_action( 'ocean_after_header' ); ?>