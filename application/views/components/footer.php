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
                <li class="text-muted">1444 VX Purmerend</li>
                <li class="text-muted">Kievithof 2</li>
                <li class="text-muted">tel. 06-25543640</li>
            </ul>
        </div>
        <div class="alignment">
            <div class="footerwrapper">
                <div style="display: inline-block">
                    <a href="https://nl-nl.facebook.com/pages/Demeter-Voeding-Welzijn/564168070261116">
                        <img src="<?php echo $img . 'fbicon.png'; ?>" class="mediabutton" />
                    </a>
                </div>
                <div style="display: inline-block">
                    <a href="mailto:info@demetervoeding.nl">
                        <img src="<?php echo $img . 'email0.png'; ?>" class="mediabutton" />
                    </a>
                </div>
            </div>
            <div class="footerwrapper">
                <img src="<?php echo $img . 'demeter oker.png'; ?>" alt="" class="footerimg">
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