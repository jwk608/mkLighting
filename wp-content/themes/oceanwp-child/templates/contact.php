<?php
/**
 * Template Name: Contact Us
 *
 */


get_header();

?>

<section class="section-contact">
    <div class="question">Got A Question?</div>
    <h1>Contact MK Lighting</h1>

    <p>We're here to help and answer any question you </br>might have. We look forward to hearing from you.</p>

</section>
<section class="slanted section-gray diagonal top section-padding-bottom">

    <div class="center">
        <div class="contact-form">
            <?php
            echo do_shortcode(
                '[contact-form-7 id="188" title="contact us"]'
            );
            ?>
        </div>
        <div class="how-can-we-help">
            <h3>Talk With Us!</h3>
            <p class="line-height-20">We are always ready to answer any <br>
                questions that interest you.</p>
            <p>
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <a href="mail:info@mklighting.com">info@mklighting.com</a>
            </p>
            <p>
                <i class="fa fa-phone" aria-hidden="true"></i>
                <a href="tel:201-470-3588">(201) 470-3588</a>
            </p>
            <p>
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                 120 Industrial Ave, Little Ferry, NJ 07643
            </p>

        </div>
    </div>

</section>

    <style>
        form {
            background-color: #ffffff;
            padding-top: 40px;
            padding-right: 40px;
            padding-bottom: 40px;
            padding-left: 40px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            -moz-box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            -webkit-box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            border-radius: 3px;
            -moz-border-radius: 3px;
            -webkit-border-radius: 3px;
        }
    </style>
<?php

get_footer();

?>