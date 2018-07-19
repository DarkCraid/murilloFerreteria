<script> $('.opcionMenuOpen').text('Ventas > Lista de ventas');</script>
<style>
	
	.row{font-size: 20px;}
</style>
<div class="row">
    <div class="container-fluid">
    	<section class="optionsTop col-xs-12">
            <button class="btn btn-info btn-lg subMenu" id="nuevaVenta">Nuevo pedido</button>
            <button class="btn btn-info btn-lg subMenu" disabled id="listaVentas">Lista de pedidos</button>
        </section> 
        <section id="content-dinamic">
			<div class="col-xs-12">
				<table class="table table-hover table-striped">
					<thead>
						<tr>
							<th width="10%">FOLIO</th>
							<th width="70%">NOTA</th>
							<th width="10%" class="text-right">FECHA</th>
							<th width="10%" class="text-right">TOTAL</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($compras as $c): ?>
							<tr class="compra" id="<?= $c->folio; ?>" style="cursor: pointer;">
								<td><?= $c->folio; ?></td>
								<td><?= $c->nota; ?></td>
								<td  class="text-right"><?= str_replace("`","",$c->fecha); ?></td>
								<td  class="text-right">$ <?= $c->total; ?></td>
							</tr>
						<?php endforeach ?>							
					</tbody>
				</table>
			</div>
		</section>
	</div>
</div>

<script>
    $('.subMenu').click(function(){
	    getAjax('POST','Ventas/getView',{'page':this.id},'view');
	});
	$('.compra').click(function(){
		getAjax('POST','Ventas/getPedidoFrom',{'folio':this.id},'showPedidosFrom');
	});

</script>