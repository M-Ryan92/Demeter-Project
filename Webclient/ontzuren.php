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
                <h1 class="text-center title">Gezonder door ontzuren</h1>
            </div>

            <div class="col-md-9" style='margin-bottom: 30px;'>
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
                        new TextField("Naam", "Naam invoeren"),
                        new EmailField("Email Adres", "Email invoeren"),
                        new SelectField("Onderwerp", "s", array(new SelectOption("d", "Kies een onderwerp", true),
                            new SelectOption("vraag", "Vraag"),
                            new SelectOption("Afspraak", "Afspraak"),
                            new SelectOption("urine", "Urinetest aanvragen")))
                    ));
                    $colum2 = new Colum(array(new TextBoxField("Berich", "Bericht", 9)));
                    $formTest = new Form("basicskin.php", "POST", "Verstuur bericht", 2, array($colum1, $colum2));
                    echo $formTest->outputFormHTML();
                    ?>
                </div>
            </div>
            <div class="col-md-3">
                <a href="#" class="thumbnail">
                    <img src="<?php echo $img . 'FitNJoy foto0.jpg'; ?>" class="img-responsive">
                </a>
                <button class="btn btn-block btn-primary active" onclick="contactToggle('#description', '#contact')" id="description">
                    Beschrijving
                </button>
                <button class="btn btn-block btn-primary" onclick="contactToggle('#contact', '#description')" id="contact">
                    Contact
                </button>
                <ul class="list-group">
                    <li class="list-group-item">
                        Prijs:
                        <span style="float: right;">€ 60,-</span>
                    </li>
                    <li class="list-group-item">
                        Duur:
                        <span style="float:right;">Anderhalf uur</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <?php include($baseComponents . 'footer/footer.php'); ?>

    <script type="text/javascript" src="<?php echo $jQuery; ?>"></script>
    <script type="text/javascript" src="<?php echo $bootstrapJS; ?>"></script>
    <script type="text/javascript">
                    function contactToggle(obj, obj2) {
                        $(obj).addClass("active");
                        $(obj2).removeClass("active");

                        $(obj + 'content').slideDown();
                        $(obj2 + 'content').slideUp();
                    }
    </script>
</body>
</html>