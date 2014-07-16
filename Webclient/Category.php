<?php include('globalsettings.php'); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link href="<?php echo $bootstrapCSS; ?>" rel="stylesheet" type="text/css">
		<link href="<?php echo $baseCSS; ?>" rel="stylesheet" type="text/css">
	</head>
	<body id='footermargin'>
		<?php include($baseComponents."header/header.php"); ?>

		<div class="container contentview">

			<div class="col-md-12 titlePlaceholder">
				<h1 class="text-center title">overzicht services</h1>
			</div>
			<!-- category header -->
			<div class=" workshopsHeader container col-xs-12 col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-2">
				<div class="header-left col-xs-7 col-sm-8 col-md-9">
					<span>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam tellus eros, posuere quis pharetra et, auctor in lacus. Donec elementum risus ut nunc dictum interdum. Vivamus rutrum dapibus diam sit amet facilisis. Curabitur ut est aliquet, interdum quam at, convallis ante. Cras non nunc et enim facilisis volutpat. Pellentesque eget felis vitae mauris placerat vulputate vitae eget turpis. Duis eleifend felis sit amet molestie fringilla. Quisque et gravida dolor. Aliquam quis arcu in orci luctus blandit. Proin non ligula vel ipsum blandit aliquam eget ac est. Phasellus vitae tortor non erat aliquam ornare vel pellentesque mauris. Fusce nec mauris urna. Duis tristique ultrices felis a sollicitudin. Pellentesque ullamcorper, ante vitae bibendum sodales, metus turpis volutpat metus, et accumsan eros mauris sed justo. Suspendisse id leo nec magna tempus sodales eu et sapien
					</span>
				</div>
				<div class="header-right col-xs-5 col-sm-4 col-md-3">
					<img class="img-responsive imgPlaceholder" src="http://www.doeners.nl/wp-content/uploads/2013/12/workshop.jpg"/>
				</div>
			</div>
			<!-- list of workshops -->
			<div class="workshopsList container col-xs-12 col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-2">
				<!-- list header -->
				<div class="listHeader col-xs-12">
					<div class="noPadding col-xs-5">
						<div class="btn-group">
							<button class="btn btn-sm btn-default">
								<span class="glyphicon glyphicon-th" ></span>
							</button>
							<button class="btn btn-sm btn-default" >
								<span class="glyphicon glyphicon-list"></span>
							</button>
						</div>
					</div>
					<div class="searchpanel col-xs-7">
						<div class="input-group">
							<input type="text" placeholder="Search workshop" class="form-control">
							<span class="input-group-btn">
								<button class="btn btn-default" type="button">
									<span class="glyphicon glyphicon-search"></span>
								</button>
							</span>
						</div>
					</div>
				</div>

				<!-- list item view -->
				<div class="listPlaceholder col-xs-12">
					<div class="listContent col-xs-12">
					<style>
						.listItem {
							cursor:pointer;
							border: 1px solid rgba(255, 255, 255, 0);
						}

						.listItem:Hover {
							border: 1px solid rgba(94, 133, 26, 0.55) !important;
						}
					</style>
					<?php
					function item($text, $img, $url){

						echo '<!-- item 1 -->
						<div class="listItem container col-xs-12" onclick="window.location.href=\''.$url.'\'";>
							<div class="item-left col-xs-7 col-sm-8 col-md-9">
								<span>
									'.$text.'
								</span>
							</div>
							<div class="item-right col-xs-5 col-sm-4 col-md-3">
								<img class="img-responsive imgPlaceholder" src="'.$img.'"/>
							</div>
						</div>';
					};

					// item 1 holistic
					$url='Holistic.php';
					$itemText = 'Holistic Pulsing is een massagemethode, die je uitnodigt tot diepe ontspanning en loslaten. De gedachte achter de methode is eenvoudig : je lichaam dat voor een groot deel uit water bestaat, is een grote ritmische beweging. Bloed, adem, energie, het stroomt allemaal door je lichaam heen.';
					$src = $img.'FitNJoy foto0.jpg';
					item($itemText, $src, $url);

					// item 2 gezichtsmassage
					$url='Gezichtsmassage.php';
					$itemText = 'Druk, druk, druk …… een haastig leven, een drukke baan, volop spanning en stress, de aandacht voor onszelf vervaagt …… het leven van de moderne tijd. Herken je dit? Steeds meer mensen realiseren zich dat we een gezonder en een meer ontspannen leven moeten gaan leiden. Gun je zelf eens een moment van rust met een ontspannende gezichtsmassage.';
					$src = $img.'Ontspannende gezichtsmassage foto.jpg';
					item($itemText, $src, $url);

					// item 3 Oorkaarstherapie
					$url='Oorkaarstherapie.php';
					$itemText = 'De oorkaars therapie is een warmtetherapie die het lichaam ontspant en de doorbloeding stimuleert en op zijn beurt weer belangrijk is voor de genezingsprocessen. Oorkaarsen werken lichaamszuiverend. Alle met het oor verbonden organen, zoals buitenkant trommelvlies, middenoor en evenwichtsorgaan, worden door de warmtewerking beïnvloed. Een lichte onderdruk (schouweffect) in de oorkaars en een trilling van de stijgende lucht te wijten aan de natuurlijke beweging van de vlam, geven een lichte massage van het trommelvlies. Dit brengt een intensief gevoel van aangename warmte teweeg en een "bevrijdend" aanvoelende drukregeling in oor-, voorhoofd- en bijholten gebied. Deze lichamelijke prikkel wordt bijna onmiddellijk na het aanwenden beschreven als een weldadig gevoel, pijn- en drukverminderend, vooral in hoofd en oorgebied. Spontaan kan dit ook een vrijere neusademhaling en een beter geurvermogen tot gevolg hebben, ook bij een tot dan toe verstopte neus.';
					$src = $img.'oor-reflexzones.jpg';
					item($itemText, $src, $url);

					// item 4 workshopPulsingEen&Twee
					$url='workshopPulsingEen&Twee.php';
					$itemText = 'workshopPulsingEen';
					$src = 'http://www.doeners.nl/wp-content/uploads/2013/12/workshop.jpg';
					item($itemText, $src, $url);

					// item 5 Oorkaarstherapie
					$url='GezonderOntzuren.php';
					$itemText = 'GezonderOntzuren';
					$src = 'http://www.doeners.nl/wp-content/uploads/2013/12/workshop.jpg';
					item($itemText, $src, $url);
					?>
					</div>
				</div>
			</div>
		</div>

		<?php include($baseComponents.'footer/footer.php'); ?>

		<script type="text/javascript" src="<?php echo $jQuery; ?>"></script>
		<script type="text/javascript" src="<?php echo $bootstrapJS; ?>"></script>
	</body>
</html>