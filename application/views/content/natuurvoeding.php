<div class="col-md-12 titlePlaceholder">
    <h1 class="title"><?= $page->title ?></h1>
</div>
<div class="col-md-10 col-md-offset-1">
    <div style="float: right;margin-left: 20px;">
        <h4 class="text-center">
            <i>
                <?= $fields->mottotext ?>
            </i>
        </h4>
        <img src="<?= $img . $fields->thumbnail ?>" style="max-height: 200px; border-radius: 30px;" class="img-responsive">
    </div>
    <p>
        <b>
            <?= $fields->maintext ?>
        </b>
    </p>
    <?= $fields->infotext ?>
    <div id="form" style="display:none;padding:10px;margin-bottom: 170px;">
        <div style="display:none;margin-bottom: 10px;width: 100%" id="formresponse" class="btn text-center active">
        </div>
        <form accept-charset="UTF-8" id="form">
            <input type="hidden" value="<?= $page->url ?>" name="pageurl"><div class="col-md-6">
                <div class="form-group">
                    <label for="name">Naam</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Naam invoeren" required="required">
                </div>
                <div class="form-group">
                    <label for="email">
                        Email</label>
                    <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                        </span>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Email invoeren" required="required"></div>
                </div></div><div class="col-md-6"><div class="form-group">
                    <label for="name">Bericht</label>
                    <textarea name="message" id="message" class="form-control" rows="5" required="required" placeholder="Bericht"></textarea>
                </div></div>            <button type="submit" class="btn btn-success pull-right" id="btnContactUs">
                Verstuur bericht
            </button>
        </form>
    </div>
    <?php foreach ($fields->steptitle as $key => $value): ?>
        <div class="consult-element" col-md-offset-1="" col-md-10="">
            <h3><?=$value?></h3>
            <p><?= $fields->steptext[$key] ?></p>
            <div class="consult-properties pull-right">
                <?= $fields->stepdetail[$key] ?>
            </div>
            <div class="clearfix"></div>
        </div>
        <hr>    
    <?php endforeach; ?>
        <?=$fields->lowertext?>
</div>