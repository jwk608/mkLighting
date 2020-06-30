<?php
/**
 * The Header for our theme.
 *
 * @package OceanWP WordPress theme
 */ ?>

    <!DOCTYPE html>
<html class="<?php echo esc_attr( oceanwp_html_classes() ); ?>" <?php language_attributes(); ?><?php oceanwp_schema_markup( 'html' ); ?>>
    <head>
        <!-- Google Tag Manager -->
        <script>(function (w, d, s, l, i) {
                w[l] = w[l] || [];
                w[l].push({
                    'gtm.start':
                        new Date().getTime(), event: 'gtm.js'
                });
                var f = d.getElementsByTagName(s)[0],
                    j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
                j.async = true;
                j.src =
                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
                f.parentNode.insertBefore(j, f);
            })(window, document, 'script', 'dataLayer', 'GTM-N4RZQ9J');</script>
        <!-- End Google Tag Manager -->
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <?php wp_head(); ?>
    </head>

<body <?php body_class(); ?>>
    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N4RZQ9J"
                height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->
<?php do_action( 'ocean_before_outer_wrap' ); ?>

<div id="outer-wrap" class="site clr">

<?php do_action( 'ocean_before_wrap' ); ?>

    <div id="wrap" class="clr">

<?php do_action( 'ocean_top_bar' ); ?>

<?php do_action( 'ocean_header' ); ?>

<?php do_action( 'ocean_before_main' ); ?>

<main id="main" class="site-main clr"<?php oceanwp_schema_markup( 'main' ); ?>>

<?php do_action( 'ocean_page_header' ); ?>