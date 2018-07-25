<style>
	.actions{position: absolute;right: 5px;top: -50px;}
</style>
<div class="row">
	<div class="actions">
		<button class="btn btn-success btn-lg confirmar">CONFIRMAR COMPRA</button>
		<button class="btn btn-danger btn-lg cancelar">CANCELAR COMPRA</button>
	</div>
	
	<div class="col-xs-12">
		<table class="table table-hover">
			<thead>
				<tr>
					<th width="60%">ARTICULO</th>
					<th width="5%">CANTIDAD</th>
					<th class="text-right" width="20%">COSTO UNITARIO</th>
					<th class="text-right" width="15%">RESUMEN $</th>
				</tr>
			</thead>
			<tbody>
				<?php $total = 0; ?>
				<?php foreach ($productos as $p): ?>
					<tr>
						<td><?= $p->articulo; ?></td>
						<td><?= $p->cantidad; ?></td>
						<td class="text-right">$ <?= $p->costo_unitario; ?></td>
						<td class="text-right">$ <?= $p->cantidad*$p->costo_unitario; ?></td>
					</tr>
					<?php $total += $p->cantidad*$p->costo_unitario; ?> 
				<?php endforeach ?>
			</tbody>
		</table>
		<hr>
		<label>Proveedor: </label><span> <?= $proveedor->nombre; ?></span><br>
		<label>Total: </label><span> $ <?= $total; ?></span>
		
	</div>
</div>

<script>
	$('.cancelar').click(function(){
		cleanBotonesModal(false);
		botonesModal=[{ 
		    label: 'NO',
	        cssClass: 'btn-primary',
	        action: function(dialogItself){ dialogItself.close(); }
	    },{ 
		    label: 'SI',
	        cssClass: 'btn-primary',
	        action: function(dialogItself){ 
	        	getAjax('POST','Compras/deleteCompra',{'folio':'<?= $productos[0]->folio_compra ?>'},'DeletedCompra');
	        }
	    }];	
	    var question = "<strong>¿Desea canselar la compra?</strong>";
	    modal('warning','large','ATENCION',question,false);			
	});
	$('.confirmar').click(function(){
		cleanBotonesModal(false);
		botonesModal=[{ 
		    label: 'CANCELAR',
	        cssClass: 'btn-default',
	        action: function(dialogItself){ dialogItself.close(); }
	    },{ 
		    label: 'CONTINUAR',
	        cssClass: 'btn-success',
	        action: function(dialogItself){ 
	        	getAjax('POST','Compras/confirmCompra',{'folio':'<?= $productos[0]->folio_compra ?>'},'compraSuccess');
	        }
	    }];	
		let msg = 'Se añadiran al inventario los nuevos productos y se retirará el pedido <span class="text-primary"><?= $productos[0]->folio_compra ?></span> de la lista actual.';
		modal('warning','large','ATENCION','<strong>'+msg+'</strong>',false);
	});
</script>