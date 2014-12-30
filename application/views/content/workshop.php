<div class="col-md-12 titlePlaceholder">
    <h1 class="title"><?=$page->title?></h1>
</div>
<div class="col-md-3">
    <!--<script src="js/overlayToggle.js" type="text/javascript"></script>-->
    <script type="text/javascript">
        //var caroussel = new OverlayCaroussel(["Natuurvoeding foto liggend.png", "demeter_oud.gif", "Ontspannende gezichtsmassage.jpg", "H3OPro.png"]);
    </script>
    <a href="#" class="thumbnail" onclick="caroussel.toggleOverlay()">
        <img src="<?php echo $img . 'holistic_pulsing.png'; ?>" class="img-responsive">
        <div>Klik hier voor plaatjes.</div>
    </a>
    <button class="btn btn-block btn-success active" onclick="contactToggle('#description', '#contact')" id="description">
        Beschrijving
    </button>
    <button class="btn btn-block btn-success" onclick="contactToggle('#contact', '#description')" id="contact">
        Contact
    </button>
    <ul class="list-group">
        <li class="list-group-item">
            Prijs:
            <span>€ 60,-</span>
        </li>
        <li class="list-group-item">
            Duur:
            <span>Anderhalf uur</span>
        </li>
    </ul>
</div>
<div class="col-md-9">
    <p id="maintext"><b>
            Holistic Pulsing is een massagemethode, die je uitnodigt tot diepe ontspanning en loslaten.
            De gedachte achter de methode is eenvoudig : je lichaam dat voor een groot deel uit water bestaat, is een grote ritmische beweging.
            Bloed, adem, energie, het stroomt allemaal door je lichaam heen. Wanneer , om wat voor reden dan ook ,
            de energie in je lichaam niet meer vrijuit kan stromen, valt dit te zien en te ervaren zodra je lichaam zachtjes wordt gewiegd.
            Het rustige, ritmische schudden dat de pulser op je overdraagt brengt de energie en het water in je lichaam in beweging
            en voert je naar je gevoelservaringen. De kracht van het pulsen ligt in de zachtheid en vriendelijkheid.
            Zachtjes, ritmisch schudden heeft bijna altijd een ontspannend effect. Juist vanuit die ontspanning kan in je lichaam een nieuw evenwicht ontstaan.</b></p>
    <div id="descriptioncontent">
        <p>De basis van Holistic Pulsing bestaat uit ritmische beweging. Gedurende de hele sessie wordt het lichaam van de pulsee geheel of gedeeltelijk in ritmische beweging gehouden. Dit berust op het principe dat er leven is waar beweging is en dat overal waar beweging ophoudt stagnatie en verval optreden.
            Onze pijnen en zorgen, onze ziekten en aandoeningen, onze angst en woede, hebben ertoe geleid dat we ons krampachtig samentrekken.
            Wij hebben ons sinds onze babytijd stelselmatig vanuit ons lichaam teruggetrokken in ons hoofd. We zijn ons nog maar nauwelijks bewust van het feit dat we überhaupt een lichaam hebben, totdat we pijn ervaren.
            Holistic Pulsing is een gemakkelijke en duidelijke manier om iemand te helpen zich bewust te worden van zijn blokkades.
        </p>
        <p>
            De voortgaande pulsbeweging leidt ertoe dat de afvalstoffen in de lichaamscellen worden afgegeven aan de bloedstroom om via de nieren
            en de blaas te worden afgescheiden. Holistic Pulsing reproduceert de genezende eigenschappen van water snel en rechtstreeks door
            de doorstroming van onze lichaamsvochten te activeren en zo toxinen uit te scheiden en daardoor ons hele systeem te vitaliseren en
            weer in evenwicht te brengen.
        </p>
        <p>Holistic Pulsing draait om de onvoorwaardelijke liefde,
            die we ons lichaam al eeuwenlang hebben onthouden. Het eist niets, het forceert niets,
            het vraagt om niets en het probeert zelf niets te veranderen- en dat alleen al is het begin van alle zachtmoedige wonderen
            die zich bij Holistic Pulsing openbaren. Forceren leidt onveranderlijk tot datgene wat het probeert te elimineren.
            Alles waar tegen we vechten maken we sterker en alles wat we accepteren maakt ons sterker.
            Door zijn zachtheid kan Holistic Pulsing de hardnekkigste blokkades bereiken en laten verdwijnen.
        </p>
        <p>Wilt u meer weten of een afspraak maken? <a onclick="contactToggle('#contact', '#description')">Klik dan hier of op de knop contact.</a></p>
    </div>
    <div id="contactcontent">
        <div style="display:none;margin-bottom: 10px;width: 100%" id="formresponse" class="btn text-center active">
        </div>
        <form accept-charset="UTF-8" method="post">
            <input type="hidden" value="<?=$page->title?>" name="page"><div class="col-md-6">
                <div class="form-group">
                    <label for="name">Naam</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Naam invoeren" required="required">
                </div>
                <div class="form-group">
                    <label for="email">
                        Email</label>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-envelope"></span>
                        </span>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Email invoeren" required="required">
                    </div>
                </div>
                <div class="form-group">
                    <label for="select">
                        Onderwerp</label>
                    <select id="select" name="subject" class="form-control" required="required">
                        <option value="" selected>Kies een onderwerp</option>
                        <option value="Vraag">Vraag</option>
                        <option value="Afspraak">Afspraak</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6"><div class="form-group">
                    <label for="name">Bericht</label>
                    <textarea name="message" id="message" class="form-control" rows="9" required="required" placeholder="Bericht"></textarea>
                </div>
            </div>            
            <button type="submit" class="btn btn-success pull-right" id="btnContactUs">
                Verstuur bericht
            </button>
        </form>                     
    </div>
</div>
</div>