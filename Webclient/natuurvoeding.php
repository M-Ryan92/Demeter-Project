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


	</head>
	<body id='footermargin'>
		<?php include($baseComponents."header/header.php"); ?>
		<div class="container contentview">
			<div class="col-md-12 titlePlaceholder">
				<h1 class="text-center title">Natuurvoeding</h1>
			</div>

			
		</div>
	<?php include($baseComponents.'footer/footer.php'); ?>
</body>
</html>