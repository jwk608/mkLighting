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
            data-aos-duration="1500">
        <div class="ha-header-perspective">
            <div class="ha-header-front">
                <h1><span>Header Effects</span></h1>
                <nav>
                    <a>‹ Previous Demo</a>
      
                </nav>
            </div>
            <div class="ha-header-bottom">
                <nav>
                    <a href="<?php echo get_site_url()?>">HOME</a>
                    <a href="<?php echo get_site_url()?>/about-us">About US</a>
                    <a href="<?php echo get_site_url()?>/gallery">SOLUITION</a>
                    <a href="<?php echo get_site_url()?>/contact-us">CONTACT US</a>
                </nav>
            </div>
        </div>
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