<?php
/**
 * Template Name: gallery
 *
*/


get_header(); 
 
?><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        .lazy{
            display: block !important;
            height: auto;
            position: relative !important;
        }
    </style>
<section>

<div class="parallax">   
<h1>photo gallery</h1>

</div>

    <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-interval="10000">
                <img class="lazy" data-src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(131).jpg" width="640" height="480" class="d-block w-100 element-item transition light">            </div>
            <div class="carousel-item" data-interval="2000">
                <img class="lazy" data-src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(98).jpg" width="640" height="480" class="d-block w-100 element-item transition light">            </div>
            </div>
            <div class="carousel-item">
                <img class="lazy" data-src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(117).jpg" width="640" height="480" class="d-block w-100 element-item transition light">            </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
<!-- Photo Grid -->
<div class="photo-row"> 
  <div class="grid photo-column">
    <img class="lazy" data-src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(117).jpg" width="640" height="480" class="element-item transition light">
    <img class="lazy" data-src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(98).jpg"  width="640" height="480" class="element-item transition metal">
    <img class="lazy" data-src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(131).jpg" width="640" height="480" class="element-item transition light">
    <img class="lazy" data-src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(123).jpg"  width="640" height="480" class="element-item transition metal">
    <img class="lazy" data-src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(118).jpg" width="640" height="480" class="element-item transition light">
    <img class="lazy" data-src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(128).jpg"  width="640" height="480"class="element-item transition metal">
    <img class="lazy" data-src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(133).jpg " width="640" height="480"x class="element-item transition metal">
  </div>
  <div class="photo-column">
    <img class="lazy"src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(117).jpg" style="width:100%">
    <img class="lazy "src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(98).jpg" style="width:100%">
    <img class="lazy" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(123).jpg" style="width:100%">
    <img class="lazy "src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(118).jpg" style="width:100%">
    <img class="lazy "src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(128).jpg" style="width:100%">
    <img class="lazy "src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(133).jpg " style="width:100%">
  </div>  
  <div class="photo-column">
    <img class="lazy"src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(117).jpg" style="width:100%">
    <img class="lazy" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(131).jpg" style="width:100%">
    <img class="lazy "src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(123).jpg" style="width:100%">
    <img class="lazy "src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(118).jpg" style="width:100%">
    <img class="lazy "src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(128).jpg" style="width:100%">
    <img class="lazy "src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(133).jpg " style="width:100%">
  </div>
  <div class="photo-column">
    <img class="lazy "src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(117).jpg" style="width:100%">
    <img class="lazy "src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(98).jpg" style="width:100%">
    <img class="lazy "src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(131).jpg" style="width:100%">
    <img class="lazy "src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(123).jpg" style="width:100%">
    <img class="lazy "src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(118).jpg" style="width:100%">
    <img class="lazy "src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(128).jpg" style="width:100%">
    <img class="lazy "src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(133).jpg " style="width:100%">
  </div>
</div>
    <button data-tippy-content="Tooltip">Text</button>
    <button data-tippy-content="Another Tooltip">Text</button>

</section>
    <div class="animated-background">

    </div>
    <!-- jsDeliver -->
    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.lazy/1.7.9/jquery.lazy.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js"></script>

    <!-- cdnjs -->
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js"></script>
    <script>
        import tippy from 'tippy.js';
        import 'tippy.js/dist/tippy.css';
        tippy('button');
    </script>
    <script src="https://unpkg.com/popper.js@1"></script>
    <script src="https://unpkg.com/tippy.js@5"></script>
    <script>

        tippy('button', {
            duration: 0,
            arrow: false,
        });
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


<?php

get_footer(); 

 ?>