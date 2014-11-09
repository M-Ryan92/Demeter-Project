<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="<?php echo $bootstrapcss;?>" rel="stylesheet" type="text/css">
        <style type="text/css">
            body {
                padding-top: 70px;
            }            
        </style>
        <script type="text/javascript" src="<?php echo $jquery;?>"></script>
        <script type="text/javascript" src="<?php echo $bootstrapjs;?>"></script>
    </head>
    <body> 
        <div class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><b>CMS</b></a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="formulieren">Formulieren</a></li>
                        <li class="active"><a href="#">Inschrijvingen</a></li>
                        <li><a href="paginabeheer">Pagina's beheren</a></li>
                        <li ><a href="bestanden">Bestanden</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="removesession">Uitloggen</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container">
            <?php 
        if(isset($_POST["adressen"])){
            $handle = fopen("../Adressen.csv", "w");
            fwrite($handle, $_POST["adressen"]); ?><div class="row">
                <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    De lijst is nu upgedated.
                </div></div>
        <?php
          $_POST["adressen"] = null;
        } ?>
            <div class="row">
                <button type="submit" class="btn btn-primary pull-right" style="margin-top: 20px;">
                    <span class="glyphicon glyphicon-floppy-disk"></span>
                    Wijzigingen opslaan</button>
                <h2>Inschrijvingen</h2>
            </div>
            <div class="row">
                <div class="col-md-12 input-group">
                    <form class="form-group" action="submitsubscriptions" method="post">
                        <textarea class="col-md-12" rows="30" style="margin-top: 10px;" name="subscriptions"><?php echo $adressen; ?></textarea>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>