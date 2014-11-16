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
            $node .= '<div class="item"><a href="'.$image->getLinkPath().'"><img class="lazyOwl" data-src="img/'.$image->getImageSrc().'" alt="'.$image->getAltImage().'"></a></div>';
        }
        $node .= <<<EOT
                </div>
                <script type="text/javascript" src="resources/owl/owl.carousel.min.js"></script>
                <script>
    $(document).ready(function() {

      $("#owl-demo").owlCarousel({
        navigation      : true,
        navigationText  : ['<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>',
                            '<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>'],
        lazyLoad        : true,
        autoPlay        : true,
        slideSpeed      : 300,
        paginationSpeed : 400,
        responsive      : true,
        singleItem      : true
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
    private $linkPath;

    public function __construct($imageSrc, $altImage, $linkPath = "index.php") {
        $this->imageSrc = $imageSrc;
        $this->altImage = $altImage;
        $this->linkPath = $linkPath;
    }
    
    public function getImageSrc() {
        return $this->imageSrc;
    }
    
    public function getAltImage() {
        return $this->altImage;
    }
    public function getLinkPath() {
        return $this->linkPath;
    }


    
    
}