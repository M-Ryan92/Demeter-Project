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
        <?php include($baseComponents . "header/header.php"); ?>

        <div class="container contentview">
            <div class="col-md-12 titlePlaceholder">
                <h1 class="text-center title">404 pagina Gevonden!</h1>
            </div>
            <div class=" col-md-offset-2 col-md-8">
                <div class="row">
                    <div class="col-md-12">
                        <p>
                            <b>
                               De web-pagina is niet bij ons bekend, vandaar dat u deze pagina krijgt te zien.
                            </b>
                        </p>
                        <p>
                            <br>
                            U kunt gewoon klikken op 1 van de links aan de bovenkant om weer op het normale deel terecht te komen.
                            <br>
                            Excuses voor het ongemak.
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <?php include($baseComponents . 'footer/footer.php'); ?>

    <script type="text/javascript" src="<?php echo $jQuery; ?>"></script>
    <script type="text/javascript" src="<?php echo $bootstrapJS; ?>"></script>
</body>
</html>