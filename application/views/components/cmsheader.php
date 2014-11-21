<?php $this->load->helper('form');?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
 
        <link href="<?php echo $bootstrapcss; ?>" rel="stylesheet" type="text/css">
        <style type="text/css">
            body {
                padding-top: 70px;
            }
            .clickableRow {
                cursor: pointer;
            }
        </style>
        <script type="text/javascript" src="<?php echo $jquery; ?>"></script>
        <script type="text/javascript" src="<?php echo $bootstrapjs; ?>"></script>
        <script type="text/javascript" src="<?php echo $ckeditor; ?>"></script>
        <script type="text/javascript" src="<?php echo $ckeditorjquery; ?>"></script>
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
                        <li><a href="inschrijvingen">Inschrijvingen</a></li>
                        <li class="active"><a href="paginabeheer">Pagina's beheren</a></li>
                        <li ><a href="bestanden">Bestanden</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="removesession">Uitloggen</a></li>
                    </ul>
                </div>
            </div>
        </div>