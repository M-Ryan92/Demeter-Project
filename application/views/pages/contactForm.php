<?php 
 include($baseAssetUrl.'forms/FormClass.php');
?>
<div class="col-md-6">
    <h3>Neem contact op:</h3>
    <script type="text/javascript" src="<?php echo $js;?>StandardFormSubmit.js"></script>
    <div style="display:none;margin-bottom: 10px;width: 100%" id="formresponse" class="btn text-center active"></div>
    <form accept-charset="UTF-8" id="form">
    <input type="hidden" value="Contact pagina" name="page"/>
        <div class="col-md-0">
            <div class="form-group">
                <label for="name">Naam</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Voer hier uw naam in" required="required"/>
            </div>
            <div class="form-group">
                <label for="email">
                    Email</label>
                <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Voer hier uw emailadres in" required="required"/>
                </div>
            </div>

        </div>
            <div class="col-md-0">
                <div class="form-group">
                    <label for="name">Bericht</label>
                    <textarea name="message" id="message" class="form-control" rows="4" required="required" placeholder="Voer hier uw Bericht in"></textarea>
                </div>
            </div>            
        <button type="submit" class="btn btn-success pull-right" id="btnContactUs">
            Verstuur bericht
        </button>
    </form>
</div>