<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="<?php echo $bootstrapcss;?>" rel="stylesheet" type="text/css">
        <style type="text/css">
            body {
                min-height: 2000px;
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
                        <li><a href="inschrijvingen">Inschrijvingen</a></li>
                        <li class="active"><a href="#">Pagina's beheren</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="removesession">Uitloggen</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <h2 style="display: inline-block">Pagina's beheren</h2>
                <a href="submitpage" class="btn btn-success pull-right" style="margin-top: 20px;">
                    <span class="glyphicon glyphicon-plus"></span>
                    Nieuwe pagina
                </a>
            </div>
            <div class="row">
                <table class="table-hover table-condensed table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Titel</th>
                            <th>Datum</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </body>
</html>