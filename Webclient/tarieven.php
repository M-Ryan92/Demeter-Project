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

		<div class="container contentview" style="padding-left:0; padding-right:0;">
			<div class="voorwaarden">
				<div class="col-md-12">
					<h1 class="text-center" style="margin:0;">Tarieven</h1>
				</div>

				<div class="col-sm-offset-1 col-md-offset-2 col-xs-12 col-sm-10 col-md-8" style="padding-left:0; padding-right:0;">
				
					<div class="panel panel-default" style="min-width:370px;">
						<!-- Default panel contents -->
						<div class="panel-heading text-center">Natuurvoedingsconsulten</div>
							<div class="panel-body">
								<h4>Kennismaking</h4>
								Voor een eerste kennismaking kun je mij altijd bellen of mailen. Wil je hierna graag verder dan mail ik je een vragenlijst en maken we een afspraak voor het intakegesprek. 
							</div>
						<!-- Table -->
						<table class="table">
							<thead>
								<tr>
									<th>service</th>
									<th>duur</th>
									<th>prijs</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								<!-- item 1 -->
								<tr>
									<tr>
										<td>Intakegesprek</td>
										<td>ca 60 minuten</td>
										<td>€ 60</td>
										<td>
											<div id="1" onclick="toggle(event)" style="width: 42px; cursor: pointer;">
												<div style="
												display:inline-block;
												width:5px;
												height:5px;
												border: 5px solid transparent;
												border-top-color: rgba(141, 133, 133, 0.81);
												margin-bottom: -3px;
												margin-right: -2px
												"></div>
												<span style="display:inline-block; font-size:12px;">more</span>
											</div>
										</td>
									</tr>
									<tr id="toggle1" style="display:none;">
										<td colspan="4" style="border-top: 0; background-color:rgba(248, 152, 30, 0.5);">
										Tijdens de intake bespreken we aan de hand van de ingevulde vragenlijst je doelen, huidige voedingspatroon, 
										bewegingspatroon en eventuele lichamelijke klachten. Afhankelijk van je doel, zal ik je meten en wegen.
										Aan het eind van het gesprek bespreken we de mogelijkheden voor een vervolgtraject op basis van je wensen.
										Via de mail ontvang je tevens een schriftelijk advies, afgestemd op je leefpatroon en doelen. 
										</td>
									</tr>
								</tr>
								<!-- item 2 -->
								<tr>
									<tr>
										<td >Vervolgconsulten</td>
										<td>ca 30 minuten</td>
										<td>€ 30</td>
										<td>
											<div id="2" onclick="toggle(event)" style="width: 42px; cursor: pointer;">
												<div style="
												display:inline-block;
												width:5px;
												height:5px;
												border: 5px solid transparent;
												border-top-color: rgba(141, 133, 133, 0.81);
												margin-bottom: -3px;
												margin-right: -2px
												"></div>
												<span style="display:inline-block; font-size:12px;">more</span>
											</div>
										</td>
									</tr>
									<tr id="toggle2" style="display:none;">
										<td colspan="4" style="border-top: 0; background-color:rgba(248, 152, 30, 0.5);">
										Tijdens het vervolggesprek kijken we of je de gegeven adviezen hebt kunnen toepassen in je dagelijkse leven en waar nog eventuele knelpunten zijn.
										Is je doel afslanken dan meet en weeg ik je nogmaals en bekijken we aan de hand van ontwikkelingen in spiermassa of je  op een gezonde wijze aan het afslanken bent.
										Afhankelijk van je wensen, krijg je aanvullend advies en informatie.
										</td>
									</tr>
								</tr>
								<!-- item 3 -->
								<tr>
									<tr>
										<td>Pakket : Intakegesprek + 5 vervolgafspraken</td>
										<td>intakegesprek ca. 60 minuten, de vervolgafspraken ca. 30 minuten</td>
										<td>Pakketprijs: €  150</td>
										<td>
											<div id="3" onclick="toggle(event)" style="width: 42px; cursor: pointer;">
												<div style="
												display:inline-block;
												width:5px;
												height:5px;
												border: 5px solid transparent;
												border-top-color: rgba(141, 133, 133, 0.81);
												margin-bottom: -3px;
												margin-right: -2px
												"></div>
												<span style="display:inline-block; font-size:12px;">more</span>
											</div>
										</td>
									</tr>
									<tr id="toggle3" style="display:none">
										<td colspan="4" style="border-top: 0; background-color:rgba(248, 152, 30, 0.5);">
											Als je graag wat intensievere begeleiding wil en een stok achter de deur is dit pakket een goede optie.
											Na het intakegesprek zien we elkaar dan in een voor jou prettige frequentie,
											waarbij je iedere keer wordt gemeten en gewogen om de voortgang inzichtelijk te maken.
										</td>
									</tr>
								</tr>
							</tbody>
						</table>
					</div>
						Massage therapieën en workshops </br>
						Holistic Pulsing	(ca 1 ½ uur)						€ 60 </br>
						Gezichtsmassage  met handreflex en hotstones (ca. 50 min)		€ 35 </br>
						Oorkaarstherapie met oorreflex ( ca 40 min)				€ 30 </br>
						Workshop Introductie Holistic Pulsing 1 en 2  (dagdeel)			€ 45 </br>
						Workshop Gezonder door ontzuren	(ca 1 ½ uur)			€ 20 </br>
						Prijzen zijn inclusief  BTW
					</h6>
				</div>
			</div>
		</div>

		<?php include($baseComponents.'footer/footer.php'); ?>

		<script type="text/javascript" src="<?php echo $jQuery; ?>"></script>
		<script type="text/javascript" src="<?php echo $bootstrapJS; ?>"></script>
		<script type="text/javascript" >
		function toggle(e){
			var target = e.currentTarget,
				pointer = target.children[0],
				label = target.children[1];
				
			if(label.innerHTML === 'more') {
				$(pointer).css('border-bottom-color', 'rgba(141, 133, 133, 0.81)');
				$(pointer).css('border-top-color', 'rgba(0,0,0,0)');
				$(pointer).css('margin-bottom', '2px');
				label.innerHTML = 'less';
				$('#toggle'+target.id).fadeIn(200);//.animate({display: 'table-row'}, 100);
			}else{
				$(pointer).css('border-top-color', 'rgba(141, 133, 133, 0.81)');
				$(pointer).css('border-bottom-color', 'rgba(0,0,0,0)');
				$(pointer).css('margin-bottom', '-3px');
				label.innerHTML = 'more';
				$('#toggle'+target.id).fadeOut(200);//.animate({display: 'none'}, 100);
			}

			
			//table-row
		}
		</script>
	</body>
</html>