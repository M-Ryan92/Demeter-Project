<div class="voorwaarden">
    <div class="col-md-12 titlePlaceholder">
        <h1 class="title"><?= $page->title ?></h1>
    </div>
    <div class="col-sm-offset-1 col-md-offset-2 col-xs-12 col-sm-10 col-md-8">
        <ul class="lijstje list-unstyled">
            <?php foreach ($fields->termsdetail as $key => $value): ?>
                <li><?= $value ?></li>
            <?php endforeach; ?>  
        </ul>
    </div>
</div>