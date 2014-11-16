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
        <div class="container">
            <?php echo form_open('cms/submitpage'); ?>
            <div class="row">
                <button class="btn btn-primary pull-right" style="margin-top:20px;">
                    <span class="glyphicon glyphicon-floppy-disk"></span>
                    Pagina Opslaan
                </button>
                <h2>Pagina aanpassen</h2>
            </div>
            <div class="row">
                <ul class="nav nav-tabs col-md-12" role="tablist" style="margin-top: 20px;">
                    <li style="width: 150px; text-align: center;" class="active"><a href="#page" data-toggle="tab">Pagina</a></li>
                    <li style="width: 150px; text-align: center;"><a href="#meta"  data-toggle="tab">Meta-informatie</a></li>
                </ul>
                <div class="tab-content col-md-12">
                    <div id="page" class="tab-pane fade in active" style="padding-top:10px">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="pagetitle">Titel:</label>
                                <?php
                                $data = array(
                                    'name' => 'pagetitle',
                                    'placeholder' => 'Testpagina',
                                    'class' => 'form-control',
                                    'id' => 'pagetitle',
                                    'required' => 'true'
                                );
                                if(isset($pageData) && isset($pageData[0]->pageTitle)){
                                    $data['value']= $pageData[0]->pageTitle;
                                }

                                echo form_input($data);
                                ?>
                            </div>
                            <div class="form-group">
                                <label for="pageurl">Pagina url:</label>
                                <?php
                                $data = array(
                                    'name' => 'page-url',
                                    'placeholder' => 'paginaurl',
                                    'class' => 'form-control',
                                    'id' => 'pageurl'
                                );
                                if(isset($pageData) && isset($pageData[0]->pageUrl)){
                                    $data['value']= $pageData[0]->pageUrl;
                                }

                                echo form_input($data);
                                ?>
                            </div>
                            <div class="form-group">
                                <label for="pagetemplate">Template voor de pagina:</label>
                                <select name="template" class="form-control" id="pagetemplate">
                                    <?php
                                    foreach ($templates->result_array() as $template) {
                                        if(isset($pageData) && isset($pageData[0]->templateId) && 
                                            $pageData[0]->templateId == $template['templateId']){
                                            echo '<option value="' . $template['templateId'] . '" selected>' . $template['templateType'] . '</option>';
                                        } else {
                                            echo '<option value="' . $template['templateId'] . '">' . $template['templateType'] . '</option>';
                                        }
                                    }
                                    ?>
                                </select>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="imagesforpage">Plaatjes voor de pagina:</label>
                                <?php
                                $data = array(
                                    'name' => 'images-for-page',
                                    'placeholder' => 'test.jpg; test2.jpg',
                                    'class' => 'form-control',
                                    'id' => 'imagesforpage'
                                );

                                echo form_input($data);
                                ?>
                            </div>
                        </div>
                        <script type="text/javascript">
                        function addContentBlock(){
                            var nodes = $('#contentblock.row');
                            var nrOfNodes = nodes.length;
                            var clonenode = nodes.last().clone();

                            //change the clone node as new element and append to the parent node
                            clonenode.find('#contentblock.form-control').attr('name', 'content['+nrOfNodes+'][text]');
                            clonenode.find('.checkbox').find('label').find('input').attr('name', 'content['+nrOfNodes+'][visible]');
                            clonenode.appendTo('#contentblocklist');
                            $('#blockbuttons').find('.btn.btn-danger').attr('style', 'visibility:visible');
                        };

                        function removeContentBlock(){
                            var nodes = $('#contentblock.row');
                            nodes.last().remove();
                            nodes = $('#contentblock.row');
                            console.log(nodes);
                            console.log(nodes.length);
                            if(nodes.length <= 1){
                                $('#blockbuttons').find('.btn.btn-danger').attr('style', 'visibility:hidden');
                            }
                        }
                        </script>
                        <div class="col-md-12">
                            <div id="contentblocklist">
                            <?php
                            for ($i=0; $i < sizeof($pageData); $i++) { 
                                $textfield = <<<EOT
                                <div class="row" id="contentblock">
                                    <div class="col-md-12"style="border-top: 1px solid #ddd; padding-top: 10px;">
                                        <label for="contentblock">Content block:</label>
                                        <textarea class="form-control" id="contentblock" style="height: 100px;" name="content[0][text]">
EOT;
                                        $textfield .= $pageData[$i]->content;
                                        $textfield .= <<<EOT
                                        </textarea>
                                        <div class="checkbox">
                                            <label>
                                                Standaard beschikbaar <input type="checkbox"
EOT;
                                        if($pageData[$i]->visible == 1 ? true:false){
                                            $textfield .= "checked=\"true\"";    
                                        }
                                        $textfield .= <<<EOT
                                        name="content[0][visible]">
                                            </label>
                                        </div>
                                    </div>
                                </div>
EOT;
                                echo $textfield;
                                //var_dump($pageData[$i]->content);
                            }
                            ?>
                            </div>
                            <div class="row">
                                <div class="col-md-12" id="blockbuttons" style="margin-top: 15px;">
                                    <button type="button" class="btn btn-danger" onclick="removeContentBlock()" style="visibility:hidden;">Remove block</button>
                                    <button type="button" class="btn btn-success pull-right" onclick="addContentBlock()">Add new block</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="meta" class="tab-pane fade" style="padding-top: 10px;">
                        <!--<p class="text-muted">Hier kan je de meta-data van de pagina aanpassen. 
                        Deze informatie is niet direct zichtbaar op de site maar wordt wel gebruikt door zoekmachines, zoals Google.</p> -->
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
            </div>
            <script type="text/javascript">
                $( document ).ready( function() {
                        $( 'textarea#contentblock' ).ckeditor();
                } );
            </script>
    </body>
</html>