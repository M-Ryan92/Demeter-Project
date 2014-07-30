<?php
	$autoPlay = 5000;
	$carouselControlls = true;

	$itemList = array();

	$item1 = '<div class="item active">
					<h2>Slide 1</h2>
					<div>
						<h3>First slide label</h3>
						<p>and some random text</p>
					</div>
				</div>';
	$item2 = '<div class="item">
					<h2>Slide 2</h2>
					<div>
						<h3>Second slide label</h3>
						<p>and some random text</p>
					</div>
				</div>';
	$item3 = '<div class="item">
					<h2>Slide 3</h2>
					<div >
						<h3>Third slide label</h3>
						<p>and some random text</p>
					</div>
				</div>';

	array_push($itemList, $item1, $item2, $item3);
?>
<div id="overlay">
</div>
<div id="content">
		<?php include('../../globalsettings.php'); ?>
		<?php include('carousel.php'); ?>
</div>