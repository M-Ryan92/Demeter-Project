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
                <h1 class="title">Gezichtsmassage met handreflex en hotstones</h1>
            </div>
            <div class="col-md-3 right">
                <script src="js/overlayToggle.js" type="text/javascript"></script>
                <script type="text/javascript">
                    var caroussel = new OverlayCaroussel(["Natuurvoeding foto liggend.png" , "demeter_oud.gif", "Ontspannende gezichtsmassage.jpg", "H3OPro.png"]);
                </script>
                <a href="#" class="thumbnail" onclick="caroussel.toggleOverlay()">
                    <img src="<?php echo $img . 'Ontspannende gezichtsmassage.jpg'; ?>" class="img-responsive">
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
                        <span>€ 35,-</span>
                    </li>
                    <li class="list-group-item">
                        Duur:
                        <span>Ca 50min</span>
                    </li>
                </ul>
            </div>
            <div class="col-md-9">
                <p id="maintext"><b>
                        Ontspannende gezichtsmassage met etherische oliën.
                        <br><br>
                        Druk, druk, druk …… een haastig leven, een drukke baan, volop spanning en stress,
                        de aandacht voor onszelf vervaagt: het leven van de moderne tijd. Herken je dit?
                        <br>Steeds meer mensen realiseren zich dat we een gezonder en een meer ontspannen leven moeten gaan leiden.
                        Gun je zelf eens een moment van rust met een ontspannende gezichtsmassage.
                    </b></p>
                <div id="descriptioncontent">
                    <p>
                        Het gezicht weerspiegelt voortdurend onze gezondheid, emoties en wat we denken. Stress en spanning worden weerspiegeld door gefronste wenkbrauwen en rimpels rond de ogen, mond en kaaklijn.
                        Een gezichtsmassage kan hoofdpijn, angst, uitputting en spanning wegnemen en ze vervangen door een gevoel van welbehagen. Het kalmeert de zenuwen, verbetert de bloedsomloop en geeft de huid een gezonde glans.
                        Door de gezichtsmassage te combineren met handmassage, holistic pulsing en warme stenen ervaar je tijdens en na de behandeling een diepe ontspanning van lichaam en geest.
                    </p>
                    <p>Wilt u meer weten of een afspraak maken? <a onclick="contactToggle('#contact', '#description')">Klik dan hier of op de knop contact.</a></p>
                </div>
                <div id="contactcontent">
                    <?php
                    $colum1 = new Colum(array(
                        new TextField("Naam", "Naam invoeren", "name"),
                        new EmailField("Email", "Email invoeren", "email"),
                        new SelectField("Onderwerp", "", "subject", array(new SelectOption("", "Kies een onderwerp", true),
                            new SelectOption("vraag", "Vraag"),
                            new SelectOption("Afspraak", "Afspraak")))
                    ));
                    $colum2 = new Colum(array(new TextBoxField("Bericht", "Bericht", "message", 9)));
                    $formTest = new Form("Verstuur bericht", 2, array($colum1, $colum2), "Gezichtsmassage");
                    echo $formTest->outputFormHTML();
                    ?>
                </div>
            </div>
        </div>
    </div>

    <?php include($baseComponents . 'footer/footer.php'); ?>
    <script type="text/javascript" src="js/workshopcontact.js"></script>
</body>
</html>