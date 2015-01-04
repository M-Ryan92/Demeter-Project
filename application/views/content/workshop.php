<div class="col-md-12 titlePlaceholder">
    <h1 class="title"><?= $page->title ?></h1>
</div>
<div class="col-md-3">
    <!--<script src="js/overlayToggle.js" type="text/javascript"></script>-->
    <!-- <script type="text/javascript">
        //var caroussel = new OverlayCaroussel(["Natuurvoeding foto liggend.png", "demeter_oud.gif", "Ontspannende gezichtsmassage.jpg", "H3OPro.png"]);
    </script> -->
    <a href="#" class="thumbnail" onclick="caroussel.toggleOverlay()">
        <img src="<?= $img . $fields->thumbnail ?>" class="img-responsive">
        <div>Klik hier voor plaatjes.</div>
    </a>
    <button class="btn btn-block btn-success active" onclick="contactToggle('#description', '#contact')" id="description">
        Beschrijving
    </button>
    <button class="btn btn-block btn-success" onclick="contactToggle('#contact', '#description')" id="contact">
        Contact
    </button>
    <?php if ($page->url === "outdoor-training"): ?>
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
                <span>09.30 - 10.30</span>
            </li>
            <li class="list-group-item">
                Dag:
                <span>Woensdag</span>
            </li>
        </ul>
        <ul class="list-group">
            <li class="list-group-item" style="text-align: center; font-weight: bold">
                XCO Walking &amp; Running
            </li>
            <li class="list-group-item">
                Prijs:
                <span>€ 4,- / keer</span>
            </li>
            <li class="list-group-item">
                Tijd:
                <span>09.00 - 10.00</span>
            </li>
            <li class="list-group-item">
                Dag:
                <span>Vrijdag</span>
            </li>
        </ul>
    <?php else: ?>
        <ul class="list-group">
            <?php foreach ($fields->infolabel as $key => $value): ?>
                <li class="list-group-item"><?= $value ?>
                    <span><?= $fields->infovalue[$key] ?></span>
                </li>

            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</div>

<div class="col-md-9">
    <p id="maintext">
        <b>
            <?= $fields->maintext ?>
        </b>
    </p>
    <div id="descriptioncontent">
        <?= $fields->infotext ?>
        <p>Wilt u meer weten of een afspraak maken? <a onclick="contactToggle('#contact', '#description')">Klik dan hier of op de knop contact.</a></p>
    </div>
    <div id="contactcontent">
        <div style="display:none;margin-bottom: 10px;width: 100%" id="formresponse" class="btn text-center active">
        </div>
        <form accept-charset="UTF-8" method="post">
            <input type="hidden" value="<?= $page->url ?>" name="pageurl"><div class="col-md-6">
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