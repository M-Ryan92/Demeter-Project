<?php

/**
 *
 */
include '../../globalsettings.php';
include 'carousel.php';

class Overlay {

    private $images;

    function __construct($images) {
        $this->images = $images;
    }

    public function startup() {
        $node = "<div id='overlay' onclick='exitOverlay()'>" . "</div>";
        $node .= "<div id='contentOverlay' class='container col-xs-12 col-sm-9 col-md-9'>";
        $node .= <<<EOT
<button type="button" class="close" style="margin:5px 5px 0 0;" onclick='exitOverlay()'><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
EOT;
        $node .= '<!-- Owl Carousel Assets -->' .
                '<link href="' . 'resources/owl/owl.carousel.css" rel="stylesheet">' .
                '<link href="' . 'resources/owl/owl.theme.css" rel="stylesheet">';
        $node .=<<<EOT
							  <div style='background-color: white; padding: 20px 10px;'>
				              <div id="owl-demo" class="owl-carousel">
EOT;
        foreach ($this->images as $image) {
            $node.= "<div class='item'><img class='lazyOwl' data-src='img/".$image."' alt='Lazy Owl Image'></div>";
        }
        $node .= '</div></div><script type="text/javascript" src="' . 'resources/owl/owl.carousel.min.js"></script>';
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
        $node .= "</div>";
        echo $node;
    }

}

$o = new Overlay($_GET['images']);

$o->startup();
echo "<pre>";
echo "</pre>";

/*<div class="item"><img class="lazyOwl" data-src="img/verzuren.png" alt="Lazy Owl Image"></div>
				                <div class="item"><img class="lazyOwl" data-src="img/hart.jpg" alt="Lazy Owl Image"></div>
				                <div class="item"><img class="lazyOwl" data-src="img/Liftoff-Sinaasappel.png" alt="Lazy Owl Image"></div>
				                <div class="item"><img class="lazyOwl" data-src="img/H3OPro.png" alt="Lazy Owl Image"></div>
				                <div class="item"><img class="lazyOwl" data-src="img/Ontspannende gezichtsmassage foto.jpg" alt="Lazy Owl Image"></div>*/