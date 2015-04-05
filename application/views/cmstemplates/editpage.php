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
                            <input type="text" class="form-control" value="<?= $pagemetadata['pagetitle'] ?>" name="title">
                        </div>
                        <div class="form-group">
                            <label for="pageurl">Pagina url:</label>
                            <div class="input-group">
                                <span class="input-group-addon">www.demetervoeding.nl/</span>
                                <input type="text" class="form-control" value="<?= $pagemetadata['pageurl'] ?>" name="url">
                            </div>
                        </div>
                        <div><hr></div>
                        <div class="fields">
                        </div>
                    </div>
                </div>
                <div id="meta" class="tab-pane fade" style="padding-top: 10px;">
                    <p class="text-muted">Hier kan je de meta-data van de pagina aanpassen. 
                        Deze informatie is niet direct zichtbaar op de site maar wordt wel gebruikt door zoekmachines, zoals Google.</p> 
                    <div class="form-group">
                        <label>Meta: Pagina titel</label>
                        <input type="text" class="form-control" value="<?= $pagemetadata['metatitle'] ?>" name="metatitle">
                    </div>
                    <div class="form-group">
                        <label>Meta: Sleutelwoorden</label>
                        <input type="text" class="form-control" value="<?= $pagemetadata['metakeywords'] ?>" name="metakeywords">
                    </div>
                    <div class="form-group">
                        <label>Meta: Beschrijving van de pagina</label>
                        <textarea type="text" class="form-control" name="metadescription"><?= $pagemetadata['metadescription'] ?></textarea>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<script>
    $.ajax({
        type: "GET",
        url: "http://localhost/Demeter/api/pagedata/"+ <?= $pageid ?> +"/data",
        success: function (data) {
            console.log(data);
            var fields = JSON.parse(data);
            console.log(fields.templatefields);
            $('.row>.fields').html('');
            jQuery.each(fields.templatefields, function (index, value) {
                $('.fields').html($('.fields').html() +
                        '<div class="form-group">' +
                        '<label>' + this.name + '</label>' +
                        '<input type="text" name="fields_'+ this.id +'" class="form-control" value="'+ this.value +'">'+
                        '</div>'
                        );
               });
        }
    });
</script>
</body>
</html>