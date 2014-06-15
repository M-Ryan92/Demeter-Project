<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="lib/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="lib/css/basicstyle.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="js/jquery-2.1.0.min.js" ></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
    </head>
    <body>
        <div class="container">
            <nav class="navbar navbar-default" role="navigation">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">Brand</a>
                    </div>
                </div>
            </nav>
        </div>

        <div class="container">
            <!-- img slider -->
            <div class="row">
                <div style="margin: 0 auto; height: 250px; width: 700px;">
                    <div style="width: 50px; height: 250px; float:left; background: yellow;" id="arrow-left"></div>

                    <div style="background: black; height: 250px; width: 600px; float: left;">

                    </div>

                    <div style="width: 50px; height: 250px; float:left;background: red;" id="arrow-right"></div>
                </div>
            </div>

            <!-- subscribe button -->
            <div class="row">
                <button class="btn btn-default" style="display: block;margin: 10px auto 10px auto;">
                    Inschrijven voor de nieuwsbrief
                </button>
            </div>

            <!-- Voorstellen pagina -->
            <div class="row">
                <div class="col-md-offset-1 col-md-10" style="height: 400px">
                    <div class="col-md-6 text-center">
                        <img src="/img/demeter.png" alt="" style="width:140px; height: 140px;">
                        <h2>Demeter, voeding en welzijn</h2>
                        <p>Om naar een zo goed mogelijke gezondheid te streven is het van belang dat lichaam
                            en geest in balans zijn. Voeding, stressbeperking en beweging zijn drie belangrijke factoren voor een optimaal evenwicht...</p>
                        <p><a class="btn btn-success" href="#" role="button">Lees meer &raquo;</a></p>
                    </div>
                    <div class="col-md-6 text-center">
                        <img src="/img/karin.jpg" alt="" class="img-circle" style="width:140px; height: 140px;">
                        <h2>Even voorstellen</h2>
                        <p>Mijn naam is Karin Papadopoulos-Broers, geboren in 1965, getrouwd, trotse moeder van drie zonen,
                            met een passie voor gezonde voeding, koken en sport. Op een bepaald moment in mijn leven, was ik de balans behoorlijk kwijt...</p>
                        <p><a class="btn btn-success" href="#" role="button">Lees meer &raquo;</a></p>
                    </div>
                    
                </div>
            </div>


        </div>
    </div>


    <div id="footer">
        <div class="container">
            <div id="row">
                <div class="col-md-3 col-md-offset-3 borderrightfooter">
                    <ul class="col-md-12 list-unstyled">
                        <li><a href="#">Algemene voorwaarden</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Tarieven</a></li>
                        <li><a href="#">Agenda</a></li>
                    </ul>	
                </div>
                <div class="col-md-4 footerleft">
                    <div style="height: 70px;width: 70px;float:right;margin-top: 5px;">
                        <img src="/img/demeter.png" alt="" style="height: 70px;width: 70px;">
                    </div>
                    <h4 class="footertitle">Demeter - voeding en welzijn</h4>
                    <ul class="list-unstyled">
                        <li>Langelende laan 4</li>
                        <li>info@demetervw.nl</li>
                        <li>tel. 0612345678</li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</body>
</html>