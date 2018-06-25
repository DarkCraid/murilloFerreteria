<link rel="stylesheet" href="<?= base_url('assets/css/compras.css'); ?>">

<h1 class="titulo">Compras</h1>

<div class="container containerCompra">
	<form>
			<div class="form-group">
				<label for="productoCompra">Nombre del producto</label>
				<input type="text" class="form-control" name="productoCompra" id="productoCompra">
			</div>
			<div class="form-group">
				<label for="cantidadCompra">Cantidad</label>
				<input type="text" class="form-control" name="cantidadCompra" id="cantidadCompra">
			</div>
			<div class="form-group">
					<label for="nombreProveedorCompras">Cantidad</label>
				<input type="text" class="form-control" name="nombreProveedorCompras" id="nombreProveedorCompras">
			</div>
			<div class="form-group center ">
				<button type="submit" class="btn  btn-lg btn-compra ">Realizar compra</button>
			</div>			
	</form>					

</div>