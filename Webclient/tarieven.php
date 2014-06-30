<?php include('globalsettings.php'); ?>
<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link href="<?php echo $bootstrapCSS; ?>" rel="stylesheet" type="text/css">
		<link href="<?php echo $baseCSS; ?>" rel="stylesheet" type="text/css">
		<style>
			.table>thead>tr>th, .table>tbody>tr>th, .table>tfoot>tr>th, .table>thead>tr>td, .table>tbody>tr>td, .table>tfoot>tr>td {
				padding: 8px 10px 8px 10px;
			}
			.hiddenRow {
				padding: 0 !important;
			}
			.hoverinbtn:hover {
				background-color: rgba(231, 132, 25, 0.59) !important;
			}
			.hoverbtnlbl:hover {
				background-color: rgba(0, 0, 0, 0) transparent rgba(104, 98, 98, 0.811765);
			}
			.accordion-inner {
				padding: 10px 15px 10px 15px;
			}
		</style>
	</head>
	<body id='footermargin'>
		<?php include($baseComponents."header/header.php"); ?>

		<div class="container contentview" style="padding-left:0; padding-right:0;">
			<div class="voorwaarden">
				<div class="col-md-12">
					<h1 class="text-center" style="margin:0; padding-bottom:10px;">Tarieven</h1>
				</div>

				<div class="col-sm-offset-1 col-md-offset-2 col-xs-12 col-sm-10 col-md-8" style="padding-left:0; padding-right:0;">

					<div class="panel panel-default" style="min-width:370px; rgba(247, 139, 23, 0.49); border-color:rgba(247, 139, 23, 0.49);">
						<!-- Default panel contents -->
						<div class="panel-heading text-center" style="background-color:rgba(247, 139, 23, 0.49);">Natuurvoedingsconsulten</div>
							<div class="panel-body">
								<h4>Kennismaking</h4>
								Voor een eerste kennismaking kun je mij altijd bellen of mailen. Wil je hierna graag verder dan mail ik je een vragenlijst en maken we een afspraak voor het intakegesprek.
								</br></br>
								de onderstaande prijzen zijn inclusief  BTW.
							</div>
						<!-- Table -->
						<table class="table">
							<thead style="background-color: rgba(247, 139, 23, 0.49);">
								<tr>
									<th>service</th>
									<th>duur</th>
									<th>prijs</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								<!-- item1 -->
								<tr>
									<tr>
										<td>Intakegesprek</td>
										<td>ca 60 minuten</td>
										<td>€60</td>
										<td>
											<div onclick="toggle(event)" data-toggle="collapse" data-target="#toggle1" class="accordion-toggle hoverinbtn"
											style="
											cursor: pointer;
											border-radius: 90px;
											width: 30px;
											background-color: rgba(209, 206, 202, 1);
											">
												<div class='hoverbtnlbl' id='more' style="
												display:inline-block;
												width:5px;
												height:5px;
												border: 5px solid transparent;
												border-top-color: rgba(141, 133, 133, 0.81);
												margin-bottom: -3px;
												margin-left: 10px
												"></div>
											</div>
										</td>
									</tr>
									<tr >

										<td class="hiddenRow" colspan="4">
										<div class="accordian-body collapse" id="toggle1" style="
										background-color:rgba(238, 144, 24, 0.27);
										border-bottom-right-radius: 3px;
										border-bottom-left-radius: 3px;
										">
											<div class="accordion-inner">
												Tijdens de intake bespreken we aan de hand van de ingevulde vragenlijst je doelen, huidige voedingspatroon,
												bewegingspatroon en eventuele lichamelijke klachten. Afhankelijk van je doel, zal ik je meten en wegen.
												Aan het eind van het gesprek bespreken we de mogelijkheden voor een vervolgtraject op basis van je wensen.
												Via de mail ontvang je tevens een schriftelijk advies, afgestemd op je leefpatroon en doelen.
											</div>
										</div>
										</td>
									</tr>
								</tr>

								<!-- item2 -->
								<tr>
									<tr>
										<td >Vervolgconsulten</td>
										<td>ca 30 minuten</td>
										<td>€30</td>
										<td>
											<div onclick="toggle(event)" data-toggle="collapse" data-target="#toggle2" class="accordion-toggle hoverinbtn"
											style="
											cursor: pointer;
											border-radius: 90px;
											width: 30px;
											background-color: rgba(209, 206, 202, 1);
											">
												<div class='hoverbtnlbl' id='more' style="
												display:inline-block;
												width:5px;
												height:5px;
												border: 5px solid transparent;
												border-top-color: rgba(141, 133, 133, 0.81);
												margin-bottom: -3px;
												margin-left: 10px
												"></div>
											</div>
										</td>
									</tr>
									<tr >

										<td class="hiddenRow" colspan="4">
										<div class="accordian-body collapse" id="toggle2" style="
										background-color:rgba(238, 144, 24, 0.27);
										border-bottom-right-radius: 3px;
										border-bottom-left-radius: 3px;
										">
											<div class="accordion-inner">
												Tijdens het vervolggesprek kijken we of je de gegeven adviezen hebt kunnen toepassen in je dagelijkse leven en waar nog eventuele knelpunten zijn.
												Is je doel afslanken dan meet en weeg ik je nogmaals en bekijken we aan de hand van ontwikkelingen in spiermassa of je  op een gezonde wijze aan het afslanken bent.
												Afhankelijk van je wensen, krijg je aanvullend advies en informatie.
											</div>
										</div>
										</td>
									</tr>
								</tr>

								<!-- item3 -->
								<tr>
									<tr>
										<td>Pakket : Intakegesprek + 5 vervolgafspraken</td>
										<td>intakegesprek ca. 60 minuten, de vervolgafspraken ca. 30 minuten</td>
										<td>Pakketprijs: €150</td>
										<td>
											<div onclick="toggle(event)" data-toggle="collapse" data-target="#toggle3" class="accordion-toggle hoverinbtn"
											style="
											cursor: pointer;
											border-radius: 90px;
											width: 30px;
											background-color: rgba(209, 206, 202, 1);
											">
												<div class='hoverbtnlbl' id='more' style="
												display:inline-block;
												width:5px;
												height:5px;
												border: 5px solid transparent;
												border-top-color: rgba(141, 133, 133, 0.81);
												margin-bottom: -3px;
												margin-left: 10px
												"></div>
											</div>
										</td>
									</tr>
									<tr >

										<td class="hiddenRow" colspan="4">
										<div class="accordian-body collapse" id="toggle3" style="
										background-color:rgba(238, 144, 24, 0.27);
										border-bottom-right-radius: 3px;
										border-bottom-left-radius: 3px;
										">
											<div class="accordion-inner">
												Als je graag wat intensievere begeleiding wil en een stok achter de deur is dit pakket een goede optie.
												Na het intakegesprek zien we elkaar dan in een voor jou prettige frequentie,
												waarbij je iedere keer wordt gemeten en gewogen om de voortgang inzichtelijk te maken.
											</div>
										</div>
										</td>
									</tr>
								</tr>
								<tr style="border: 1px solid;">

								</tr>
							</tbody>
						</table>
					</div>

					<div class="panel panel-default" style="min-width:370px; border-color:rgba(238, 144, 24, 0.7); border-color:rgba(247, 139, 23, 0.49);">
					<!-- Default panel contents -->
						<div class="panel-heading text-center" style="background-color:rgba(238, 144, 24, 0.7); background-color:rgba(247, 139, 23, 0.49);">Massage therapieën en workshops</div>
						<table class="table" style="border-color: rgb(0,0,0) !important;">
							<thead style="background-color: rgba(247, 139, 23, 0.49);">
								<tr>
									<th>service</th>
									<th>duur</th>
									<th>prijs</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								<!-- item1 -->
								<tr>
									<td>Holistic Pulsing</td>
									<td>ca 1 ½ uur</td>
									<td>€60</td>
									<td></td>
								</tr>
								<tr>
									<td>Gezichtsmassage  met handreflex en hotstones</td>
									<td>ca 50 min</td>
									<td>€35</td>
									<td></td>
								</tr>
								<tr>
									<td>Oorkaarstherapie met oorreflex</td>
									<td>ca 40 min</td>
									<td>€30</td>
									<td></td>
								</tr>
								<tr>
									<td>Workshop Introductie Holistic Pulsing 1 en 2</td>
									<td>dagdeel</td>
									<td>€45</td>
									<td></td>
								</tr>
								<tr>
									<td>Workshop Gezonder door ontzuren</td>
									<td>ca 1 ½ uur</td>
									<td>€20</td>
									<td></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>

		<?php include($baseComponents.'footer/footer.php'); ?>

		<script type="text/javascript" src="<?php echo $jQuery; ?>"></script>
		<script type="text/javascript" src="<?php echo $bootstrapJS; ?>"></script>
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