<?php include('globalsettings.php'); ?>
<?php include($forms);?>
<!DOCTYPE html>
<style>

</style>
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
            <div class="contactView">
                <div class="col-md-12 titlePlaceholder">
                    <h1 class="text-center title">Contact</h1>
                </div>
                <div id="contactcontent" class="col-md-offset-1 col-md-10 formPlaceholder">
                    <?php 
                        $formTest = new ContactForm("basicskin.php", "GET", 
                                array(new Field("Naam", "Voer hier uw naam in"),
                                    new Field("Email", "Voer hier uw email adres in")),
                                "Verstuur");
                        echo $formTest->outputFormHTML();
                    ?>
                    <div class="col-md-6">
                        <h3>Neem contact op:</h3>
                        <form>
                            <div class="form-group">
                                <label for="name">
                                    Naam</label>
                                <input type="text" class="form-control" id="name" placeholder="Naam invoeren" required="required" />
                            </div>
                            <div class="form-group">
                                <label for="email">
                                    Email Adres</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                    </span>
                                    <input type="email" class="form-control" id="email" placeholder="Email invoeren" required="required" /></div>
                            </div>
                            <div class="form-group">
                                <label for="name">
                                    Bericht</label>
                                <textarea name="message" id="message" class="form-control" rows="4" cols="25" required="required"
                                          placeholder="Bericht"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                                Verzend bericht
                            </button>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <h3>Adres-gegevens:</h3>
                        1444 VX Purmerend<br />
                        Kievithof 2<br />
                        <br />
                        Telefoon: 0299-435748/06-25543640<br />
                        <a href="mailto:info@demetervw.nl">info@demetervw.nl</a><br />
                        <br />
                        KvK 55141889<br />
                        Btw nr NL191428838B01<br /><br />
                        <iframe frameborder="0" width="100%" height="250" scrolling="no" marginheight="0" marginwidth="0" 
                                src="https://maps.google.nl/maps?sll=52.5246373,4.9593804&amp;sspn=0.0050132,0.0109864&amp;q=Kievithof+2,+1444+VX+Purmerend&amp;ie=UTF8&amp;hq=&amp;hnear=Kievithof+2,+1444+VX+Purmerend&amp;t=m&amp;z=14&amp;ll=52.524637,4.95938&amp;output=embed"></iframe>
                        
                    </div>
                </div>
            </div>
        </div>

        <?php include($baseComponents . 'footer/footer.php'); ?>

        <script type="text/javascript" src="<?php echo $jQuery; ?>"></script>
        <script type="text/javascript" src="<?php echo $bootstrapJS; ?>"></script>
    </body>
</html>