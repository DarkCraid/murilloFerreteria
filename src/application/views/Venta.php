<?php $this->load->view('Helpers/Header');?>
<?php $this->load->view('Helpers/AsideLeft');?>

  
<link rel="stylesheet" href="<?= base_url('assets/sources/css/global.css'); ?>">



<div class="content-wrapper" style="background: white;">
    <section class="content">


	<h1 class="titulo">Ventas</h1>
	<div class="container containerGeneral">
		<form>
			<div class="form-group">
				<label for="productoVenta">Nombre del producto</label>
				<input type="text" class="form-control" name="productoVenta" id="productoVenta">
			</div>
			<div class="form-group">
				<label for="cantidadVenta">Cantidad</label>
				<input type="text" class="form-control" name="cantidadVenta" id="cantidadVenta">
			</div>
			<div class="form-group">
				<label for="nombreEmpleado">Nombre del empleado que realiza la venta</label>
				<input type="text" class="form-control" name="nombreEmpleado" id="nombreEmpleado">
			</div>
			<div class="form-group">
				<label for="clienteFrecuente">Cliente frecuente</label>
				  	<select class="form-control" id="clienteFrecuente">
				      	<option value="0">Si</option>
				      	<option value="1">No</option>
    				</select>
			</div>
			<div class="form-group">
				<label for="cliente">Cliente</label>
				  	<select class="form-control" id="cliente">
				      	<option>Omar Pérez</option>
				      	<option>Jorge Flores</option>
				      	<option>Itzel Verdugo</option>
    				</select>
			</div>
			<div class="form-group center ">
				<button type="submit" class="btn  btn-lg btn-general ">Realizar compra</button>
			</div>	
		</form>
	</div>
     

    </section>
</div>






<?php $this->load->view('Helpers/AsideRight');?>
<?php $this->load->view('Helpers/Footer');?>








