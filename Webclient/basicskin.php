<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="../resources/Bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="webClient.css" rel="stylesheet" type="text/css">
    </head>
    <body id='footermargin'>
		<?php include('baseComponents/header/header.php'); ?>

        <div class="container" style="margin-top: 40px;">
            <!-- img slider -->

            <div class="row">
                <?php include('baseComponents/carousel/carousel.php'); ?>
            </div>

            <!-- subscribe button -->
            <div class="row">
                <div class="subscribe-wrapper">
                    <button class="btn btn-default showsubscribe" onclick="setVisible(this)">
                        Inschrijven voor de Nieuwsbrief!
                    </button>
                    <input type="email" id="newsinput" class="form-control" placeholder="voorbeeld@gmail.nl" />
                    <button class="btn btn-success" id="newsbutton">Inschrijven</button>
                </div>
            </div>

            <!-- Voorstellen pagina -->
            <div class="row">
                <div class="col-md-offset-1 col-md-10 columnsize">
                    <div class="col-md-6 text-center">
                        <img src="img/demeter.png" alt="logo" class="columnimg">
                        <h2>Demeter, voeding en welzijn</h2>
                        <p>Om naar een zo goed mogelijke gezondheid te streven is het van belang dat lichaam
                            en geest in balans zijn. Voeding, stressbeperking en beweging zijn drie belangrijke factoren voor een optimaal evenwicht...</p>
                        <p><a class="btn btn-success" href="#" role="button">Lees meer &raquo;</a></p>
                    </div>
                    <div class="col-md-6 text-center">
                        <img src="img/karin.jpg" alt="Karin" class="img-circle columnimg">
                        <h2>Even voorstellen</h2>
                        <p>Mijn naam is Karin Papadopoulos-Broers, geboren in 1965, getrouwd, trotse moeder van drie zonen,
                            met een passie voor gezonde voeding, koken en sport. Op een bepaald moment in mijn leven, was ik de balans behoorlijk kwijt...</p>
                        <p><a class="btn btn-success" href="#" role="button">Lees meer &raquo;</a></p>
                    </div>

                </div>
            </div>
        </div>

		<?php include('baseComponents/footer/footer.php'); ?>

        <script type="text/javascript" src="../resources/JQuery/jquery.min.js"></script>
        <script type="text/javascript" src="../resources/Bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/newssubscription.js"></script>
        <script type="text/javascript" src="js/footermargin.js"></script>
    </body>
</html>