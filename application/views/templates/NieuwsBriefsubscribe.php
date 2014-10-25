<script type="text/javascript" src="<?php echo $js;?>newssubscription.js"></script>
<div class="row">
	<div class="subscribe-wrapper">
		<button class="btn btn-default showsubscribe" onclick="setVisible(this)">
			Schrijf je in voor de Nieuwsbrief!
		</button>
		<form id="subscription">
			<input type="hidden" value="subscription" name="table" />
			<input type="email" name="email" id="newsinput" class="form-control" placeholder="voorbeeld@gmail.nl" />
			<button type="submit" class="btn btn-success" id="newsbutton">Inschrijven</button>
		</form>
	</div>
</div>