(function($){

  $(document).ready(function () {

      $(function() {
          $('.lazy').Lazy();
      });
        $grid = $('.grid');

        $grid.isotope({ filter: '.metal' });


      }
    
  );

})(jQuery);
var $ = require('jquery');
window.$ = $;
require('bootstrap');