<?php $this->load->helper('form'); ?>
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
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="removesession">Uitloggen</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container">
            <?php echo form_open('cms/submitpage'); ?>
            <div class="row">
                <h2>Pagina aanpassen</h2>
            </div>
            <div class="row">
                <ul class="nav nav-tabs col-md-12" role="tablist" style="margin-top: 20px;">
                    <li style="width: 150px; text-align: center;" class="active"><a href="#page" data-toggle="tab">Pagina</a></li>
                    <li style="width: 150px; text-align: center;"><a href="#meta"  data-toggle="tab">Meta-informatie</a></li>
                </ul>
                <div class="tab-content col-md-12">
                    <div id="page" class="tab-pane fade in active" style="padding-top:10px">
                        <div class="form-group">
                            <label for="pagetitle">Titel</label>
                            <?php
                            $data = array(
                                'name' => 'pagetitle',
                                'placeholder' => 'Testpagina',
                                'class' => 'form-control',
                                'id' => 'pagetitle',
                                'required' => 'true',
                                
                                'style' => 'width: 60%'
                                
                            );
                            echo form_input($data);
                            ?>
                        </div>
                        <div class="form-group">
                            <label for="metaurl">Pagina titel</label>
                            <?php
                            $data = array(
                                'name' => 'meta-keywords',
                                'placeholder' => 'Testpagina',
                                'class' => 'form-control',
                                'id' => 'metaurl',
                                'style' => 'width: 60%'
                                
                            );
                            echo form_input($data);
                            ?>
                        </div>
                        
                    </div>
                    <div id="meta" class="tab-pane fade" style="padding-top: 10px;">
                        <p>Hier kan je de meta-data van de pagina aanpassen. Deze informatie is niet direct zichtbaar op de site maar wordt wel gebruikt door zoekmachines, zoals Google.</p>
                        <div class="form-group">
                            <label for="metaurl">Meta: URL-verwijzing</label>
                            <?php
                            $data = array(
                                'name' => 'meta-keywords',
                                'placeholder' => 'Type hier de url voluit: http://www.demetervoeding.nl/testpagina',
                                'class' => 'form-control',
                                'id' => 'metaurl',
                                'style' => 'width: 60%'
                                
                            );
                            echo form_input($data);
                            ?>
                        </div>
                        <div class="form-group">
                            <label for="metakeywords">Meta: Sleutelwoorden</label>
                            <?php
                            $data = array(
                                'name' => 'meta-keywords',
                                'placeholder' => 'Typ hier sleutelwoorden van de pagina gescheiden door een komma.
Bijvoorbeeld: Auto, Autodeur, Auto-hengsel',
                                'class' => 'form-control',
                                'style' => 'height: 70px;',
                                'id' => 'metakeywords'
                            );
                            echo form_textarea($data);
                            ?>
                        </div>
                        <div class="form-group">
                            <label for="metadescription">Meta: Beschrijving van de pagina</label>
                            <?php
                            $data = array(
                                'name' => 'metadescription',
                                'placeholder' => 'Typ hier een korte samenvatting van de pagina, niet meer dan 500 tekens.',
                                'class' => 'form-control',
                                'style' => 'height: 100px;',
                                'id' => 'metadescription'
                            );
                            echo form_textarea($data);
                            ?>
                        </div>
                    </div>
                </div>
                <button class="btn btn-info pull-right" style="margin-top:20px;">Pagina Opslaan</button>
            </div>
    </body>
</html>