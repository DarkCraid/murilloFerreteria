<script> $('.opcionMenuOpen').text('Proveedores > Lista de proveedores');</script>
<style>
	
	.row{font-size: 20px;}
</style>
<div class="row">
    <div class="container-fluid">
    	<section class="optionsTop col-xs-12">
            <button class="btn btn-success btn-lg subMenu" id="nuevoProveedor">Agregar nuevo Proveedor</button>
        </section> 
        <section id="content-dinamic">
			<div class="col-xs-12">
				<table class="table table-hover table-striped">
					<thead>
						<tr>
							<th width="60%">NOMBRE</th>
							<th width="40%">DOMICILIO</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($proveedores as $p): ?>
							<tr class="compra" id="<?= $p->id; ?>" style="cursor: pointer;">
								<td><?= $p->nombre; ?></td>
								<td><?= $p->domicilio; ?></td>
							</tr>
						<?php endforeach ?>							
					</tbody>
				</table>
			</div>
		</section>
	</div>
</div>

<script>
 

</script>