<style>
	.titles{margin-left: 30px;bottom: -20px; position: relative;}
	.btn-md{margin-top: 5px;}
	label,table{font-size: 20px;}
</style>
<div class="row form-group">
	<div class="col-xs-3 text-right">
		<label>Nombre: </label>
	</div>
	<div class="col-xs-9">
		<input type="text" class="form-control" id="nombre">
	</div>
</div>
<div class="row">
	<strong class="text-primary titles">Dirección</strong>
</div>
<hr>
<div class="row form-group">
	<div class="col-xs-3 text-right">
		<label>Calle: </label>
	</div>
	<div class="col-xs-9">
		<input type="text" class="form-control" id="calle">
	</div>
</div>
<div class="row form-group">
	<div class="col-xs-3 text-right">
		<label>Colonia: </label>
	</div>
	<div class="col-xs-9">
		<input type="text" class="form-control" id="colonia">
	</div>
</div>
<div class="row form-group">
	<div class="col-xs-3 text-right">
		<label>Número exterior: </label>
	</div>
	<div class="col-xs-4">
		<input type="text" class="form-control" id="num">
	</div>
</div>
<div class="row form-group">
	<div class="col-xs-3 text-right">
		<label>RFC: </label>
	</div>
	<div class="col-xs-4">
		<input type="text" class="form-control" id="rfc">
	</div>
</div>
<div class="row">
	<strong class="text-primary titles">Telefonos</strong>
</div>
<hr>
<div class="row form-group">
	<div class="col-xs-7">
		<div class="col-xs-3 text-right">
			<label>Número: </label>
		</div>
		<div class="col-xs-9">
			<input type="text" class="form-control" id="tel">
			<button class="btn btn-primary btn-md pull-right">Agregar a la lista</button>
		</div>
	</div>
	<div class="col-xs-5">
		<table class="table table-hover table-striped">
			<thead>
				<tr>
				<th>Lista de telefonos</th>
				</tr>
			</thead>
			<tbody id="numerosTB"></tbody>
		</table>
	</div>
</div>


<script>
	var numeros = [];
		
	$('.btn-md').click(function(){
		if($('#tel').val()!=""){
			numeros.push($('#tel').val());
			$('#numerosTB').children().remove();
	        for (var i = 0; i < numeros.length; i++) {
	            var cont = '<tr><td>'+numeros[i]+'</td></tr>';
	            $('#numerosTB').append(cont);
	        }
	    }
	});

	function finalizar(){
		alert('asd');
	}
</script>