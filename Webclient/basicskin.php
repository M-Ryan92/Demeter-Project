<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="../resources/Bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="lib/css/basicstyle.css" rel="stylesheet" type="text/css">
        <link href="lib/css/homepage.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="main container">
            <div class="navbar navbar-default" role="navigation">
                <div class="row textcenter">
                    <div class="navbar-right navbar-collapse collapse">
                        <div class="input-group">
                            <input type="text" placeholder="Search" class="form-control">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
                            </span>
                        </div>
                    </div>
                    <img class="navbar-brand" src="img/demeter.png" alt="">
                    <span class="title">Demeter voeding en welzijn</span>
                    <button type="button" class="navbar-toggle navbar-right"  data-toggle="collapse" data-target=".dropdownmenu">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li class=""><a href="#">Home</a></li>
                            <li><a href="#about">About</a></li>
                            <li><a href="#contact">Contact</a></li>
                            <li><a href="#cat1">Cat1</a></li>
                            <li><a href="#cat2">Cat2</a></li>
                            <li><a href="#cat3">Cat3</a></li>
                            <li><a href="#cat4">Cat4</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="nav-lable-style">
                    <div>
                        Home and make this lable extend a bit
                    </div>
                </div>
                <div class="dropdownmenu collapse submenu">
                    <ul class="nav navbar-nav">
                        <li class="empty"></li>
                        <li class=""><a href="#">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <li><a href="#cat1">Cat1</a></li>
                        <li><a href="#cat2">Cat2</a></li>
                        <li><a href="#cat3">Cat3</a></li>
                        <li><a href="#cat4">Cat4</a></li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="container" style="margin-top: 75px;">
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
    </div>

<?php include('lib/basicelements/footer.php'); ?>
    
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="../resources/Bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="lib/js/newssubscription.js"></script>
</body>
</html>