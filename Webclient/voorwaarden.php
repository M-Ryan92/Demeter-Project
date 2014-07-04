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
			<div class="voorwaarden">
				<div class="col-xs-12 col-sm-offset-1 col-sm-10 col-md-offset-2 col-md-8 titlePlaceholder">
					<h1 class="text-center title">Algemene voorwaarden</h1>
				</div>

				<div class="col-sm-offset-1 col-md-offset-2 col-xs-12 col-sm-10 col-md-8">
					<ul class="lijstje list-unstyled">
						<li>Raadpleeg bij gezondheidsklachten altijd eerst een reguliere arts.</li>
						<li>Massage bij ziekten is mogelijk, maar dan alleen met toestemming van de behandelend arts</li>
						<li>Medicijngebruik gaarne vooraf melden.</li>
						<li>Persoonlijke en medische gegevens worden nooit aan derden verstrekt en/of openbaar gemaakt.</li>
						<li>Contante betaling na consult/behandeling of via overschrijving binnen 7 dagen.</li>
						<li>Een afspraak afzeggen kan tot 24 uur van tevoren kosteloos. Wanneer u binnen 24 uur afzegt, wordt de besproken tijd in rekening gebracht.</li>
						<li>Cadeaubonnen zijn niet in te wisselen voor contant geld.</li>
						<li>Demeter Voeding & Welzijn is niet verantwoordelijk voor beschadiging, verlies of diefstal van persoonlijke bezittingen.</li>
						<li>Demeter Voeding & Welzijn is niet verantwoordelijk voor letstel aan het lichaam ontstaan tijdens  outdoor trainingen en/of behandelingen.</li>
					</ul>
				</div>
			</div>
		</div>

		<?php include($baseComponents.'footer/footer.php'); ?>

		<script type="text/javascript" src="<?php echo $jQuery; ?>"></script>
		<script type="text/javascript" src="<?php echo $bootstrapJS; ?>"></script>
	</body>
</html>