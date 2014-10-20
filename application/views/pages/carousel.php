<div class="col-md-12" style="margin-bottom: 20px;">
	<?php
	$images = array();
	$fileList = explode(';', $contentImg);
	$fileLable = explode(';', $content);
	
	for ($i=0; $i < sizeof($fileList); $i++) {
		if($fileList[$i] != "" || $fileList[$i] != null) array_push($images, new Image($fileList[$i], $fileLable[$i]));
	}
	$caroussel = new OwlCarousel($images);
	$caroussel->setBaseUrl($baseAssetUrl);
	echo $caroussel->outputSlider();
	?>
</div>