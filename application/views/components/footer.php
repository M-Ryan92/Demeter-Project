</div>
<div id="footerheight" class="footer">
    <div class="footerwrapper">
        <div class="alignment">
            <h4>Algemeen</h4>
            <ul class="list-unstyled">
                <li><a href="voorwaarden">Voorwaarden</a></li>
                <li><a href="contact">Contact</a></li>
                <li><a href="tarieven">Tarieven</a></li>
            </ul>
        </div>
        <div class="alignment">
            <h4>Contact</h4>
            <ul class="list-unstyled">
                <li class="text-muted"><?=$postalcode[0]?></li>
                <li class="text-muted"><?=$address[0]?></li>
                <li class="text-muted">tel. <?=$phone[0]?></li>
            </ul>
        </div>
        <div class="alignment">
            <div class="footerwrapper">
                <div style="display: inline-block">
                    <a href="<?=$facebook[0]?>">
                        <img src="<?php echo $img . 'fbicon.png'; ?>" class="mediabutton" />
                    </a>
                </div>
                <div style="display: inline-block">
                    <a href="mailto:<?=$email[0]?>">
                        <img src="<?php echo $img . 'email0.png'; ?>" class="mediabutton" />
                    </a>
                </div>
            </div>
            <div class="footerwrapper">
                <img src="<?php echo $img . 'demeter geel licht.png'; ?>" alt="" class="footerimg">
            </div>
        </div>
        <div class="col-md-12">
            <p class="footerpower">Powered by <a href="">Webcms</a></p>
        </div>
    </div>
</div>
<script type="text/javascript" src="<?= $assets . 'JQuery/jquery.min.js' ?>"></script>
<script type="text/javascript" src="<?= $assets . 'Bootstrap/js/bootstrap.min.js' ?>"></script>
<script type="text/javascript" src="<?= $js . 'footermargin.js' ?>"></script>
<?php if (isset($jsfiles)): ?>
    <?php foreach ($jsfiles as $jsfile): ?>
        <script type="text/javascript" src="<?= $js . $jsfile ?>"></script>
    <?php endforeach; ?>
<?php endif; ?>
</body>
</html>