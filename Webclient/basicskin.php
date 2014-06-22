<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="../resources/Bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="lib/css/basicstyle.css" rel="stylesheet" type="text/css">
    </head>
    <body>
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
            <div class="row" style="margin: 15px 0 15px 0;height: 34px;">
                <div style="margin: 0px auto;width: 300px;">
                    
                    <button class="btn btn-default" style="width:300px;" onclick="setVisible(this)">Inschrijven voor de Nieuwsbrief!</button>
                    <input type="email" style="width:200px; float: left; border-radius: 4px 0px 0px 4px; border-right: none; display: none;" id="newsinput" class="form-control" />
                    <button class="btn btn-success" style="width:100px; border-radius: 0 4px 4px 0; display: none;" id="newsbutton">Inschrijven</button>
                </div>
                
            </div>

            <!-- Voorstellen pagina -->
            <div class="row">
                <div class="col-md-offset-1 col-md-10" style="height: 400px">
                    <div class="col-md-6 text-center">
                        <img src="img/demeter.png" alt="" style="width:140px; height: 140px;">
                        <h2>Demeter, voeding en welzijn</h2>
                        <p>Om naar een zo goed mogelijke gezondheid te streven is het van belang dat lichaam
                            en geest in balans zijn. Voeding, stressbeperking en beweging zijn drie belangrijke factoren voor een optimaal evenwicht...</p>
                        <p><a class="btn btn-success" href="#" role="button">Lees meer &raquo;</a></p>
                    </div>
                    <div class="col-md-6 text-center">
                        <img src="img/karin.jpg" alt="" class="img-circle" style="width:140px; height: 140px;">
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
            <div>
                <div class="col-md-4 col-md-offset-2">
                    <h4>Algemeen</h4>
                    <ul class="col-md-12">
                        <li><a href="#">Algemene voorwaarden</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Tarieven</a></li>
                        <li><a href="#">Agenda</a></li>
                    </ul>	
                </div>
                <div class="col-md-4 col-md-offset-2 footerleft">
                    <div style="height: 70px;width: 70px;float:right;margin-top: 25px;">
                        <img src="img/demeter.png" alt="" style="height: 70px;width: 70px;">
                    </div>
                    <h4>Demeter, voeding en welzijn</h4>
                    <ul class="list-unstyled">
                        <li>Langelende laan 4</li>
                        <li><a href="">info@demetervw.nl</a></li>
                        <li>tel. 0612345678</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-12">
                <p class="text-muted text-center" style="margin-top: 15px;">Powered by <a href="">Webcms</a></p>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="../resources/Bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../lib/js/newssubscription.js"></script>
</body>
</html>