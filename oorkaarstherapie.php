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
                <h1 class="title">Oorkaars therapie</h1>
            </div>

            <div class="col-md-3">
                <a href="#" class="thumbnail" onclick="overlayToggle(4, '<?php echo $baseComponents . 'carousel/overlay.php'; ?>')">
                    <img src="<?php echo $img . 'oorkaarstherapie.jpg'; ?>" class="img-responsive">
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
                        <span>€ 30,-</span>
                    </li>
                    <li class="list-group-item">
                        Duur:
                        <span>Ca 40 min</span>
                    </li>
                </ul>
            </div>

            <div class="col-md-9">
                <p id="maintext"><b>
                        De oorkaars therapie is een warmtetherapie die het lichaam ontspant en de doorbloeding stimuleert en op zijn beurt weer belangrijk is voor de genezingsprocessen.
                        Oorkaarsen werken lichaamszuiverend. Alle met het oor verbonden organen, zoals buitenkant trommelvlies, middenoor en evenwichtsorgaan, worden door de warmtewerking beïnvloed. Een lichte onderdruk (schouweffect) in de oorkaars en een trilling van de stijgende lucht te wijten aan de natuurlijke beweging van de vlam, geven een lichte massage van het trommelvlies. Dit brengt een intensief gevoel van aangename warmte teweeg en een "bevrijdend" aanvoelende drukregeling in oor-, voorhoofd- en bijholten gebied. Deze lichamelijke prikkel wordt bijna onmiddellijk na het aanwenden beschreven als een weldadig gevoel, pijn- en drukverminderend, vooral in hoofd en oorgebied. Spontaan kan dit ook een vrijere neusademhaling en een beter geurvermogen tot gevolg hebben, ook bij een tot dan toe verstopte neus.
                    </b></p>
                <div id="descriptioncontent">
                    <p>
                        Bovendien geeft deze ceremonie een heerlijk gevoel van ontspanning en geborgenheid.
                        Door de directe werking van de kruiden op het zenuwstelsel van het limbische systeem is het mogelijk om meerdere klachten te behandelen, omdat het limbische systeem veel psychische en fysieke klachten beïnvloedt.
                        Een aantal veel voorkomende klachten die je met ondersteuning van oorkaarsen kunt behandelen zijn:
                    </p>
                    <ul>
                        <li>irritaties aan het oor, neus, voorhoofd en bijholten</li>
                        <li>hooikoorts</li>
                        <li>oordruk (dichtslaan van het oor)</li>
                        <li>oorsuizen</li>
                        <li>drukregulatie bij hoofdpijn</li>
                        <li>migraine</li>
                        <li>bijholteontstekingen</li>
                        <li>verkoudheid en griep</li>
                        <li>keelpijn, ontstoken amandelen</li>
                        <li>doorbloedingsstoornissen van het oor</li>
                        <li>hyperactiviteit</li>
                        <li>stress</li>
                        <li>nervositeit, angsten, depressies</li>
                        <li>slapeloosheid</li>
                        <li>vermoeidheid (ook psychisch)</li>
                    </ul>

                    <p>
                        Bij het regelmatig gebruiken van oorkaarsen kunnen oude processen weer actief gemaakt worden en zo voorgoed uit het lichaam worden verbannen.
                        In een aantal gevallen mag de oorkaars therapie niet worden toegepast:
                    </p>
                    <ul>
                        <li>geperforeerd trommelvlies</li>
                        <li>geïmplanteerde gehoorbeentjes</li>
                        <li>ontsteking van het buitenoor en middenoor</li>
                        <li>eczeem en schimmelinfecties in het oor</li>
                        <li>epilepsie</li>
                    </ul>
                    <p>Raadpleeg bij twijfel altijd eerst een reguliere arts !</p>

                    <p>
                        De oorkaarsen (Biosun)
                        De oorkaarsen waren honderden jaren geleden een veel voorkomend ritueel- en ceremonievoorwerp bij de natuurvolkeren uit Midden- en Noord Amerika, Indonesië, Azië. Als heilig en spiritueel onderdeel was het gebruik slechts aan een paar ingewijden, sjamanen en medicijnmannen voorbehouden. De oorkaars is een holle buis van 20 centimeter bestaand uit 100% linnen weefsel van de beste kwaliteit, dat wil zeggen niet met bestrijdingsmiddelen bespoten op het veld en niet chemisch behandelt bij de verwerking. Dit linnen weefsel is verwerkt met een mengsel van speciale indiaanse geneeskrachtige kruiden (salie, kamille en Sint-Janskruid) en zuivere bijenwas en honingextracten. Dit speciale mengsel is een origineel recept van de Hopi-indianen en wordt met de hand gerold in het linnen weefsel. De oorkaars is voorzien van een speciale filter, die voorkomt dat de bijenwas in het oor loopt.

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
                    $formTest = new Form("Verstuur bericht", 2, array($colum1, $colum2));
                    echo $formTest->outputFormHTML();
                    ?>
                </div>
            </div>
        </div>
    </div>

    <?php include($baseComponents . 'footer/footer.php'); ?>
    <script type="text/javascript" src="js/workshopcontact.js"></script>
    <script type="text/javascript" src="overlayToggle.js"></script>
</body>
</html>