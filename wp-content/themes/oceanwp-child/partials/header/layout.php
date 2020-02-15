<?php
/**
 * Main Header Layout
 *
 * @package OceanWP WordPress theme
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}
?>
    <header id="ha-header" class="ha-header ha-header-large">

        <nav id="mainNav">
            <div class="inline">
                <a href="/" class="logo">
                    <img
                        src="http://mklighting.test:3001/wp-content/uploads/2020/02/MK-lighting-ff-01.jpg"
                        alt="">
                </a>
            </div>
            <div class="inline">
                <a href="<?php echo get_site_url() ?>">HOME</a>
                <a href="<?php echo get_site_url() ?>/about-us">ABOUT US</a>
                <a href="<?php echo get_site_url() ?>/gallery">SOLUTION</a>
                <a href="<?php echo get_site_url() ?>/contact-us" class="contact-us">CONTACT US</a>
            </div>

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

do_action('ocean_after_header'); ?>