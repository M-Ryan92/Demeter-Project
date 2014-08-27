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
                <h1 class="title">Gezonder door ontzuren</h1>
            </div>
            <div class="col-md-9">
                <p id="maintext">
                    <b>
                        Onze huidige voedings- en eetgewoonten zijn funest voor het zuur-base-evenwicht van ons lichaam.
                        Zij veroorzaken een te sterke verzuring van het organisme, waarmee de basis voor heel veel ziekten wordt gelegd.
                        Voeg daarbij ook een teveel aan stress en een tekort aan bewegen en ontspanning toe, en je hebt het recept voor veel “vrouwenkwaaltjes”.
                    </b>
                </p>
                <div id="descriptioncontent">
                    <h4>Doe de ontzuringstest!</h4>
                    <p>
                        Het verbruik van vaste stoffen (mineralen) in ons lichaam is nodig om zuren en gifstoffen te neutraliseren,
                        maar dit resulteert tezelfdertijd in een verlies van mineralen (bijv. kalk) als in een vergiftiging,
                        veretsing (verbranden door zuren) en verslakking van ons lichaam.
                        Het gelijktijdig gebeuren is wat men noemt civilisatose (of welvaartziekten).
                    </p>
                    <p>Heeft u last van 2 of meer van onderstaande verzuringen of vergiftingen,
                        dan raden wij u aan om te ontzuren.
                        Een gratis urinetest is mogelijk, zodat er een indicatie is van verzuring. <br>
                        Doe de test:
                    </p>
                    <div class="col-md-6">
                        <ul>
                            <li>Haaruitval</li>
                            <li>Zweetvoeten</li>
                            <li>Cellulitis</li>
                            <li>Koude voeten</li>
                            <li>Paradentose</li>
                            <li>Hoofdpijn</li>
                            <li>Acne</li>
                            <li>Aangetaste amandelen</li>
                            <li>Migraine</li>
                            <li>Wit aangeslagen tong</li>
                            <li>Cariës</li>
                            <li>Verstopping</li>
                            <li>Diarree</li>
                            <li>Geen eetlust</li>
                            <li>Vraatzucht</li>
                            <li>Hyperactief</li>
                            <li>Maagzuur</li>
                            <li>Lusteloosheid</li>
                            <li>Allergie</li>
                            <li>Aambeien</li>
                            <li>Arteriosclerose</li>
                            <li>Hoge cholesterol</li>
                            <li>Hoge bloeddruk</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul>
                            <li>Verstoring v/d bloedsomloop</li>
                            <li>Spataderartritis</li>
                            <li>Artrose</li>
                            <li>Aandoening v/d tussenwervelschijven</li>
                            <li>Reuma</li>
                            <li>Jicht</li>
                            <li>Kramp</li>
                            <li>Spierspanning</li>
                            <li>Osteoporose</li>
                            <li>Hartinfarct</li>
                            <li>Klierziektes</li>
                            <li>Maag- en darmziektes</li>
                            <li>Alvleesklierstoornissen</li>
                            <li>Open been</li>
                            <li>Leverbeschadiging</li>
                            <li>Nier- en galstenen</li>
                            <li>Parkinson</li>
                            <li>Alzheimer</li>
                            <li>Beroerte</li>
                            <li>Grijze staar</li>
                            <li>Groene staar</li>
                            <li>Oorsuizingen</li>
                            <li>Gehoorproblemen</li>
                        </ul>
                    </div>
                    <p>Wilt u meer weten of een afspraak maken? <a onclick="contactToggle('#contact', '#description')">Klik dan hier of op de knop contact.</a></p>
                </div>
                <div id="contactcontent" style="margin-top: 0px;display: none;">
                      <?php
                $colum1 = new Colum(array(
                    new TextField("Naam", "Naam invoeren", "name"),
                    new EmailField("Email","Email invoeren", "email"),
                    new SelectField("Onderwerp", "", "subject", array(new SelectOption("","Kies een onderwerp", true),
                        new SelectOption("vraag","Vraag"),
                        new SelectOption("Afspraak","Afspraak")))
                ));
                $colum2 = new Colum(array(new TextBoxField("Bericht", "Bericht", "message", 9)));
                $formTest = new Form("Verstuur bericht", 2, array($colum1,$colum2));
                echo $formTest->outputFormHTML();
                ?>
                </div>
                <img src="img/verzuren.png" />
            </div>
            <div class="col-md-3">
                <a href="#" class="thumbnail" onclick="overlayToggle(5,'<?php echo $baseComponents.'carousel/overlay.php'; ?>')">
                    <img src="<?php echo $img . 'FitNJoy foto0.jpg'; ?>" class="img-responsive">
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
                        <span>€ 60,-</span>
                    </li>
                    <li class="list-group-item">
                        Duur:
                        <span>Anderhalf uur</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <?php include($baseComponents . 'footer/footer.php'); ?>
    <script type="text/javascript" src="js/workshopcontact.js"></script>
    <script type="text/javascript" src="overlayToggle.js"></script>
</body>
</html>