<?php
class OwlCarrousel {

    private $images = array();
    
    public function __construct($images) {
        $this->images = $images;
    }
    
    public function outputSlider() {
        $node = <<<EOT
                <!-- Owl Carousel Assets -->
		<link href="resources/owl/owl.carousel.css" rel="stylesheet">
		<link href="resources/owl/owl.theme.css" rel="stylesheet">
                <div id="owl-demo" class="owl-carousel">
EOT;
        foreach ($this->images as $image) {
            $node .= '<div class="item"><img class="lazyOwl" data-src="img/'.$image->getImageSrc().'" alt="'.$image->getAltImage().'"></div>';
        }
        $node .= <<<EOT
                </div>
                <script type="text/javascript" src="resources/owl/owl.carousel.min.js"></script>
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
      return $node;  
    }  
}

class Image {
    private $imageSrc;
    private $altImage;
    
    public function __construct($imageSrc, $altImage) {
        $this->imageSrc = $imageSrc;
        $this->altImage = $altImage;
    }
    
    public function getImageSrc() {
        return $this->imageSrc;
    }
    
    public function getAltImage() {
        return $this->altImage;
    }
}

