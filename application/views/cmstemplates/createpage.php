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
                            <input type="text" class="form-control" value="Nieuwe Pagina" name="title" required>
                        </div>
                        <div class="form-group">
                            <label for="pageurl">Pagina url:</label>
                            <div class="input-group">
                                <span class="input-group-addon">www.demetervoeding.nl/</span>
                                <input type="text" class="form-control" value="new-page" name="url" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="pagetemplate">Template voor de pagina:</label>
                            <select name="template" class="form-control" id="pagetemplate" required>
                                <? foreach ($templates->result_array() as $row): ?>
                                <option value="<?= $row['id'] ?> "><?= $row['title'] ?></option>
                                <? endforeach; ?>
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
            <div class="col-md-12"><hr></div>
            <div class="col-md-12 fields">
                <? foreach ($fields->result() as $row): ?>
                <div class="form-group">
                    <label><?= $row->name ?></label>
                    <input type="text" name="fields[<?= $row->id ?>]" class="form-control" value="">
                    <?php if ($row->rtf) echo 'rtf'; ?>
                </div>
                <? endforeach; ?>
            </div>
        </div>
    </form>
</div>
<script>
    $("#pagetemplate").change(function () {
        $('.row>.fields').html('Ophalen velden...');
        $.ajax({
            type: "GET",
            url: "http://localhost/Demeter/api/templates/" + $('#pagetemplate').val() + "/fields",
            success: function (data) {
                console.log(data);
                var fields = JSON.parse(data);
                $('.row>.fields').html('');
                jQuery.each(fields.templatefields, function (index, value) {
                    if (this.rtf === "1") {
                        $('.row>.fields').html($('.row>.fields').html() +
                                '<div class="form-group">' +
                                '<label>' + this.name + '</label>' +
                                '<textarea name="fields[' + this.id + ']" class="form-control"></textarea>' +
                                '</div>'
                                );
                    } else if(this.array === "1"){
                        $('.row>.fields').html($('.row>.fields').html() +
                                '<div class="form-group">' +
                                '<label>' + this.name + '</label>' +
                                '<input type="text" name="fields[' + this.id + ']" class="form-control" value="">' +
                                'Add new field' +
                                '</div>'
                                );
                    } else {
                        $('.row>.fields').html($('.row>.fields').html() +
                                '<div class="form-group">' +
                                '<label>' + this.name + '</label>' +
                                '<input type="text" name="fields[' + this.id + ']" class="form-control" value="">' +
                                '</div>'
                                );
                    }
                   });
            }
        });
    });
</script>
</body>
</html>