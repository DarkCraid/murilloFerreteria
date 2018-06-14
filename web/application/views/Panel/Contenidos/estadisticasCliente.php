<style>
	.modal-body{background: #f7f7f7;
		padding: 0px;
		    padding-right: 15px;
	}
	.cont{
		margin-left: 3px;
		margin-top: 10px;

	}
	.float{
		background: #FFF;
		    box-shadow: -10px 0 30px -15px #333;
	}
	.filter{    position: relative;
    margin-top: 5px; }
	.result{background-color: #f1f1f1;
		padding: 4px; border-radius: 4px;}
	.notFountAlerts{height: 250px;text-align: center;margin-top: 180px;}
@media screen and (max-width: 998px) {
  .text-right{text-align: left;}
}
</style>


<section class="row" style="border-bottom: 1px solid #000; margin-left: 0px;">
	<div class="col-xs-10  col-xs-offset-1 col-md-7 col-md-offset-0">
			<div class="row cont">
				<div class="row form-group">
					<div class="col-md-4 text-right"><label>Tipo de registro: </label></div>
					<div class="col-xs-12 col-md-7 result"><span><?= $data[0]->cuenta; ?></span></div>
				</div>
				<div class="row form-group">
					<div class="col-md-4 text-right"><label>Nombre: </label></div>
					<div class="col-xs-12 col-md-7 result"><span><?= $data[0]->nombre; ?></span></div>
				</div>
				<div class="row form-group">
					<div class="col-md-4 text-right"><label>Email: </label></div>
					<?php if($data[0]->email ==null)
						$data[0]->email = '-'; 
					?>
					<div class="col-xs-12 col-md-7 result"><span id="email"><?= $data[0]->email; ?></span></div>
				</div>
				<hr>
				<h4 class="row form-group col-xs-12">Niveles de batería seleccionados</h4>

				<div class="row form-group">
					<div class="col-md-4 text-right"><label>Batería minima: </label></div>
					
					<div class="col-xs-12 col-md-7 result"><span id="email"><?= $data[0]->battery_min; 	?></span></div>
				</div>


				<div class="row form-group">
					<div class="col-md-4 text-right"><label>Batería maxima: </label></div>
					
					<div class="col-xs-12 col-md-7 result"><span id="email"><?= $data[0]->battery_max; 	?></span></div>
				</div>
				<hr>

				<div class="row form-group">
					<div class="col-md-4 text-right"><label>Registros totales: </label></div>
					<div class="col-xs-12 col-md-7 result"><span id="totalLogs">#</span></div>
				</div>
				<div class="row form-group">
					<div class="col-md-4 col-xs-12">
						<button class="btn btn-info btn-block" id="ver">Ver historial</button>
					</div>
					<button class="btn btn-info" id="actualizar">Actualizar</button>
				</div>
			</div>
	</div>
	<div class="col-xs-10  float col-xs-offset-1 col-md-5 col-md-offset-0">
		<div class="row"><div id="gDetalles"></div></div>
	</div>
</section>

<section class="row tableCont" style="margin-left: 5px;">
	<div class="tbDetalles hidden filter">
		<div class="col-md-8 text-right"><label>Filtro de historial: </label></div>
		<div class="col-xs-12 col-md-4">
			<select class="form-control" id="tipo_logs">
				<option value="0">Todo</option>
				<?php foreach ($tipo_logs as $l) { ?>
					<option value="<?= $l->id; ?>"><?= $l->tipo; ?></option>
				<?php } ?>
			</select>
		</div>
	</div>
	<?php 
		$data = (object) array('dataTable' => (object) array(
			'title' 	=> 'Historial',
			'id'		=> 'tbHistorial',
		));
	?>
	<div class="col-xs-12 hidden tbDetalles">
		<?php $this->load->view('Helpers/tabla',$data); ?>
	</div>
</section>
<script src="<?= base_url('assets/js/clientesEstadisticas.js'); ?>"></script>