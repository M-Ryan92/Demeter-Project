<?php
// todo get the fixed server path since component is used in multiple places
include 'globalsettings.php';

$node=  '<!-- Owl Carousel Assets -->'.
		'<link href="'.'resources/owl/owl.carousel.css" rel="stylesheet">'.
		'<link href="'.'resources/owl/owl.theme.css" rel="stylesheet">';
$node .=<<<EOT
              <div id="owl-demo" class="owl-carousel">
                <div class="item"><img class="lazyOwl" data-src="img/verzuren.png" alt="Lazy Owl Image"></div>
                <div class="item"><img class="lazyOwl" data-src="img/hart.jpg" alt="Lazy Owl Image"></div>
                <div class="item"><img class="lazyOwl" data-src="img/Liftoff-Sinaasappel.png" alt="Lazy Owl Image"></div>
                <div class="item"><img class="lazyOwl" data-src="img/H3OPro.png" alt="Lazy Owl Image"></div>
                <div class="item"><img class="lazyOwl" data-src="img/Ontspannende gezichtsmassage foto.jpg" alt="Lazy Owl Image"></div>
              </div>
EOT;
$node .= '<script type="text/javascript" src="'.'resources/owl/owl.carousel.min.js"></script>';
$node .=<<<EOT
    <script>
    $(document).ready(function() {

      $("#owl-demo").owlCarousel({
        items : 3, //10 items above 1000px browser width
        itemsDesktop : [1000,3], //5 items between 1000px and 901px
        itemsDesktopSmall : [900,3], // betweem 900px and 601px
        itemsTablet: [600,2], //2 items between 600 and 0
        itemsMobile : [479,2], // itemsMobile disabled - inherit from itemsTablet option

        lazyLoad : true,
        navigation : true,
        itemsScaleUp: true,
        navigationText: [
            "<i class='icon-chevron-left icon-white'><</i>",
            "<i class='icon-chevron-right icon-white'>></i>"
        ],

        responsive: true,
        responsiveRefreshRate : 200,
        responsiveBaseWidth: window
      });

    });
    </script>
EOT;

echo $node;
?>