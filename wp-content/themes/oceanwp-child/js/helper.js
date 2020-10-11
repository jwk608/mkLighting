(function ($) {
  window.addEventListener('scroll', function () {
    const logoImage = document.querySelector('.logo img');
    const mainNav = document.getElementById('mainNav');

    if (window.pageYOffset > 1000) {
      // when scroll down
      logoImage.style.height = '64px';
      mainNav.classList.add('sticky');
      mainNav.classList.add('text-white');
    } else {
      logoImage.style.height = '84px';
      mainNav.classList.remove('sticky');
      mainNav.classList.remove('text-white');
    }

    if (window.pageYOffset > 40) {
      mainNav.classList.add('header-box-shadow');
    } else {
      mainNav.classList.remove('header-box-shadow');
    }
  });
  $(document).ready(function () {
    // Gallery Page Testimonial
    $('.owl-carousel').owlCarousel({
      loop: true,
      autoplay: true,
      margin: 30,
      nav: false,
      dots: true,
      navText: [
        '<i class="fa fa-angle-left"></i>',
        '<i class="fa fa-angle-right"></i>',
      ],
      responsive: {
        0: {
          items: 1,
        },
        991: {
          items: 1,
        },
      },
    });

    //________masonry function function by = isotope.pkgd.min.js________//
    function masonryBox() {
      if (jQuery().isotope) {
        var $container = jQuery('.portfolio-wrap');
        $container.isotope({
          itemSelector: '.masonry-item',
          transitionDuration: '1s',
          originLeft: true,
          stamp: '.stamp',
        });

        jQuery('.masonry-filter li').on('click', function () {
          var selector = jQuery(this).find('a').attr('data-filter');
          jQuery('.masonry-filter li').removeClass('active');
          jQuery(this).addClass('active');
          $container.isotope({ filter: selector });
          return false;
        });
      }
    }

    //________masonry items height adjustment_______//
    function masonryItemsHeight(){
      let masonryEvenColumns = jQuery('.masonry__shadow')
    }
    //________run all the functions here________//
    masonryBox();

    $(function () {
      $('.lazy').Lazy();
    });
    $grid = $('.grid');

    $grid.isotope({ filter: '.metal' });
  });
})(jQuery);
