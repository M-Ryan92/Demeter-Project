<div class="col-md-6">
	<h3><?php echo $contentTitle;?></h3>
	<?php 
		$l = explode(';',$content);
		$adres ="";
		for ($i=0; $i < sizeof($l); $i++) { 
			if($i<2 || $i>=4){
				echo $l[$i] . '<br>';
				if($i<2) $adres.= $l[$i];
			}elseif($i<3){
				echo '<br>Telefoon:' . $l[$i] . '<br>';  
			} elseif($i<4){
				echo '<a href="mailto:'.$l[$i].'">'.$l[$i].'</a><br><br>';  
			} 
		} 
	?>
	<iframe frameborder="0" width="100%" height="250" scrolling="no" marginheight="0" marginwidth="0" 
			src="https://maps.google.it/maps?q=<?php echo str_replace(' ', '+', $adres); ?>&amp;output=embed"></iframe>
</div>