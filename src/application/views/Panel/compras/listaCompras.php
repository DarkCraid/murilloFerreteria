<script> $('.opcionMenuOpen').text('Compras > Lista de pedidos');</script>
<style>
	
	.row{font-size: 20px;}
</style>
<div class="row">
    <div class="container-fluid">
    	<section class="optionsTop col-xs-12">
            <button class="btn btn-info btn-lg subMenu" id="nuevoPedido">Nuevo pedido</button>
            <button class="btn btn-info btn-lg subMenu" disabled id="listaCompras">Lista de pedidos</button>
        </section> 
        <section id="content-dinamic">
			<div class="col-xs-12">
				<table class="table table-hover table-striped">
					<thead>
						<tr>
							<th>FOLIO</th>
							<th>FECHA</th>
							<th>NOTA</th>
							<th>TOTAL</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($compras as $c): ?>
							<tr class="compra" id="<?= $c->folio; ?>" style="cursor: pointer;">
								<td><?= $c->folio; ?></td>
								<td><?= str_replace("`","",$c->fecha); ?></td>
								<td><?= $c->nota; ?></td>
								<td>$ <?= $c->total; ?></td>
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
	    getAjax('POST','Compras/getView',{'page':this.id},'view');
	});
	$('.compra').click(function(){
		getAjax('POST','Compras/getPedidoFrom',{'folio':this.id},'showPedidosFrom');
	});

</script>