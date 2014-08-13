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
                <h1 class="text-center title">Even voorstellen</h1>
            </div>
            <div class=" col-md-offset-2 col-md-8">
                <div class="row">
                    <div class="col-md-8">
                        <p><b>
                                Mijn naam is Karin Papadopoulos-Broers, geboren in 1965, getrouwd, trotse moeder van drie zonen, 
                                met een passie voor gezonde voeding, koken en sport.
                            </b></p>
                        <p>
                            Op een bepaald moment in mijn leven, was ik de balans behoorlijk kwijt. 
                            Door te focussen op gezonde voeding, het verwerken van emoties en beweging als ontspanning, 
                            heb ik het evenwicht weer weten te vinden en ben er zelfs sterker uitgekomen. 
                            Dit was voor mij de aanleiding diverse opleidingen en cursussen te gaan volgen op het gebied van voeding & welzijn. 
                        </p>
                        <p>
                            Met de opgedane ervaringen en een grote mate van betrokkenheid, 
                            wil ik graag anderen  ondersteunen in het vinden van de juiste balans tussen lichaam en geest!
                        </p>
                    </div>
                    <div class="col-md-offset-1 col-md-3 thumbnail">
                        <img src="<?php echo $img . 'Karin.jpg'; ?>">
                    </div>
                </div>
                <div class="row col-md-12">
                    <h4>Opleidingen/Cursussen</h4>
                    <ul class="list-group">
                        <li class="list-group-item">HBO Natuurvoedingsadviseur</li>
                        <li class="list-group-item">
                            <span class="badge">in progressie</span>
                            HBO Medische basiskennis</li>
                        <li class="list-group-item">Ontzuren en Ontslakken</li>
                        <li class="list-group-item">Holistic Pulsing</li>
                        <li class="list-group-item">Gezichtsmassage</li>
                        <li class="list-group-item">Handreflex therapie</li>
                        <li class="list-group-item">Oorreflex therapie</li>
                        <li class="list-group-item">Hotstone Massage</li>
                        <li class="list-group-item">Aromatherapie</li>
                        <li class="list-group-item">XCO Walking & Running</li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
    <?php include($baseComponents . 'footer/footer.php'); ?>

</body>
</html>
