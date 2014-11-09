<div class="col-md-9">
	<div id="descriptioncontent" style="display: block;">
		<?php echo $content;
			if($form != 0){
				echo <<<EOT
					<p>Wilt u meer weten of een afspraak maken? <a onclick="contactToggle('#contact', '#description')">Klik dan hier of op de knop contact.</a></p>
EOT;
			}
		?>
	</div>
	<?php
		$col;
		if($form != 0){
			echo '<div id="contactcontent" style="display: none;">';
			require('baseForm.php');
			echo '</div>';
		}
	?>
</div>