<style>
    .list-input-item{
        border: 0;
        width: 100%;
        border-bottom: 1px solid gainsboro;
    }
    .list-input-item:focus{
        border-color: #66afe9;
        outline: 0;
    }
    .btn-group{
        margin-top: -20px;
    }
</style>
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
            <div class="col-md-12"><hr></div>
            <div class="col-md-12 fields"></div>
        </div>
    </form>
</div>
<script src="<?= $ckeditor ?>"></script>
<script src="<?= $ckeditorjquery ?>"></script>
<script>
    $('.row>.fields').html('Ophalen velden...');
    $.ajax({
        type: "GET",
        url: "http://localhost/Demeter/api/pagedata/"+ <?= $pageid ?> +"/data",
        success: function (data) {
                console.log(data);
                var fields = JSON.parse(data);
                $('.row>.fields').html('');
                jQuery.each(fields.templatefields, function (index, value) {
                    if (this.rtf === "1") {
                        createRtfField(this);
                    } else if(this.array === "1"){
                        createArrayField(this);
                    } else {
                        createField(this);
                    }
                   });
                $('textarea#editor').ckeditor();
            }
    });

    function createRtfField(field) {
        $('.row>.fields').html($('.row>.fields').html() +
                '<div class="form-group">' +
                '<label>' + field.name + '</label>' +
                '<textarea id="editor" name="fields[' + field.id + ']">'+ field.value +'</textarea>' +
                '</div>'
                );
    }

    function createArrayField(field) {
        $('.row>.fields').html($('.row>.fields').html() +
                '<div class="form-group">' +
                '<label>' + field.name + '</label>' +
                '<ul class="list-group" id="'+field.id+'">'+
                    '<li class="list-group-item"><input type="text" class="list-input-item" name="fields[' + field.id + '][]" placeholder="Typ hier uw text" value="'+ field.value +'"></li>'+
                '</ul>' +
                '<div class="btn-group" role="group">'+
                    '<button type="button" class="btn btn-sm btn-success" onclick="addField('+ field.id +')">Toevoegen</button>'+
                    '<button type="button" class="btn btn-sm btn-danger" onclick="removeField('+field.id+')">Verwijderen</button>'+
                '</div>' +
                '</div>'
                );
    }

    function createField(field) {
        $('.row>.fields').html($('.row>.fields').html() +
                '<div class="form-group">' +
                '<label>' + field.name + '</label>' +
                '<input type="text" name="fields[' + field.id + ']" class="form-control" value="">' +
                '</div>'
                );
    }

    function addField(listId){
        $( "#" + listId ).append( '<li class="list-group-item"><input type="text" class="list-input-item" name="fields[' + listId + '][]" placeholder="Typ hier uw text">' );
    }
    function removeField(listId){
        $('#'+ listId + ' li:last-child').remove();
    }
</script>
</body>
</html>