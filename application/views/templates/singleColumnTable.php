<div class=" col-md-offset-2 col-md-8">
	<div class="row col-md-12">
		<h4><?php echo $contentTitle; ?></h4>
		<ul class="list-group">
			<?php 
				
				$items = explode(',', $content);

				foreach ($items as $i) {
					echo '<li class="list-group-item">'.$i.'</li>';
				}
			?>
		</ul>
	</div>
</div>