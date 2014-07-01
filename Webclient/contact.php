<?php include('globalsettings.php'); ?>
<!DOCTYPE html>
<style>

</style>
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
			<div class="contactView">
				<div class="col-md-12 titlePlaceholder">
					<h1 class="text-center title">Contact</h1>
				</div>

				<div id="contactcontent" class="col-md-offset-2 col-md-8 formPlaceholder">
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

		<?php include($baseComponents.'footer/footer.php'); ?>

		<script type="text/javascript" src="<?php echo $jQuery; ?>"></script>
		<script type="text/javascript" src="<?php echo $bootstrapJS; ?>"></script>
	</body>
</html>