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
    </head>
    <body id='footermargin'>
        <?php include($baseComponents . "header/header.php"); ?>

        <div class="container contentview">
            <div class="col-md-12 titlePlaceholder">
                <h1 class="title">Sportvoeding</h1>
            </div>
            <div class="col-md-10 col-md-offset-1">
                <p><b>Verschillende aspecten spelen een rol bij het neerzetten van goede prestaties. 
                        <br />Naast inzet, training en talent speelt voeding een cruciale rol. 
                        Als u uw lichaam niet voorziet van de juiste brandstof, 
                        dan kan dit lichaam niet optimaal presteren en zullen de gewenste resultaten uitblijven.                           
                        <br /><br />Een auto rijdt ten slotte ook niet zonder benzine!</b></p>
                <p> (Top)sport vereist  specifieke voeding en niet altijd zijn de juiste voedingsstoffen uit de normale voeding te halen. 
                    Daarom kan ik samen met u kijken wat uw wensen zijn, welke prestaties u wilt bereiken en welke voedingsstoffen u wel 
                    en welke juist niet binnen moet krijgen. Op deze manier kunnen wij een programma samenstellen dat speciaal voor u op maat 
                    is gemaakt, zodat u met de perfecte voeding en de juiste training het maximale uit uw lichaam kunt halen.</p>
                <h3>Ondersteunde producten:</h3>
            </div>
            <div class="col-md-10 col-md-offset-1">
                <div class="col-md-4">
                    <a href="http://www.coach4everybody.nl/producten/h3o-pro" class="productlink">
                        <div class="productcontainer">
                            <img class="img-responsive productimg" src="img/H3OPro.png">
                            <div class="producttext">
                                <h4 class="producttitle">H3O Pro</h4>
                                <p class="productdescription">Behoud van Hydratatie</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="http://www.coach4everybody.nl/producten/herbalife24-formula-1-sport" class="productlink">
                        <div class="productcontainer">
                            <img class="img-responsive productimg" src="img/Herbalife24-Formula-1-Sport.jpg">
                            <div class="producttext">
                                <h4 class="producttitle">24 Formula 1 sport </h4>
                                <p class="productdescription">Een evenwichtige maaltijd voor sporters </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="http://www.coach4everybody.nl/producten/herbalife24-prolong" class="productlink">
                        <div class="productcontainer">
                            <img class="img-responsive productimg" src="img/Herbalife24-Prolong.png">
                            <div class="producttext">
                                <h4 class="producttitle">24 Prolong</h4>
                                <p class="productdescription">Drankmix met koolhydraat en eiwit </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="http://www.coach4everybody.nl/producten/herbalife24-rebuild-strength" class="productlink">
                        <div class="productcontainer">
                            <img class="img-responsive productimg" src="img/Herbalife24-Rebuild Strength.png">
                            <div class="producttext">
                                <h4 class="producttitle">24 Rebuild strength</h4>
                                <p class="productdescription">Proteïnerijke hersteldrank</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="http://www.coach4everybody.nl/producten/herbalife24-rebuild-endurance" class="productlink">
                        <div class="productcontainer">
                            <img class="img-responsive productimg" src="img/Herbalife24-Rebuild Endurance.png">
                            <div class="producttext">
                                <h4 class="producttitle">24 Rebuild endurance</h4>
                                <p class="productdescription">Hersteldrank met koolhydraten en proteïnen</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="http://www.coach4everybody.nl/producten/herbalife24-hydrate" class="productlink">
                        <div class="productcontainer">
                            <img class="img-responsive productimg" src="img/Herbalife24-Hydrate.png">
                            <div class="producttext">
                                <h4 class="producttitle">24 Hydrate</h4>
                                <p class="productdescription">Hersteldrank met koolhydraten en proteïnen</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="http://www.coach4everybody.nl/producten/liftoff-sinaasappel" class="productlink">
                        <div class="productcontainer">
                            <img class="img-responsive productimg" src="img/Liftoff-Sinaasappel.png">
                            <div class="producttext">
                                <h4 class="producttitle">Liftoff</h4>
                                <p class="productdescription">Bruisende sportdrank met sinaasappel- of limoensmaak</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="http://www.coach4everybody.nl/producten/nrgtabletten" class="productlink">
                        <div class="productcontainer">
                            <img class="img-responsive productimg" src="img/NRG-tabletten.jpg">
                            <div class="producttext">
                                <h4 class="producttitle">NRG</h4>
                                <p class="productdescription">Op guarana gebaseerd.</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <?php include($baseComponents . 'footer/footer.php'); ?>
</body>
</html>