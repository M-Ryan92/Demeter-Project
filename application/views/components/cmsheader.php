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
            body {
                padding-top: 70px;
            }   

            .imageblock {
                display: inline-block;
                margin: 10px;
                height: 185px;
                width: 160px; 
                box-shadow: 1px 1px 1px 1px #CCC; 
                position: relative;
            }

            .standard-img {
                max-height: 140px;
                max-width: 150px;
                display: block;
                margin: 5px auto 5px auto;
            }
            .img-name {
                position: absolute;
                bottom: 0;
                margin: 0 10px 2px 10px;
            }

            .popout {
                display: none;
                position: fixed; 
                top:0; 
                left:50%;
                margin-left: -400px;
                padding: 30px;
                height: 150px;
                width: 800px;
                z-index:1500  
            }
            .shade {
                display: none;
                position: absolute;
                top: 0; left: 0;
                width: 100%;
                height: 100%;
                z-index: 1300;
                background-color: rgba(188,188,188, 0.3);
            }

            .image-preview-input {
                position: relative;
                overflow: hidden;
                margin: 0px;    
                color: #333;
                background-color: #fff;
                border-color: #ccc;    
            }
            .image-preview-input input[type=file] {
                position: absolute;
                top: 0;
                right: 0;
                margin: 0;
                padding: 0;
                font-size: 20px;
                cursor: pointer;
                opacity: 0;
                filter: alpha(opacity=0);
            }
            .image-preview-input-title {
                margin-left:2px;
            }
        </style>
        <script type="text/javascript" src="<?php echo $jquery; ?>"></script>
        <script type="text/javascript" src="<?php echo $bootstrapjs; ?>"></script>
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
                        <?php
                            $pages = [
                                "formulieren" => "Formulieren", 
                                "inschrijvingen" => "Inschrijvingen",
                                "paginabeheer" => "Pagina's beheren",
                                "bestanden" => "Bestanden"];
                            foreach ($pages as $pagelink => $page) {
                                echo '<li ';
                                if ($pagename === $pagelink) {
                                    echo 'class="active"';
                                }
                                echo '><a href="'.$pagelink.'">'.$page.'</a></li>';
                            }
                        ?>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="removesession">Uitloggen</a></li>
                    </ul>
                </div>
            </div>
        </div>