<?php
if(!isset($id)) {
	//default carousel skin
	$id='myCarousel';
}
if(!isset($autoPlay)) {
	$autoPlay = false;
}
if(!isset($carouselControlls)) {
	$carouselControlls = false;
}
if(!isset($indicators) && $carouselControlls === true) {
	$indicators = true;
}else {
	$indicators = false;
}

if(!isset($autoPlay)) {
	$autoPlay = false;
}



if(!$autoPlay) {
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
} elseif(is_integer($autoPlay)) {
	echo '
		<script>
			$(document).ready(function(){
				$(\'.carousel\').carousel({interval: '.$autoPlay.'});
			});
		</script>
	';
}
?>
<div class="<?php echo $id;?>">
	<div id="<?php echo $id;?>" class="carousel slide col-md-offset-2 col-md-8" data-ride="carousel">
		<!-- Carousel indicators -->
		<?php
		if($carouselControlls && $indicators){
			echo '
				<ol class="carousel-indicators">
					<li data-target="#'.$id.'" data-slide-to="0" class="active"></li>
					<li data-target="#'.$id.'" data-slide-to="1"></li>
					<li data-target="#'.$id.'" data-slide-to="2"></li>
				</ol>
			';
		}
		?>
		<!-- Carousel items -->
		<div class="carousel-inner text-center">
			<div class="active item">
				<h2>Slide 1</h2>
				<div>
					<h3>First slide label</h3>
					<p>and some random text</p>
				</div>
			</div>
			<div class="item">
				<h2>Slide 2</h2>
				<div>
					<h3>Second slide label</h3>
					<p>and some random text</p>
				</div>
			</div>
			<div class="item">
				<h2>Slide 3</h2>
				<div >
					<h3>Third slide label</h3>
					<p>and some random text</p>
				</div>
			</div>
		</div>
		<!-- Carousel nav -->
		<?php
			if($carouselControlls){
				echo '
					<a class="carousel-control left" href="#'.$id.'" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left"></span>
					</a>
					<a class="carousel-control right" href="#'.$id.'" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right"></span>
					</a>
					';
			}
		?>
	</div>
</div>