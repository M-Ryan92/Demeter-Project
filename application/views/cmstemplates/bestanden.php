<div class="container">
    <?php
    if (isset($message)) {
        if ($message != FALSE) {
            echo $message;
        }
    }
    ?>
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

