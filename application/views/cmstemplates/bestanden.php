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
                        <li><a href="formulieren">Formulieren</a></li>
                        <li><a href="inschrijvingen">Inschrijvingen</a></li>
                        <li><a href="paginabeheer">Pagina's beheren</a></li>
                        <li class="active"><a href="bestanden">Bestanden</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="removesession">Uitloggen</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container">
            <?php if(isset($message)){
                    if($message != FALSE) {
                    echo $message;
                    }
                } ?>
            <button type="submit" class="btn btn-success pull-right new-image" style="margin-top: 10px;">
                <span class="glyphicon glyphicon-plus"></span>
                Nieuw bestand toevoegen</button>
            <h1>Bestanden</h1>
            
            <?php foreach ($images as $image): ?>   
                <div class="imageblock" data-toggle="popover" role="button" tabindex="0" data-trigger="focus" title="<?php echo substr($image, 0, -4); ?>">
                    <img class="standard-img" src="<?php echo $img . $image; ?>">
                    <p class="img-name"><?php echo substr($image, 0, -4); ?></p>
                </div>
                <div class="popper-content hide">
                    <span class="text-primary">Informatie van het bestand</span><br>
                    <br>
                    <table class="table table-condensed" style="margin: -5px">
                        <tbody>
                            <tr>
                                <td>Titel</td>
                                <td><?php echo substr($image, 0, -4); ?></td>
                            </tr>
                            <tr>
                                <td>Formaat</td>
                                <td><?php echo substr($image, -4); ?></td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="<?php echo $img . $image; ?>" target="_blank" class="btn btn-info pull-left btn-sm" style="margin-top:20px; margin-bottom: 10px;">Bekijk</a>
                    <form action="removeimage" method="post" accept-charset="utf-8">
                        <div class="btn btn-danger btn-sm pull-right" style="margin-top: 20px; margin-bottom: 10px;">Verwijder</div>
                        <input type="hidden" name="filename" value="<?php echo $image; ?>" />
                    </form>
                </div>  
            <?php endforeach; ?>
        </div>

        <div class="popout">
            <div class="panel panel-warning">
                <div class="panel-heading">
                    Afbeelding uploaden
                </div>
                <div class="panel-body">
                    <form action="submitimage" method="post" accept-charset="utf-8"  enctype="multipart/form-data">
                        <label for="upload-image">Upload een afbeelding:</label>
                        <div class="input-group image-preview">
                            <input type="text" class="form-control image-preview-filename" disabled="disabled" id="upload-image" name="img-name">
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                                    <span class="glyphicon glyphicon-remove"></span> Clear
                                </button>
                                <div class="btn btn-default image-preview-input">
                                    <span class="glyphicon glyphicon-folder-open"></span>
                                    <span class="image-preview-input-title">Zoeken</span>
                                    <input type="file" accept="image/png, image/jpeg, image/gif" name="input-file-preview" required="true" /> <!-- rename it -->
                                </div>
                            </span>
                        </div>
                        <button type="submit" class="btn btn-success pull-right" style="margin-top: 15px;">Uploaden</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="shade"></div>
        <script type="text/javascript" src="<?php echo $js . "imagepreview.js"; ?>"></script>
    </body>
</html>

