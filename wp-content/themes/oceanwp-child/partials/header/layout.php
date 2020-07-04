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
                        src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/logo.png"
                        alt="logo">
                </a>
            </div>
            <div class="desktop-menu inline">
                <a href="<?php echo get_site_url() ?>">HOME</a>
<!--                <a href="--><?php //echo get_site_url() ?><!--/about-us">ABOUT US</a>-->
<!--                <a href="--><?php //echo get_site_url() ?><!--/gallery">SOLUTION</a>-->

                <a href="<?php echo get_site_url() ?>/projects">PROJECTS</a>
                <a href="<?php echo get_site_url() ?>/solutions">SOLUTIONS</a>
                <a href="<?php echo get_site_url() ?>/contact-us" class="contact-us">CONTACT US</a>
            </div>
            <div class="mobile-menu" style="display: none">
                <input type="checkbox" class="toggler">
                <div class="hamburger">
                    <div></div>
                </div>
                <div class="menu">
                    <div>
                        <div>
                            <ul>
                                <li class="underline">
                                    <a href="<?php echo get_site_url() ?>">HOME</a>
                                </li>
                                <li>
                                    <a href="<?php echo get_site_url() ?>/projects">PROJECTS</a>
                                </li>
                                <li>
                                    <a href="<?php echo get_site_url() ?>/solutions">SOLUTIONS</a>
                                </li>
                                <li>
                                    <a href="<?php echo get_site_url() ?>/contact-us">CONTACT US</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
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