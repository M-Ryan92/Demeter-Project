<!--<script type="text/javascript" src="<?php echo $ckeditor; ?>"></script>
<script type="text/javascript" src="<?php echo $ckeditorjquery; ?>"></script>-->
<div class="container">
    <form method="post" action="submitpage">
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
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="pagetitle">Titel:</label>
                            <input type="text" class="form-control" value="Nieuwe Pagina" name="title">
                        </div>
                        <div class="form-group">
                            <label for="pageurl">Pagina url:</label>
                            <div class="input-group">
                                <span class="input-group-addon">www.demetervoeding.nl/</span>
                                <input type="text" class="form-control" value="new-page" name="url">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="pagetemplate">Template voor de pagina:</label>
                            <select name="template" class="form-control" id="pagetemplate">
                                <?php
                                foreach ($templates->result_array() as $row) {
                                    echo '<option value="' . $row['id'] . '">' . $row['title'] . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div id="meta" class="tab-pane fade" style="padding-top: 10px;">
                    <p class="text-muted">Hier kan je de meta-data van de pagina aanpassen. 
                        Deze informatie is niet direct zichtbaar op de site maar wordt wel gebruikt door zoekmachines, zoals Google.</p> 
                    <div class="form-group">
                        <label>Meta: Pagina titel</label>
                        <input type="text" class="form-control" value="Nieuwe Pagina" name="metatitle">
                    </div>
                    <div class="form-group">
                        <label>Meta: Sleutelwoorden</label>
                        <input type="text" class="form-control" value="Nieuw, Pagina" name="metakeywords">
                    </div>
                    <div class="form-group">
                        <label>Meta: Beschrijving van de pagina</label>
                        <textarea type="text" class="form-control" name="metadescription">Dit is een nieuw aangemaakte pagina.</textarea>
                    </div>
                </div>
            </div>
            <!--        <div class="col-md-12">
                        <div id="contentblocklist">
                            
                        </div>
                        <div class="row">
                            <div class="col-md-12" id="blockbuttons" style="margin-top: 15px;">
                                <button type="button" class="btn btn-danger" onclick="removeContentBlock()" style="visibility:hidden;">Remove block</button>
                                <button type="button" class="btn btn-success pull-right" onclick="addContentBlock()">Add new block</button>
                            </div>
                        </div>
                    </div>-->
        </div>
    </form>
</div>
</body>
</html>