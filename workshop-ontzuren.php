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
                <h1 class="title">Workshop: Gezonder door ontzuren</h1>
            </div>

            <div class="col-md-3">
                <script src="js/overlayToggle.js" type="text/javascript"></script>
                <script type="text/javascript">
                    var caroussel = new OverlayCaroussel(["Natuurvoeding foto liggend.png" , "demeter_oud.gif", "Ontspannende gezichtsmassage.jpg", "H3OPro.png"]);
                </script>
                <a href="#" class="thumbnail" onclick="caroussel.toggleOverlay()">
                    <img src="<?php echo $img . 'hart.jpg'; ?>" class="img-responsive">
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
                        <span>€ 15,-</span>
                    </li>
                    <li class="list-group-item">
                        Duur:
                        <span>Anderhalf uur</span>
                    </li>
                </ul>
            </div>
            <div class="col-md-9">
                <p id="maintext"><b>
                        Voeding, stress, medicijnen en overmatige spierbelasting produceren na verbranding zure afvalstoffen. 
                        Uw lichaam moet deze kwijt om de zuurgraad van het bloed op een constant niveau te houden. 
                        Door ons huidige voedingspatroon met veel dierlijke eiwitten, suikers, vetten, alcohol, 
                        koffie en frisdranken en door onze onregelmatige en vaak stressvolle levensstijl, 
                        produceert het lichaam veel zure afvalstoffen.</b></p>
                <div id="descriptioncontent">
                    <p>
                        Omdat het lichaam deze niet allemaal kan uitscheiden of neutraliseren, worden de zuren in de verschillende delen van het lichaam opgeslagen. 
                        Vooral na het veertigste levensjaar nemen de zure afzettingen in de gewrichten, het bindweefsel, de spieren en de bloedvaten in een snel tempo toe.
                        Afhankelijk van de plaatsen in het lichaam waar de zuren zich ophopen, kunnen allerlei verzuringsklachten ontstaan, zoals bv overgewicht, 
                        spierpijnen, gewrichtspijnen, moeheid, huidklachten, schimmelinfecties en ontstekingen. 
                        Afhankelijk van de erfelijkheid en de levensstijl kan verzuring op een gegeven moment leiden tot het ontstaan van chronische aandoeningen zoals:
                        jicht, artritis, osteoporose, hoge bloeddruk, fibromyalgie, diabetes, nierstenen, overgangsklachten etc.
                    </p>
                    <p>Tijdens de workshop kijken we verder naar het ontstaan van ontzuring, de gevolgen en wat je zelf kunt doen om te ontzuren.
                    <br><h5>Kosten: € 15, inclusief proefverpakking basisch zout (ontzuringsprodukt) en syllabus.</h5></p>
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
                    $formTest = new Form("Verstuur bericht", 2, array($colum1, $colum2), "Workshop: Ontzuren");
                    echo $formTest->outputFormHTML();
                    ?>
                </div>
            </div>
        </div>
        <?php include($baseComponents . 'footer/footer.php'); ?>
        <script type="text/javascript" src="js/workshopcontact.js"></script>
    </body>
</html>