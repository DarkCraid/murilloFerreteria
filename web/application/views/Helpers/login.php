<div class="row">
	<div class="col-xs-12 form-group">
		<label>Usuario</label>
		<input type="text" placeholder="Usuario o Email" class="form-control inpLogin" id="user" required>
	</div>
	<div class="col-xs-12 form-group">
		<label>Contraseña</label>
		<input type="password" placeholder="Contraseña" class="form-control inpLogin" id="pssw" required>
	</div>
</div>
<div class="row error container">
	<strong class="text-danger"></strong>
</div>

<script>
	$('.inpLogin').keypress(function(e) {
	    if(e.which == 13) {
	        dataLogin();
	    }
	});
</script>