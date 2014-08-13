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
                <h1 class="text-center title">Outdoor training</h1>
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
                    <li class="list-group-item" style="text-align: center; font-weight: bold">
                        FitNJoy
                    </li>
                    <li class="list-group-item">
                        Prijs:
                        <span style="float: right;">€ 3,- / keer</span>
                    </li>
                    <li class="list-group-item">
                        Tijd:
                        <span style="float:right;">09.30 - 10.30</span>
                    </li>
                    <li class="list-group-item">
                        Dag:
                        <span style="float:right;">Woensdag</span>
                    </li>
                </ul>
                <ul class="list-group">
                    <li class="list-group-item" style="text-align: center; font-weight: bold">
                        XCO Walking & Running
                    </li>
                    <li class="list-group-item">
                        Prijs:
                        <span style="float: right;">€ 4,- / keer</span>
                    </li>
                    <li class="list-group-item">
                        Tijd:
                        <span style="float:right;">09.00 - 10.00</span>
                    </li>
                    <li class="list-group-item">
                        Dag:
                        <span style="float:right;">Vrijdag</span>
                    </li>
                </ul>
            </div>

            <div class="col-md-9" style='margin-bottom: 30px;'>
                <p id="maintext"><b>
                        Bewegen in de buitenlucht is gezonder dan in een sportschool. 
                        Dat blijkt uit een nieuwe Britse studie. 
                        Volgens wetenschappers heeft bewegen in de buitenlucht een positief effect op zowel de geestelijke als de lichamelijke gezondheid. 
                    </b></p>
                <div id="descriptioncontent">
                    <p>
                        Studie (Peninsula College of Medicine and Dentistry) toont aan dat lichaamsbeweging in de natuur leidt tot meer gevoelens van revitalisering,
                        meer energie en positieve betrokkenheid. 
                        Spanningen, verwarring, boosheid en depressies worden juist tegen gegaan. 
                        Naast een betere mentale gezondheid, meldde de studie ook dat je meer plezier beleeft aan oefeningen in de buitenlucht en het vaak lang volhoudt. 
                    </p>
                    <p style="text-decoration: underline;">Bewegen moet plezier zijn op je eigen niveau en daar streven wij naar tijdens de trainingen !</p>

                    <p>Wij verzamelen op de parkeerplaats van het Leeghwaterbad. <br>
                        Er is geen slecht weer, alleen slechte kleding ! <br>
                        Slechts bij gladheid en onweer vinden wij het niet verantwoord om op pad te gaan.</p>

                    <p>Meld je voor een gratis proefles aan via <a onclick="contactToggle('#contact', '#description')">het formulier</a> 
                        of via de mail <a href="mailto:demetervoeding@kpnmail.nl">demetervoeding@kpnmail.nl</a></p>
                </div>
                <div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Dag</th>
                                <th>Tijd</th>
                                <th>Training</th>
                                <th>Prijs</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Woensdag</td>
                                <td>9.30-10.30 u.</td>
                                <td>FitNJoy</td>
                                <td>€ 3/keer</td>
                            </tr>
                            <tr>
                                <td>Vrijdag</td>
                                <td>9.00-10.00 u.</td>
                                <td>XCO Walking & Running</td>
                                <td>€ 4/keer</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div id="contactcontent" style="display: none;">
                <?php
                $colum1 = new Colum(array(
                    new TextField("Naam", "Naam invoeren", "name"),
                    new EmailField("Email","Email invoeren", "email"),
                    new SelectField("Onderwerp", "", "subject", array(new SelectOption("","Kies een onderwerp", true),
                        new SelectOption("vraag","Vraag"),
                        new SelectOption("Afspraak","Afspraak")))
                ));
                $colum2 = new Colum(array(new TextBoxField("Bericht", "Bericht", "message", 9)));
                $formTest = new Form("basicskin.php", "POST", "Verstuur bericht", 2,
                array($colum1,$colum2));
                echo $formTest->outputFormHTML();
                ?>
                </div>
            </div>
        </div>
    </div>

    <?php include($baseComponents . 'footer/footer.php'); ?>
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