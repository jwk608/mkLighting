<?php
/**
 * Template Name: gallery
 *
 */


get_header();

?>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        .lazy {
            display: block !important;
            height: auto;
            position: relative !important;
        }
    </style>

    <section>

        <div class="parallax">
            <h1>Our Work</h1>

        </div>
        <section class="section__gallery">
            <div class="masonry__container">
                <div class="masonry__nav">
                    <ul class="masonry-filter">
                        <li class="masonry__li active"><a href="#" class="masonry__li__a"  data-filter="*"
                                                   data-hover="All">All</a>
                        </li>
                        <li class="masonry__li"><a href="#" class="masonry__li__a" data-filter=".outdoor"
                                                   data-hover="Outdoor">Outdoor</a></li>
                        <li class="masonry__li"><a href="#" class="masonry__li__a" data-filter=".indoor"
                                                   data-hover="Indoor">Indoor</a></li>
                        <li class="masonry__li"><a href="#" class="masonry__li__a" data-filter=".small-retail"
                                                   data-hover="Small Retail">Small Retail</a></li>
                        <li class="masonry__li"><a href="#" class="masonry__li__a" data-filter=".warehouse"
                                                   data-hover="Warehouse">Warehouse</a></li>
                    </ul>
                </div>
                <div class="masonry__contents portfolio-wrap">
                    <div class="masonry-item outdoor">
                        <div class="masonry__shadow">
                            <img class="masonry__item__image element-item transition light lazy"
                                 data-src="<?php echo get_stylesheet_directory_uri()?>/assets/images/gallery/gas-staion.jpeg">
                            <div class="masonry__info">
                                <h4></h4>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="masonry-item indoor">
                        <div class="masonry__shadow">
                            <img class="masonry__item__image element-item transition light lazy"
                                 data-src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/gallery/office-1.jpeg">
                            <div class="masonry__info">
                                <h4></h4>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="masonry-item small-retail indoor">
                        <div class="masonry__shadow">
                            <img class="masonry__item__image element-item transition light lazy"
                                 data-src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/gallery/convenient-store-1.jpg">
                            <div class="masonry__info">
                                <h4></h4>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="masonry-item indoor">
                        <div class="masonry__shadow">
                            <img class="masonry__item__image element-item transition light lazy"
                                 data-src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/gallery/office-2.jpeg">
                            <div class="masonry__info">
                                <h4></h4>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="masonry-item indoor small-retail">
                        <div class="masonry__shadow">
                            <img class="masonry__item__image element-item transition light lazy"
                                 data-src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/gallery/market-2.jpeg">
                            <div class="masonry__info">
                                <h4></h4>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="masonry-item warehouse indoor">
                        <div class="masonry__shadow">
                            <img class="masonry__item__image element-item transition light lazy"
                                 data-src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/gallery/warehouse-2.webp">
                            <div class="masonry__info">
                                <h4></h4>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="masonry-item outdoor">
                        <div class="masonry__shadow">
                            <img class="masonry__item__image element-item transition light lazy"
                                 data-src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/gallery/gas-station-4.jpg">
                            <div class="masonry__info">
                                <h4></h4>
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="about">

<!--            <div class="about__container">-->
<!--                <h2 class="about__head"></h2>-->
<!--                <div class="about__content">-->
<!--                    <div class="owl-carousel">-->
<!--                        <div class="item active">-->
<!--                            <img class="d-block w-100"-->
<!--                                 src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(117).jpg"-->
<!--                                 alt="First slide">-->
<!--                        </div>-->
<!--                        <div class="item">-->
<!--                            <img class="d-block w-100"-->
<!--                                 src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(123).jpg"-->
<!--                                 alt="Second slide">-->
<!--                        </div>-->
<!--                        <div class="item">-->
<!--                            <img class="d-block w-100"-->
<!--                                 src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(131).jpg"-->
<!--                                 alt="Third slide">-->
<!--                        </div>-->
<!--                        <div class="item">-->
<!--                            <img class="d-block w-100"-->
<!--                                 src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(131).jpg"-->
<!--                                 alt="Third slide">-->
<!--                        </div>-->
<!--                        <div class="item">-->
<!--                            <img class="d-block w-100"-->
<!--                                 src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(131).jpg"-->
<!--                                 alt="Third slide">-->
<!--                        </div>-->
<!--                    </div>-->
<!---->
<!--                    <div class="about__right">-->
<!--                        <div class="content__right__container">-->
<!--                            <div class="content__right__header">-->
<!--                                Commited To superior quality and results.-->
<!--                            </div>-->
<!--                            <div class="content__right__content">-->
<!--                                Contrary to popular belief, lorem Ipsum is not simply text. It has roots in a piece of-->
<!--                                classical Latin literature from 45 BC, making it over 2000 years old.-->
<!---->
<!--                                There are many variations of passages of lorem available, but the majority have suffered-->
<!--                                alteration in some form, by inject humour, or randomised words which don't look even-->
<!--                                slightly believable.-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->

            <div class="about__bottom__title">
                <strong>MK LIGHTING</strong>
            </div>

        </div>


        <!-- jsDeliver -->
        <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.lazy/1.7.9/jquery.lazy.min.js"></script>
        <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js"></script>

        <!-- cdnjs -->
        <script type="text/javascript"
                src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js"></script>
        <script type="text/javascript"
                src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js"></script>

        <script src="https://unpkg.com/popper.js@1"></script>
        <script src="https://unpkg.com/tippy.js@5"></script>
        <script>

            tippy('button', {
                duration: 0,
                arrow: false,
            });
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
                integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
                crossorigin="anonymous"></script>


<?php

get_footer();

?>