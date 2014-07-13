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
			.container .col-md-9 p{
				margin-top: 15px;
			}
			.container .col-md-3 .list-group{
				margin-top:10px;
			}
			@media (max-width : 1000px) and
			(min-width: 769px){
				.container .col-md-3 {
					width: 300px;
					display: inline-block;
					vertical-align: top;
				}
				.container .col-md-9 {
					display: inline-block;
					width: 400px;
				}
				.container .col-md-3 .img-responsive{
					height: 300px;
					width: 300px;
				}
			}
			@media (max-width : 768px){
				.container .col-md-3 .img-responsive{
					height: 300px;

				}
			}
		</style>
	</head>
	<body id='footermargin'>
		<?php include($baseComponents."header/header.php"); ?>

		<div class="container contentview">
			<div class="col-md-12 titlePlaceholder">
				<h1 class="text-center title">Oorkaars therapie</h1>
			</div>

			<div class="col-md-3">
				<a href="#" class="thumbnail">
					<img src="<?php echo $img.'oor-reflexzones.jpg'; ?>" class="img-responsive">
				</a>
				<button class="btn btn-block btn-primary active" onclick="contactToggle('#description', '#contact')" id="description">
					Beschrijving
				</button>
				<button class="btn btn-block btn-primary" onclick="contactToggle('#contact', '#description')" id="contact">
					Contact
				</button>
				<ul class="list-group">
					<li class="list-group-item">
						Prijs:
						<span style="float: right;">€ 30,-</span>
					</li>
					<li class="list-group-item">
						Duur:
						<span style="float:right;">Ca 40 min</span>
					</li>
				</ul>
			</div>

			<div class="col-md-9" style='margin-bottom: 30px;'>
				<p id="maintext"><b>
					De oorkaars therapie is een warmtetherapie die het lichaam ontspant en de doorbloeding stimuleert en op zijn beurt weer belangrijk is voor de genezingsprocessen.
						Oorkaarsen werken lichaamszuiverend. Alle met het oor verbonden organen, zoals buitenkant trommelvlies, middenoor en evenwichtsorgaan, worden door de warmtewerking beïnvloed. Een lichte onderdruk (schouweffect) in de oorkaars en een trilling van de stijgende lucht te wijten aan de natuurlijke beweging van de vlam, geven een lichte massage van het trommelvlies. Dit brengt een intensief gevoel van aangename warmte teweeg en een "bevrijdend" aanvoelende drukregeling in oor-, voorhoofd- en bijholten gebied. Deze lichamelijke prikkel wordt bijna onmiddellijk na het aanwenden beschreven als een weldadig gevoel, pijn- en drukverminderend, vooral in hoofd en oorgebied. Spontaan kan dit ook een vrijere neusademhaling en een beter geurvermogen tot gevolg hebben, ook bij een tot dan toe verstopte neus.
				</b></p>
				<div id="descriptioncontent">
					<p style="margin: 0px">
						Bovendien geeft deze ceremonie een heerlijk gevoel van ontspanning en geborgenheid.
						Door de directe werking van de kruiden op het zenuwstelsel van het limbische systeem is het mogelijk om meerdere klachten te behandelen, omdat het limbische systeem veel psychische en fysieke klachten beïnvloedt.
						Een aantal veel voorkomende klachten die je met ondersteuning van oorkaarsen kunt behandelen zijn:
					</p>
					<ul>
						<li>irritaties aan het oor, neus, voorhoofd en bijholten</li>
						<li>hooikoorts</li>
						<li>oordruk (dichtslaan van het oor)</li>
						<li>oorsuizen</li>
						<li>drukregulatie bij hoofdpijn</li>
						<li>migraine</li>
						<li>bijholteontstekingen</li>
						<li>verkoudheid en griep</li>
						<li>keelpijn, ontstoken amandelen</li>
						<li>doorbloedingsstoornissen van het oor</li>
						<li>hyperactiviteit</li>
						<li>stress</li>
						<li>nervositeit, angsten, depressies</li>
						<li>slapeloosheid</li>
						<li>vermoeidheid (ook psychisch)</li>
					</ul>

					<p>
						Bij het regelmatig gebruiken van oorkaarsen kunnen oude processen weer actief gemaakt worden en zo voorgoed uit het lichaam worden verbannen.
						In een aantal gevallen mag de oorkaars therapie niet worden toegepast:
					</p>
					<ul>
						<li>geperforeerd trommelvlies</li>
						<li>geïmplanteerde gehoorbeentjes</li>
						<li>ontsteking van het buitenoor en middenoor</li>
						<li>eczeem en schimmelinfecties in het oor</li>
						<li>epilepsie</li>
						<li></li>
						<li></li>
					</ul>
					<p>Raadpleeg bij twijfel altijd eerst een reguliere arts !</p>

					<p>
						De oorkaarsen (Biosun)
						De oorkaarsen waren honderden jaren geleden een veel voorkomend ritueel- en ceremonievoorwerp bij de natuurvolkeren uit Midden- en Noord Amerika, Indonesië, Azië. Als heilig en spiritueel onderdeel was het gebruik slechts aan een paar ingewijden, sjamanen en medicijnmannen voorbehouden. De oorkaars is een holle buis van 20 centimeter bestaand uit 100% linnen weefsel van de beste kwaliteit, dat wil zeggen niet met bestrijdingsmiddelen bespoten op het veld en niet chemisch behandelt bij de verwerking. Dit linnen weefsel is verwerkt met een mengsel van speciale indiaanse geneeskrachtige kruiden (salie, kamille en Sint-Janskruid) en zuivere bijenwas en honingextracten. Dit speciale mengsel is een origineel recept van de Hopi-indianen en wordt met de hand gerold in het linnen weefsel. De oorkaars is voorzien van een speciale filter, die voorkomt dat de bijenwas in het oor loopt.

					</p>

					<p>Wilt u meer weten of een afspraak maken? <a onclick="contactToggle('#contact', '#description')">Klik dan hier of op de knop contact.</a></p>
				</div>
				<div id="contactcontent" style="margin-top: 0px;display: none;">
					<form>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="name">
										Naam</label>
									<input type="text" class="form-control" id="name" placeholder="Naam invoeren" required="required" />
								</div>
								<div class="form-group">
									<label for="email">
										Email Adres</label>
									<div class="input-group">
										<span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
										</span>
										<input type="email" class="form-control" id="email" placeholder="Email invoeren" required="required" /></div>
								</div>
								<div class="form-group">
									<label for="subject">
										Onderwerp</label>
									<select id="subject" name="subject" class="form-control" required="required">
										<option value="na" selected="">Kies een onderwerp:</option>
										<option value="service">Afspraak</option>
										<option value="suggestions">Vraag</option>
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="name">
										Bericht</label>
									<textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
											  placeholder="Bericht"></textarea>
								</div>
							</div>
							<div class="col-md-12">
								<button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
									Verzend bericht</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<?php include($baseComponents.'footer/footer.php'); ?>

	<script type="text/javascript" src="<?php echo $jQuery; ?>"></script>
	<script type="text/javascript" src="<?php echo $bootstrapJS; ?>"></script>
	<script type="text/javascript">
		function contactToggle(obj, obj2) {
			$(obj).addClass("active");
			$(obj2).removeClass("active");

			$(obj   + 'content').slideDown();
			$(obj2 + 'content').slideUp();
		}
	</script>
</body>
</html>