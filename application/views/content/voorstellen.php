<div class="col-md-12 titlePlaceholder">
    <h1 class="title"><?=$page->title?></h1>
</div>
<div class=" col-md-offset-2 col-md-8">
    <div class="row">
        <div class="col-md-8">
            <?=$fields->introduction?>
        </div>
        <div class="col-md-offset-1 col-md-3 thumbnail">
            <img src="<?php echo $img . 'Karin.jpg'; ?>">
        </div>
    </div>
    <div class="row col-md-12">
        <h4>Opleidingen/Cursussen</h4>
        <ul class="list-group">
            <?php foreach ($fields->education as $value): ?>
            <li class="list-group-item"><?=$value?></li>    
            <?php endforeach; ?>
        </ul>
    </div>
</div>