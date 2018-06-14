<?php 
	$data = (object) array('dataTable' => (object) array(
		'title' 	=> 'Clientes utilizando BatteryMatters.',
		'id'		=> 'clientes',
	));
?>
<style>
	.lateralCont{
		padding-top: 5px;
	}
	label{color: #717171;margin-right: 5px;}
	.b-blank{
		background: #FFF;
		border-radius: 4px;
	}
</style>
<section class="row">
	<div class="col-xs-12 col-md-7 cont-table">
		<?php $this->load->view('Helpers/tabla',$data); ?><br>
		<div class="row form-group">
			<div id="Gmin"></div>
		</div>
		<div class="row form-group">
			<div id="Gmax"></div>
		</div>
	</div>
	<div class="col-xs-12 col-md-4 col-md-offset-1 lateralCont">
			<div class="row form-group b-blank">
				<div class="col-xs-12">
					<label>Total de usuarios: </label>
					<strong id="TotalUsers">#</strong>
				</div>
				
			</div>
			<div class="row form-group b-blank">
				<div id="GFaccount"></div>
			</div>

			<div class="row form-group b-blank">
				<h4 class="text-center">Promedio de nivel de batería mínima</h4>
				<div class="col-xs-4 col-xs-offset-4">
					<input type="text" class="form-control text-center form-group" disabled id="lVlmn" value="0">
				</div>	
			</div>

			<div class="row form-group b-blank">
				<h4 class="text-center">Promedio de nivel de batería maxima</h4>
				<div class="col-xs-4 col-xs-offset-4">
					<input type="text" class="form-control text-center form-group" disabled id="lVlmx" value="0">
				</div>	
			</div>

			
			<div class="row form-group"></div>
			<div class="row form-group"></div>
			<div class="row form-group"></div>
	</div>
</section>

<script src="<?= base_url('assets/js/estadisticas.js'); ?>"></script>