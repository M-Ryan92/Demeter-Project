<div class="col-md-12 titlePlaceholder">
    <h1 class="title"><?= $page->title ?></h1>
</div>
<div id="contactcontent" class="col-md-offset-1 col-md-10 formPlaceholder">
    <div class="col-md-6">
        <h3>Neem contact op:</h3>
        <div style="display:none;margin-bottom: 10px;width: 100%" id="formresponse" class="btn text-center active">
        </div>
        <form accept-charset="UTF-8" id="form">
            <input type="hidden" value="<?= $page->url ?>" name="pageurl">
            <div class="col-md-0">
                <div class="form-group">
                    <label for="name">Naam</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Voer hier uw naam in" required="required">
                </div>
                <div class="form-group">
                    <label for="email">
                        Email
                    </label>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-envelope"></span>
                        </span>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Voer hier uw emailadres in" required="required">
                    </div>
                </div>
            </div>
            <div class="col-md-0">
                <div class="form-group">
                    <label for="name">Bericht</label>
                    <textarea name="message" id="message" class="form-control" rows="4" required="required" placeholder="Voer hier uw Bericht in"></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-success pull-right" id="btnContactUs">
                Verstuur bericht
            </button>
        </form>                         
    </div>
    <div class="col-md-6">
        <h3>Adres-gegevens:</h3>
        <?=$postalcode[0]?><br>
        <?=$address[0]?><br>
        <br>
        Telefoon: <?=$phone[0]?> / <?=$secondphone[0]?><br>
        <a href="mailto:<?=$email[0]?>"><?=$email[0]?></a><br>
        <br>
        KvK <?=$kvk[0]?><br>
        Btw nr <?=$btw[0]?><br><br>
        <iframe frameborder="0" width="100%" height="250" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.nl/maps?sll=52.5246373,4.9593804&amp;sspn=0.0050132,0.0109864&amp;q=Kievithof+2,+1444+VX+Purmerend&amp;ie=UTF8&amp;hq=&amp;hnear=Kievithof+2,+1444+VX+Purmerend&amp;t=m&amp;z=14&amp;ll=52.524637,4.95938&amp;output=embed"></iframe>
    </div>
</div>