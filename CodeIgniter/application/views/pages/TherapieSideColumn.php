<div class="col-md-3">
    <?php
        $images = array();
        $fileList = explode(';', $contentImg);
        $fileLable = explode(';', $content);

        $items = explode(';', $subContent);
        for ($i=0; $i < sizeof($fileList); $i++) {
            if($fileList[$i] != "" || $fileList[$i] != null) array_push($images, new Image($fileList[$i], $fileLable[$i]));
        }
    ?>
    <script src="<?php echo $js.'workshopcontact.js';?>" type="text/javascript"></script>
    <script type="text/javascript">
    function toggleOverlay() {
        if(document.location.search.indexOf("?") < 0){
            document.location = document.location+'?'+'overlay=true';
        }else {
            document.location = document.location.origin + document.location.pathname;
        }
    }
    </script>

    <a class="thumbnail" onclick="toggleOverlay()()">
        <img src="<?php echo $img.$fileList[0];?>" alt="<?php echo $fileLable[0]?>" class="img-responsive">
        <div>Klik hier voor plaatjes.</div>
    </a>
    <button class="btn btn-block btn-success active" onclick="contactToggle('#description', '#contact')" id="description">
        Beschrijving
    </button>
    <button class="btn btn-block btn-success" onclick="contactToggle('#contact', '#description')" id="contact">
        Contact
    </button>
    <ul class="list-group">
        <li class="list-group-item">
            Prijs:
            <span><?php echo $items[0]; ?></span>
        </li>
        <li class="list-group-item">
            Duur:
            <span><?php echo $items[1]; ?></span>
        </li>
    </ul>
</div>