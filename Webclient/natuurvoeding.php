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
        <?php include($baseComponents . "header/header.php"); ?>
        <div class="container contentview">
            <div class="col-md-12 titlePlaceholder">
                <h1 class="text-center title">Natuurvoeding</h1>
            </div>
            <div class="col-md-10 col-md-offset-1">
                <img src="img/hart.jpg" style="float: right;">
                <p><b>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ac imperdiet turpis, eget varius augue. Sed rutrum nibh nibh, ut posuere nulla vestibulum at. Curabitur ac nisl suscipit, ultricies nulla sed, consequat lorem. Aliquam ut dolor eget erat porta lacinia facilisis quis est. Praesent metus lectus, lobortis vitae posuere non, pulvinar a tellus. Maecenas eleifend eu eros ut porttitor. Nulla facilisi. Aliquam vulputate tempus massa, eu eleifend lacus luctus nec. Vivamus quis lobortis lectus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ultricies pulvinar mauris in viverra. Nulla dignissim, odio a molestie imperdiet, eros diam dignissim tellus, non rhoncus nibh massa et justo.</b></p>
                <p>Duis scelerisque viverra lorem vitae euismod. Vestibulum cursus diam ac mi varius auctor. Duis mattis nunc sapien, id iaculis neque lobortis nec. Cras semper nisl ac diam pulvinar, quis pharetra orci varius. Cras sit amet ultrices enim, et hendrerit nisl. Vestibulum neque nisi, posuere quis mattis sed, hendrerit id leo. Sed dui purus, ullamcorper id urna ut, porta malesuada diam. Sed elementum molestie libero vitae condimentum. Nulla in neque ante. Mauris id metus mi.</p>
                <h3>Kennismaking</h3>
                Voor een eerste kennismaking kun je mij altijd bellen of mailen. Wil je hierna graag verder dan mail ik je een vragenlijst en maken we een afspraak voor het intakegesprek.
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