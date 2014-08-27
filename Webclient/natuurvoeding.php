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
                <h1 class="title">Natuurvoeding</h1>
            </div>
            <div class="col-md-10 col-md-offset-1">
                <div  style="float: right;margin-left: 20px;">
                    <h4 class="text-center"><i>Eten is een noodzaak,<br />
                            maar verstandig eten een kunst</i>
                    </h4>
                    <img src="img/hart.jpg">
                </div>
                <p><b>Goede voeding doet veel meer dan het lichaam voorzien van de brandstoffen die het nodig heeft voor de productie van energie en lichaamswarmte. 
                        Goede voeding bevat ook alle moleculen die direct of indirect worden gebruikt bij de vele regulatie-, verdedigings-, herstel en andere processen in het mechanisme.</b></p>
                <p>Als ons lichaam goed functioneert, dan voelen we ons in het algemeen prettig en energiek. 
                    We worden niet zo snel ziek, want het organisme kan zich met succes tegen uiteenlopende ziekteverwekkers verdedigen. 
                    Ook beschikken we de hele dag door over voldoende energie voor werk en ontspanning. 
                    Indien het lichaam toch wordt getroffen door een ziekte of verwonding, zal het zich in principe snel herstellen.</p>
                <p>In deze hectische tijd functioneert het lichaam van veel mensen echter niet optimaal.
                    Een belangrijke oorzaak voor een niet optimale gezondheidstoestand is een voortdurend tekortschietende voeding. 
                    Uit onderzoek is naar voren gekomen dat veel voedingsstoffen in deze tijd onvoldoende in de dagelijkse voeding aanwezig zijn. 
                    Dat is enerzijds een gevolg van de hedendaagse agrarische en industriële productiemethodes en anderzijds van de in deze tijd juist verhoogde behoefte aan uiteenlopende voedingsstoffen. 
                    De enige doelmatige en effectieve methode om zeker te zijn dat men alle voedingsstoffen in voldoende mate naar binnen krijgt, 
                    is een optimaal voedingspatroon en het gebruik van natuurlijke en biologisch geproduceerde voedingsmiddelen.</p>

                <h5>Een nieuwe natuurlijke voedingsaanpak brengt u weer in aanraking met de kracht uit de (eigen) natuur !</h5>
                <div id="form" style="display:none;padding:10px;margin-bottom: 170px;">
                <?php
                $colum1 = new Colum(array(
                    new TextField("Naam", "Naam invoeren", "name"),
                    new EmailField("Email", "Email invoeren", "email"),
                ));
                $colum2 = new Colum(array(new TextBoxField("Bericht", "Bericht", "message", 5)));
                $formTest = new Form("Verstuur bericht", 2, array($colum1, $colum2));
                echo $formTest->outputFormHTML();
                ?>
                    </div>
                <h3>Kennismaking</h3>
                Voor een eerste kennismaking kun je mij altijd bellen of <a href="#" onclick="$('#form').slideToggle()">mailen</a>. Wil je hierna graag verder dan mail ik je een vragenlijst en maken we een afspraak voor het intakegesprek.
                <hr>
                <div class="consult-element" col-md-offset-1 col-md-10>
                    <h3>Intakegesprek</h3>
                    <p>Tijdens de intake bespreken we aan de hand van de ingevulde vragenlijst je doelen, huidige voedingspatroon, 
                        bewegingspatroon en eventuele lichamelijke klachten. Afhankelijk van je doel, zal ik je meten en wegen. 
                        Aan het eind van het gesprek bespreken we de mogelijkheden voor een vervolgtraject op basis van je wensen. 
                        Via de mail ontvang je tevens een schriftelijk advies, afgestemd op je leefpatroon en doelen.</p>
                    <div class="consult-properties pull-right">
                        Duur: Ca 60 min | Prijs: € 60
                    </div>
                    <div class="clearfix"></div>
                </div>
                <hr />
                <div class="consult-element" col-md-offset-1 col-md-10>
                    <h3>Vervolgconsulten</h3>
                    <p>Tijdens het vervolggesprek kijken we of je de gegeven adviezen hebt kunnen toepassen in je dagelijkse leven en waar nog eventuele knelpunten zijn. 
                        Is je doel afslanken dan meet en weeg ik je nogmaals en bekijken we aan de hand van ontwikkelingen in spiermassa of je op een gezonde wijze aan het afslanken bent. 
                        Afhankelijk van je wensen, krijg je aanvullend advies en informatie.</p>    
                    <div class="consult-properties pull-right">
                        Duur: Ca 60 min | Prijs: € 60
                    </div>
                    <div class="clearfix"></div>
                </div>
                <hr />
                <div class="consult-element" col-md-offset-1 col-md-10>
                    <h3>Pakket : Intakegesprek + 5 vervolgafspraken</h3>
                    <p>Als je graag wat intensievere begeleiding wil en een stok achter de deur is dit pakket een goede optie. 
                        Na het intakegesprek zien we elkaar dan in een voor jou prettige frequentie, 
                        waarbij je iedere keer wordt gemeten en gewogen om de voortgang inzichtelijk te maken.</p>

                    <div class="consult-properties pull-right">
                        Duur: Intakegesprek - Ca 60 min, vervolgafspraken - Ca 30 min | Pakketprijs: € 150
                    </div>
                    <div class="clearfix"></div>
                </div>
                <hr>
            </div>

        </div>
        <?php include($baseComponents . 'footer/footer.php'); ?>
    </body>
</html>