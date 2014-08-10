<?php
$state = 'block';
if (!isset($maxAllowed)) {
    //default carousel skin
    $maxAllowed = 3;
}
if (!isset($id)) {
    //default carousel skin
    $id = 'myCarousel';
}
if (!isset($autoPlay)) {
    $autoPlay = false;
}
if (!isset($carouselControlls)) {
    $carouselControlls = false;
}
if (!isset($indicators) && $carouselControlls === true) {
    $indicators = true;
} else {
    $indicators = false;
}

if (!isset($autoPlay)) {
    $autoPlay = false;
}

if (!isset($itemList) || !is_array($itemList)) {
    $state = 'none';
    $itemList = array();
}

if ($autoPlay) {
    echo '
		<script>
			$(document).ready(function(){
				$(\'.carousel\').carousel({interval: false});
				$(document).on(\'mouseleave\', \'.carousel\', function() {

					$(this).carousel(\'pause\');
				});
			});
		</script>
	';
} elseif (is_integer($autoPlay)) {
    echo '
		<script>
			$(document).ready(function(){
				$(\'.carousel\').carousel({interval: ' . $autoPlay . '});
			});
		</script>
	';
}
?>
<div class="<?php echo $id; ?>" style='<?php echo 'display:' . $state ?>'>
    <div id="<?php echo $id; ?>" class="carousel slide col-md-offset-2 col-md-8" data-ride="carousel">
        <!-- Carousel indicators -->
        <?php
        $arrayLenght = count($itemList);
        if ($arrayLenght <= $maxAllowed && $arrayLenght > 0) {
            echo '<ol class="carousel-indicators">';
            if ($carouselControlls && $indicators) {
                $itemId = 0;
                foreach ($itemList as $item) {
                    if ($itemId === 0) {
                        echo '<li data-target="#' . $itemId . '" data-slide-to="' . $itemId . '" class="active"></li>';
                    } else {
                        echo '<li data-target="#' . $itemId . '" data-slide-to="' . $itemId . '"></li>';
                    }
                    $itemId++;
                }
            }
            echo '</ol>';
        }
        ?>
        <!-- Carousel items -->
        <div class="carousel-inner text-center">
            <?php
            foreach ($itemList as $item) {
                echo $item;
            }
            ?>
        </div>
        <!-- Carousel nav -->
        <?php
        if ($carouselControlls) {
            echo '
                <a class="carousel-control left" href="#' . $id . '" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="carousel-control right" href="#' . $id . '" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
                ';
        }
        ?>
    </div>
</div>