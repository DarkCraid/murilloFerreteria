<script> $('.opcionMenuOpen').text('Compras > Lista de pedidos');</script>
<div class="row">
    <div class="container-fluid">
    	<section class="optionsTop col-xs-12">
            <button class="btn btn-info btn-lg subMenu" id="nuevoPedido">Nuevo pedido</button>
            <button class="btn btn-info btn-lg subMenu" disabled id="listaPedidos">Lista de pedidos</button>
        </section> 
        <section id="content-dinamic">
			<div class="col-xs-12">
				<table class="table table-hover table-stripet">
					<thead>
						<tr>
							<th>FOLIO</th>
							<th>FECHA</th>
							<th>TOTAL</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($compras as $c): ?>
							<tr class="cursor-pointer">
								<td><?= $c->folio; ?></td>
								<td><?= str_replace("`","",$c->fecha); ?></td>
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
</script>