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
                <h1 class="title">Workshop: Holistic Pulsing</h1>
            </div>

            <div class="col-md-3">
                <script src="js/overlayToggle.js" type="text/javascript"></script>
                <script type="text/javascript">
                    var caroussel = new OverlayCaroussel(["Natuurvoeding foto liggend.png" , "demeter_oud.gif", "Ontspannende gezichtsmassage.jpg", "H3OPro.png"]);
                </script>
                <a href="#" class="thumbnail" onclick="caroussel.toggleOverlay()">
                    <img src="<?php echo $img . 'holistic_pulsing.png'; ?>" class="img-responsive">
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
                        <span>€ 45,-</span>
                    </li>
                    <li class="list-group-item">
                        Duur:
                        <span>dagdeel</span>
                    </li>
                </ul>
            </div>
            <div class="col-md-9">
                <p id="maintext"><b>
                        Holistic Pulsing is een massagemethode, die je uitnodigt tot diepe ontspanning en loslaten. 
                        De gedachte achter de methode is eenvoudig : je lichaam dat voor een groot deel uit water bestaat, 
                        is een grote ritmische beweging. Bloed, adem, energie, het stroomt allemaal door je lichaam heen. Wanneer , 
                        om wat voor reden dan ook , de energie in je lichaam niet meer vrijuit kan stromen, 
                        valt dit te zien en te ervaren zodra je lichaam zachtjes wordt gewiegd. Het rustige, 
                        ritmische schudden dat de pulser op je overdraagt brengt de energie en het water in je lichaam in beweging en voert je naar je gevoelservaringen. 
                        De kracht van het pulsen ligt in de zachtheid en vriendelijkheid. Zachtjes, ritmisch schudden heeft bijna altijd een ontspannend effect. 
                        Juist vanuit die ontspanning kan in je lichaam een nieuw evenwicht ontstaan.</b></p>
                <div id="descriptioncontent">
                    <p>
                        Als je zelf wilt leren pulsen kun je in een workshop van een halve dag
kennismaken met een aantal basistechnieken van Holistic Pulsing. Je leert te
pulsen vanuit een open fysieke en mentale houding. Daarnaast wordt aandacht
besteed aan het (leren) waarnemen en accepteren van wat er in je leeft, 
zonder dat er iets hoeft te veranderen. 
We beginnen de workshop met wat lichaamswerk om meer in contact te komen met
het eigen lichaam. 
Daarna worden de pulstechnieken op elkaar geoefend. Het is mogelijk om in
een tweede dagdeel nog wat meer technieken te leren, zodat je voldoende
kennis hebt om een behandeling aan bekenden te geven. 
<br><br>De workshop is bedoeld voor 2 personen.</p>
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