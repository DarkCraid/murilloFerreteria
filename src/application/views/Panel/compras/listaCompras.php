<script> $('.opcionMenuOpen').text('Compras > Lista de pedidos');</script>
<style>
	
	.row{font-size: 20px;}
</style>
<div class="row">
    <div class="container-fluid">
    	<section class="optionsTop col-xs-12">
            <button class="btn btn-info btn-lg subMenu" id="nuevoPedido">Nuevo pedido</button>
            <button class="btn btn-info btn-lg subMenu" disabled id="listaCompras">Lista de pedidos pendientes</button>
        </section> 
        <section id="content-dinamic">
			<div class="col-xs-12">
				<table id="listComprasTB" class="table table-hover table-striped">
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
	$(document).ready(function(){
		insertarPaginado('listComprasTB',10);
	});
    $('.subMenu').click(function(){
	    getAjax('POST','Compras/getView',{'page':this.id},'view');
	});
	$('.compra').click(function(){
		getAjax('POST','Compras/getPedidoFrom',{'folio':this.id},'showPedidosFrom');
	});

</script>