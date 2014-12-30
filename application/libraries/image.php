<?php

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
