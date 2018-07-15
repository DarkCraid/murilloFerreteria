<style>
	.titles{margin-left: 30px;bottom: -20px; position: relative;}
	.btn-md{margin-top: 5px;}
	label,table{font-size: 20px;}
</style>
<div class="row">
	<div class="col-xs-6"><label>Nombre</label></div>
	<div class="col-xs-6 text-center"><label>Apellidos</label></div>
</div>
<div class="row from-group">
	<div class="col-xs-6">
		<input type="text" class="form-control" id="nombre" required>
	</div>
	<div class="col-xs-6">
		<div class="col-xs-6">
			<input type="text" class="form-control" id="a_p" placeholder="Paterno" required>
		</div>
		<div class="col-xs-6">
			<input type="text" class="form-control" id="a_m" placeholder="Materno" required>
		</div>
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
		<input type="text-number" class="form-control" id="calle" required>
	</div>
</div>
<div class="row form-group">
	<div class="col-xs-3 text-right">
		<label>Colonia: </label>
	</div>
	<div class="col-xs-9">
		<input type="text-number" class="form-control" id="colonia" requierd>
	</div>
</div>
<div class="row form-group">
	<div class="col-xs-3 text-right">
		<label>Número exterior: </label>
	</div>
	<div class="col-xs-4">
		<input type="text-number" class="form-control" id="num" required>
	</div>
</div>
<div class="row form-group">
	<div class="col-xs-3 text-right">
		<label>RFC: </label>
	</div>
	<div class="col-xs-4">
		<input type="text-number" class="form-control" id="rfc" required>
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
			<input type="number" class="form-control" id="tel">
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
		getAjax('POST','Proveedores/setProveedor',{
			'nombre': 	$('#nombre').val(),
			'a_p': 		$('#a_p').val(),
			'a_m': 		$('#a_m').val(),
			'calle': 	$('#calle').val(),
			'colonia': 	$('#colonia').val(),
			'num_ca': 	$('#num').val(),
			'rfc': 		$('#rfc').val(),
			'telefonos':numeros

		},'setProveedor');
	}

	$('input').keypress(function(event){
	    return validCaracteres(event,this.id);
	});
</script>