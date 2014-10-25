<div class="col-md-6 text-center">
	<img src="<?php echo $img . $contentImg; ?>" alt="logo" class="<?php echo $imgForm; ?>">
	<h2><?php echo $contentTitle; ?></h2>
	<?php 
		echo $content;
		if($pageLinks != ''){
			echo '<p><a class="btn btn-success" href="'.$pageLinks.'" role="button">'.'Lees meer &raquo;'.'</a></p>';	
		}
	?>
</div>