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
				<h1 class="text-center title">Gezonder door ontzuren</h1>
			</div>

			<div class="col-md-3">
				<a href="#" class="thumbnail">
					<img src="<?php echo $img.'FitNJoy foto0.jpg'; ?>" class="img-responsive">
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
				<p id="maintext">
					<b>

					</b>
				</p>
				<div id="descriptioncontent">
					<p style="margin: 0px">

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