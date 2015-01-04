<div class="col-md-12 titlePlaceholder">
    <h1 class="title"><?= $page->title ?></h1>
</div>
<div class="col-md-10 col-md-offset-1">
    <p>
        <b>
            <?=$fields->maintext?>
        </b>
    </p>
    <p>
        <?=$fields->infotext?>
    </p>
    <h3>Ondersteunende producten:</h3>
</div>
<div class="col-md-10 col-md-offset-1">
    <?php foreach ($fields->producttitle as $key => $value): ?>
        <div class="col-md-4">
            <a href="<?=$fields->productlink[$key]?>" class="productlink">
                <div class="productcontainer">
                    <img class="img-responsive productimg" src="<?= $img . $fields->productimg[$key] ?>">
                    <div class="producttext">
                        <h4 class="producttitle"><?=$value?></h4>
                        <p class="productdescription"><?=$fields->productdescription[$key]?></p>
                    </div>
                </div>
            </a>
        </div>
    <?php endforeach; ?>
</div>