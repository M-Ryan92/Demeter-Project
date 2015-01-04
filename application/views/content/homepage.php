<link href="<?=$csspath . "resources/owl/owl.carousel.css"?>" rel="stylesheet">
<link href="<?=$csspath . "resources/owl/owl.theme.css"?>" rel="stylesheet">
<div class="col-md-12 titlePlaceholder" id="target">
    <h1 class="title"><?= $page->title ?></h1>
</div>
<!-- img slider -->
<div class="col-md-12" style="text-align: center; margin: 0 0 20px 0;">
    <div id="owl-demo" class="owl-carousel">
        <?php foreach ($fields->pageimg as $key => $value): ?>
        <div class="item">
            <a href="<?=$fields->pageimglink[$key]?>">
                <img class="lazyOwl" alt="<?=$fields->pageimgalt[$key]?>" src="<?= $img . $value?>">
            </a>
        </div>
        <?php endforeach; ?>
    </div>
</div>


<!-- subscribe button -->
<div class="row">
    <div class="subscribe-wrapper">
        <button class="btn btn-default showsubscribe" onclick="setVisible(this)">
            Schrijf je in voor de Nieuwsbrief!
        </button>
        <form id="subscription">
            <input type="hidden" value="<?= $page->url ?>" name="pageurl">
            <input type="hidden" value="subscription" name="type">
            <input type="email" name="email" id="newsinput" class="form-control" placeholder="voorbeeld@gmail.nl" />
            <button type="submit" class="btn btn-success" id="newsbutton">Inschrijven</button>
        </form>
    </div>
    <!-- Voorstellen pagina -->
    <div class="row">
        <div class="col-md-offset-1 col-md-10 columnsize">
            <div class="col-md-6 text-center">
                <img src="<?php echo $img . 'demeter.png'; ?>" alt="logo" class="columnimg">
                <h2><?= $fields->texttitle[0] ?></h2>
                <p>Om naar een zo goed mogelijke gezondheid te streven is het van belang dat lichaam
                    en geest in balans zijn. Voeding, stressbeperking en beweging zijn drie belangrijke factoren voor een optimaal<br> evenwicht ...</p>
                <p><a class="btn btn-success" href="demetervoedingenwelzijn" role="button">Lees meer &raquo;</a></p>
            </div>
            <div class="col-md-6 text-center">
                <img src="<?php echo $img . 'Karin_icon.jpg'; ?>" alt="Karin" class="img-circle columnimg">
                <h2><?= $fields->texttitle[1] ?></h2>
                <p>Mijn naam is Karin Papadopoulos-Broers, geboren in 1965, getrouwd, trotse moeder van drie zonen,
                    met een passie voor gezonde voeding, koken en sport. Op een bepaald moment in mijn leven, was ik de balans behoorlijk kwijt ...</p>
                <p><a class="btn btn-success" href="voorstellen" role="button">Lees meer &raquo;</a></p>
            </div>
        </div>
    </div>
</div>