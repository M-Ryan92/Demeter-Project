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
			<div class="tarieven">
				<div class="col-md-12 titlePlaceholder">
					<h1 class="title">Tarieven</h1>
				</div>

				<div class="col-sm-offset-1 col-md-offset-2 col-xs-12 col-sm-10 col-md-8 clear-padding">

					<div class="panel panel-default">
						<!-- Default panel contents -->
						<div class="panel-heading text-center">Natuurvoedingsconsulten</div>
						<div class="panel-body">
							<h4>Kennismaking</h4>
							Voor een eerste kennismaking kun je mij altijd bellen of mailen. Wil je hierna graag verder dan mail ik je een vragenlijst en maken we een afspraak voor het intakegesprek.
							<br><br>
							de onderstaande prijzen zijn inclusief  BTW.
						</div>

						<div id="no-more-tables" class="noMoreTables">
							<!-- Table -->
							<table class="table">
								<thead>
									<tr>
										<th>service</th>
										<th>duur</th>
										<th>prijs</th>
										<th class="fixedwidth"></th>
									</tr>
								</thead>
								<tbody>
									<!-- item1 -->
									<tr>
										<td data-title="service">Intakegesprek</td>
										<td data-title="duur">ca 60 minuten</td>
										<td data-title="prijs">€60</td>
										<td>
											<div onclick="toggle(event)" data-toggle="collapse" data-target="#toggle1" class="accordion-toggle collapseBtn">
												<div class='btnLbl' id='more'></div>
											</div>
										</td>
									</tr>
									<tr >

										<td class="hiddenRow" colspan="4">
										<div class="accordian-body collapse contextPlaceholder" id="toggle1">
											<div class="accordion-inner">
												Tijdens de intake bespreken we aan de hand van de ingevulde vragenlijst je doelen, huidige voedingspatroon,
												bewegingspatroon en eventuele lichamelijke klachten. Afhankelijk van je doel, zal ik je meten en wegen.
												Aan het eind van het gesprek bespreken we de mogelijkheden voor een vervolgtraject op basis van je wensen.
												Via de mail ontvang je tevens een schriftelijk advies, afgestemd op je leefpatroon en doelen.
											</div>
										</div>
										</td>
									</tr>

									<!-- item2 -->
									<tr>
										<td data-title="service">Vervolgconsulten</td>
										<td data-title="duur">ca 30 minuten</td>
										<td data-title="prijs">€30</td>
										<td>
											<div onclick="toggle(event)" data-toggle="collapse" data-target="#toggle2" class="accordion-toggle collapseBtn">
												<div class='btnLbl' id='more'></div>
											</div>
										</td>
									</tr>
									<tr >

										<td class="hiddenRow" colspan="4">
										<div class="accordian-body collapse contextPlaceholder" id="toggle2">
											<div class="accordion-inner">
												Tijdens het vervolggesprek kijken we of je de gegeven adviezen hebt kunnen toepassen in je dagelijkse leven en waar nog eventuele knelpunten zijn.
												Is je doel afslanken dan meet en weeg ik je nogmaals en bekijken we aan de hand van ontwikkelingen in spiermassa of je  op een gezonde wijze aan het afslanken bent.
												Afhankelijk van je wensen, krijg je aanvullend advies en informatie.
											</div>
										</div>
										</td>
									</tr>

									<!-- item3 -->
									<tr>
										<td data-title="service">Pakket : Intakegesprek + 5 vervolgafspraken</td>
										<td data-title="duur">intakegesprek ca. 60 minuten, de vervolgafspraken ca. 30 minuten</td>
										<td data-title="prijs">Pakketprijs: €150</td>
										<td>
											<div onclick="toggle(event)" data-toggle="collapse" data-target="#toggle3" class="accordion-toggle collapseBtn">
												<div class='btnLbl' id='more'></div>
											</div>
										</td>
									</tr>
									<tr >

										<td class="hiddenRow" colspan="4">
										<div class="accordian-body collapse contextPlaceholder" id="toggle3">
											<div class="accordion-inner">
												Als je graag wat intensievere begeleiding wil en een stok achter de deur is dit pakket een goede optie.
												Na het intakegesprek zien we elkaar dan in een voor jou prettige frequentie,
												waarbij je iedere keer wordt gemeten en gewogen om de voortgang inzichtelijk te maken.
											</div>
										</div>
										</td>
									</tr>

								</tbody>
							</table>
						</div>
					</div>

					<div class="panel panel-default">
					<!-- Default panel contents -->
						<div class="panel-heading text-center">Massage therapieën en workshops</div>
						<div id="no-more-tables" class="noMoreTables">
							<table class="table">
								<thead>
									<tr>
										<th>service</th>
										<th>duur</th>
										<th>prijs</th>
										<th class="fixedwidth"></th>
									</tr>
								</thead>
								<tbody>
									<!-- item1 -->
									<tr>
										<td data-title="service">Holistic Pulsing</td>
										<td data-title="duur">ca 1 ½ uur</td>
										<td data-title="prijs">€60</td>
										<td class="noBtn"></td>
									</tr>
									<tr>
										<td data-title="service">Gezichtsmassage  met handreflex en hotstones</td>
										<td data-title="duur">ca 50 min</td>
										<td data-title="prijs">€35</td>
										<td class="noBtn"></td>
									</tr>
									<tr>
										<td data-title="service">Oorkaarstherapie met oorreflex</td>
										<td data-title="duur">ca 40 min</td>
										<td data-title="prijs">€30</td>
										<td class="noBtn"></td>
									</tr>
									<tr>
										<td data-title="service">Workshop Introductie Holistic Pulsing 1 en 2</td>
										<td data-title="duur">dagdeel</td>
										<td data-title="prijs">€45</td>
										<td class="noBtn"></td>
									</tr>
									<tr>
										<td data-title="service">Workshop Gezonder door ontzuren</td>
										<td data-title="duur">ca 1 ½ uur</td>
										<td data-title="long prijs label is verry verry long help us ellipsis!" title="long prijs label is verry verry long help us ellipsis!">€20</td>
										<td class="noBtn"></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>

		<?php include($baseComponents.'footer/footer.php'); ?>

		<script type="text/javascript" >
		function toggle(e){
			var target = e.currentTarget,
				pointer = target.children[0];

			if(pointer.id === 'more') {
				pointer.id = 'less';
				$(pointer).css('border-bottom-color', 'rgba(141, 133, 133, 0.81)');
				$(pointer).css('border-top-color', 'rgba(0,0,0,0)');
				$(pointer).css('margin-bottom', '2px');
			}else{
				pointer.id = 'more';
				$(pointer).css('border-top-color', 'rgba(141, 133, 133, 0.81)');
				$(pointer).css('border-bottom-color', 'rgba(0,0,0,0)');
				$(pointer).css('margin-bottom', '-3px');
			}


			//table-row
		}
		</script>
	</body>
</html>