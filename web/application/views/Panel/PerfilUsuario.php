<link rel="stylesheet" href="<?= base_url('assets/css/perfilUsuario.css'); ?>">

<section class="row">
	<div class="container">
		<div class="col-sm-8 col-sm-offset-4 col-xs-12 float">
			<div class="row form-group">
				<div class="col-md-3 col-xs-12 text-right">
					<label class="col-form-label mr-2 control-label">Nombre: </label>
				</div>
				<div class="col-md-8 col-xs-11">
					<input type="text" class="form-control" name="nombre" id="inpNombre" disabled>
				</div>
			</div>
			<div class="row form-group">
				<div class="col-md-3 text-right">
					<label class="col-form-label mr-2 control-label">Email: </label>
				</div>
				<div class="col-md-8 col-xs-11">
					<input type="text" class="form-control" name="email" id="inpEmail" disabled>
				</div>
			</div>
			<div class="row form-group">
				<div class="col-md-8 col-xs-11 col-md-offset-3">
					<button class="btn btn-primary" id="changepssw" type="button">Cambiar contraseña</button>
				</div>
			</div>
		</div>

		<div class="col-sm-8 col-sm-offset-4 col-xs-12 float float-pssw hidden">
				<div class="row form-group">
					<div class="col-md-3 col-xs-12 text-right">
						<label class="col-form-label mr-2 control-label">Contraseña actual: </label>
					</div>
					<div class="col-md-8 col-xs-11">
						<input type="password" class="form-control" name="pssw1">
					</div>
				</div>
				
				<div class="row form-group">
					<div class="col-md-3 text-right">
						<label class="col-form-label mr-2 control-label">Nueva contraseña: </label>
					</div>
					<div class="col-md-8 col-xs-11">
						<input type="password" class="form-control" name="pssw2">
					</div>
				</div>
				
				<div class="row form-group">
					<div class="col-md-3 text-right">
						<label class="col-form-label mr-2 control-label">Confirmar contraseña: </label>
					</div>
					<div class="col-md-8 col-xs-11">
						<input type="password" class="form-control" name="pssw3">
					</div>
				</div>
				
				<div class="row form-group">
					<div class="col-md-8 col-xs-11 col-md-offset-3">
						<button class="btn btn-danger" type="button">Cancelar</button>
						<button class="btn btn-success" type="button">Aceptar</button>
					</div>
				
				</div>
		</div>
	</div>
</section>

<script src="<?= base_url('assets/js/perfilUsuario.js'); ?>"></script>