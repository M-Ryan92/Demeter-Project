<?php include('globalsettings.php'); ?>
<?php include($forms); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="<?php echo $bootstrapCSS; ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo $baseCSS; ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo "scss/workshop.css"; ?>" rel="stylesheet" type="text/css">
    </head>
    <body id='footermargin'>
        <?php include($baseComponents . "header/header.php"); ?>
        <div class="container contentview">
            <div class="col-md-12 titlePlaceholder">
                <h1 class="title">Workshop: Puur Gezond</h1>
            </div>

            <div class="col-md-3">
                <script src="js/overlayToggle.js" type="text/javascript"></script>
                <script type="text/javascript">
                    var caroussel = new OverlayCaroussel(["Natuurvoeding foto liggend.png" , "demeter_oud.gif", "Ontspannende gezichtsmassage.jpg", "H3OPro.png"]);
                </script>
                <a href="#" class="thumbnail" onclick="caroussel.toggleOverlay()">
                    <img src="<?php echo $img . 'PuurGezond.jpg'; ?>" class="img-responsive">
                    <div>Klik hier voor plaatjes.</div>
                </a>
                <button class="btn btn-block btn-success active" onclick="contactToggle('#description', '#contact')" id="description">
                    Beschrijving
                </button>
                <button class="btn btn-block btn-success" onclick="contactToggle('#contact', '#description')" id="contact">
                    Contact
                </button>
                <ul class="list-group">
                    <li class="list-group-item">
                        Prijs:
                        <span>€ 10,-</span><br />
                        inclusief Puur gezond piramide (met 2 dagmenu’s)
                    </li>
                    <li class="list-group-item">
                        Duur:
                        <span>dagdeel</span>
                    </li>
                </ul>
            </div>
            <div class="col-md-9">
                <p id="maintext"><b>
                        PuurGezond eten staat voor écht eten.
                        Eten zonder pakjes en zakjes, eten dat je gemakkelijk zelf bereidt en dat ook nog eens heel lekker smaakt.
                        Genieten van de smaak van pure, onbewerkte producten. Lekker en gezond eten hoeft niet ingewikkeld te zijn! </b></p>
                <div id="descriptioncontent">
                    <p>
                        Wil je gezonder gaan eten, maar weet je niet zo goed hoe je dit moet aanpakken, dan is deze workshop echt iets voor jou!
                        Aan de hand van de Puur Gezond voedingspiramide gaan we kijken hoe je een gezond en smakelijk voedingspatroon opbouwt. </p>
                    <p>Wilt u meer weten of een afspraak maken? <a onclick="contactToggle('#contact', '#description')">Klik dan hier of op de knop contact.</a></p>
                </div>
                <div id="contactcontent">
                    <?php
                    $colum1 = new Colum(array(
                        new TextField("Naam", "Naam invoeren", "name"),
                        new EmailField("Email", "Email invoeren", "email"),
                        new SelectField("Onderwerp", "", "subject", array(new SelectOption("", "Kies een onderwerp", true),
                            new SelectOption("Inschrijven", "Inschrijven"),
                            new SelectOption("Vraag", "Vraag")))
                    ));
                    $colum2 = new Colum(array(new TextBoxField("Bericht", "Bericht", "message", 9)));
                    $formTest = new Form("Verstuur bericht", 2, array($colum1, $colum2), "Workshop: Holistic pulsing");
                    echo $formTest->outputFormHTML();
                    ?>
                </div>
            </div>
        </div>
        <?php include($baseComponents . 'footer/footer.php'); ?>
        <script type="text/javascript" src="js/workshopcontact.js"></script>
    </body>
</html>