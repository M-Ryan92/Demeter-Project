<?php
	$autoPlay = 5000;
	$carouselControlls = true;

	$itemList = array();

	$item1 = '<div class="item active">
					<h2>Slide 1</h2>
					<div>
						<h3>First slide label</h3>
						<p>and some random text</p>
					</div>
				</div>';
	$item2 = '<div class="item">
					<h2>Slide 2</h2>
					<div>
						<h3>Second slide label</h3>
						<p>and some random text</p>
					</div>
				</div>';
	$item3 = '<div class="item">
					<h2>Slide 3</h2>
					<div >
						<h3>Third slide label</h3>
						<p>and some random text</p>
					</div>
				</div>';

	array_push($itemList, $item1, $item2, $item3);
?>
<?php include('globalsettings.php'); ?>
<?php include($forms);?>
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

		<script>
			var toggleOverlay = false;
			var overlay;
			var content;
			function overlayShow() {
				if(!toggleOverlay){
					//create overlay
					$.ajax({
						url: "<?php echo $baseComponents.'carousel/overlay.php'; ?>",
						success: function(data) {
						$('#result').html(data);
							overlay = jQuery(data);
							overlay.prependTo(document.body);
							//add esc watcher
							document.onkeydown = function(e) {
			 					var ESC_KEY = 27;
			 					if(e.which === ESC_KEY){
									overlayShow();
									document.onkeydown = null;
								}
							}

							//focus it and hide overlay
							document.getElementById('overlay').focus;
							$(document.getElementsByTagName('html')).css({ overflow: "hidden" });
							toggleOverlay = true;
						}
					});

				}else{
					//remove the overlay ,set toggle to false and remove overflow css
					overlay.remove();
					var cssObject = $( document.getElementsByTagName('html') ).prop('style');
					cssObject.removeProperty('overflow');
					toggleOverlay = false;
				}
			}
		</script>

	</head>
	<body id='footermargin'>
		<?php include($baseComponents."header/header.php"); ?>
		<div class="container contentview">
			<div class="col-md-12 titlePlaceholder">
				<h1 class="text-center title">Holistic Pulsing</h1>
			</div>

			<div class="col-md-3">
				<a href="#" class="thumbnail">
					<img src="<?php echo $img.'FitNJoy foto0.jpg'; ?>" onclick="overlayShow()" class="img-responsive">
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
						<span style="float: right;">€ 60,-</span>
					</li>
					<li class="list-group-item">
						Duur:
						<span style="float:right;">Anderhalf uur</span>
					</li>
				</ul>
			</div>

			<div class="col-md-9" style='margin-bottom: 30px;'>
				<p id="maintext"><b>
						Holistic Pulsing is een massagemethode, die je uitnodigt tot diepe ontspanning en loslaten.
						De gedachte achter de methode is eenvoudig : je lichaam dat voor een groot deel uit water bestaat, is een grote ritmische beweging.
						Bloed, adem, energie, het stroomt allemaal door je lichaam heen. Wanneer , om wat voor reden dan ook ,
						de energie in je lichaam niet meer vrijuit kan stromen, valt dit te zien en te ervaren zodra je lichaam zachtjes wordt gewiegd.
						Het rustige, ritmische schudden dat de pulser op je overdraagt brengt de energie en het water in je lichaam in beweging
						en voert je naar je gevoelservaringen. De kracht van het pulsen ligt in de zachtheid en vriendelijkheid.
						Zachtjes, ritmisch schudden heeft bijna altijd een ontspannend effect. Juist vanuit die ontspanning kan in je lichaam een nieuw evenwicht ontstaan.</b></p>
				<div id="descriptioncontent">
					<p style="margin: 0px">De basis van Holistic Pulsing bestaat uit ritmische beweging. Gedurende de hele sessie wordt het lichaam van de pulsee geheel of gedeeltelijk in ritmische beweging gehouden. Dit berust op het principe dat er leven is waar beweging is en dat overal waar beweging ophoudt stagnatie en verval optreden.
						Onze pijnen en zorgen, onze ziekten en aandoeningen, onze angst en woede, hebben ertoe geleid dat we ons krampachtig samentrekken.
						Wij hebben ons sinds onze babytijd stelselmatig vanuit ons lichaam teruggetrokken in ons hoofd. We zijn ons nog maar nauwelijks bewust van het feit dat we überhaupt een lichaam hebben, totdat we pijn ervaren.
						Holistic Pulsing is een gemakkelijke en duidelijke manier om iemand te helpen zich bewust te worden van zijn blokkades.
					</p>
					<p>
						De voortgaande pulsbeweging leidt ertoe dat de afvalstoffen in de lichaamscellen worden afgegeven aan de bloedstroom om via de nieren
						en de blaas te worden afgescheiden. Holistic Pulsing reproduceert de genezende eigenschappen van water snel en rechtstreeks door
						de doorstroming van onze lichaamsvochten te activeren en zo toxinen uit te scheiden en daardoor ons hele systeem te vitaliseren en
						weer in evenwicht te brengen.
					</p>
					<p>Holistic Pulsing draait om de onvoorwaardelijke liefde,
						die we ons lichaam al eeuwenlang hebben onthouden. Het eist niets, het forceert niets,
						het vraagt om niets en het probeert zelf niets te veranderen- en dat alleen al is het begin van alle zachtmoedige wonderen
						die zich bij Holistic Pulsing openbaren. Forceren leidt onveranderlijk tot datgene wat het probeert te elimineren.
						Alles waar tegen we vechten maken we sterker en alles wat we accepteren maakt ons sterker.
						Door zijn zachtheid kan Holistic Pulsing de hardnekkigste blokkades bereiken en laten verdwijnen.
					</p>
					<p>Wilt u meer weten of een afspraak maken? <a onclick="contactToggle('#contact', '#description')">Klik dan hier of op de knop contact.</a></p>
				</div>
				<div id="contactcontent" style="margin-top: 0px;display: none;">
                <?php
                $colum1 = new Colum(array(
                    new TextField("Naam", "Naam invoeren"),
                    new EmailField("Email Adres", "Email invoeren"),
                    new SelectField("Onderwerp", "s", array(new SelectOption("d","Kies een onderwerp", true),
                        new SelectOption("vraag","Vraag"),
                        new SelectOption("Afspraak","Afspraak")))
                ));
                $colum2 = new Colum(array(new TextBoxField("Berich", "Bericht", 9)));
                $formTest = new Form("basicskin.php", "POST", "Verstuur bericht", 2,
                array($colum1,$colum2));
                echo $formTest->outputFormHTML();
                ?>
				</div>
			</div>
		</div>
	<?php include($baseComponents.'footer/footer.php'); ?>
	<style>
		#content {
		    position: fixed;
		    width: 100%;
		    height: 100%;
		    z-index: 10001 !important
		}

		#content .myCarousel .carousel {
			top: 50%;
			position: absolute;
			transform: translate(0,-50%);
		}

		#overlay {
		    position: fixed;
		    top: 0;
		    left: 0;
		    width: 100%;
		    height: 100%;
		    background-color: rgba(0, 0, 0, 0.7);
		    filter:alpha(opacity=70);
		    -moz-opacity:0.7;
		    -khtml-opacity: 0.7;
		    opacity: 0.7;
		    z-index: 10000;
		}
	</style>
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