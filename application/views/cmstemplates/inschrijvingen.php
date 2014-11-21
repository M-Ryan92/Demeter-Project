        <div class="container">
            <?php 
        if(isset($_POST["adressen"])){
            $handle = fopen("../Adressen.csv", "w");
            fwrite($handle, $_POST["adressen"]); ?><div class="row">
                <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    De lijst is nu upgedated.
                </div></div>
        <?php
          $_POST["adressen"] = null;
        } ?>
            <div class="row">
                <button type="submit" class="btn btn-primary pull-right" style="margin-top: 20px;">
                    <span class="glyphicon glyphicon-floppy-disk"></span>
                    Wijzigingen opslaan</button>
                <h2>Inschrijvingen</h2>
            </div>
            <div class="row">
                <div class="col-md-12 input-group">
                    <form class="form-group" action="submitsubscriptions" method="post">
                        <textarea class="col-md-12" rows="30" style="margin-top: 10px;" name="subscriptions"><?php echo $adressen; ?></textarea>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>