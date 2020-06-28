(function($){
    window.addEventListener('scroll', function(){
        const logoImage = document.querySelector('.logo img');
        const mainNav = document.getElementById('mainNav');

        if(window.pageYOffset > 1000) {  // when scroll down
            logoImage.style.height = '64px';
            mainNav.classList.add('sticky');
            mainNav.classList.add('text-white');
        }else {
            logoImage.style.height = '84px';
            mainNav.classList.remove('sticky');
            mainNav.classList.remove('text-white');
        }

        if (window.pageYOffset > 40) {
            mainNav.classList.add('header-box-shadow')
        }else {
            mainNav.classList.remove('header-box-shadow')
        }

        });
  $(document).ready(function () {
          $('.customer-logos').slick({
              slidesToShow: 4,
              slidesToScroll: 1,
              autoplay: true,
              autoplaySpeed: 1000,
              arrows: false,
              dots: false,
              pauseOnHover: false,
              responsive: [{
                  breakpoint: 768,
                  settings: {
                      slidesToShow: 3
                  }
              }, {
                  breakpoint: 520,
                  settings: {
                      slidesToShow: 2
                  }
              }]
          });
      $(function() {
          $('.lazy').Lazy();
      });
        $grid = $('.grid');

        $grid.isotope({ filter: '.metal' });


      }

  );

})(jQuery);

