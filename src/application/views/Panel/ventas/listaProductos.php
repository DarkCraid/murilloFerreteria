<style>
	.cancelar{position: absolute;right: 5px;top: -50px;}
</style>
<div class="row">
	<button class="btn btn-danger btn-lg cancelar">CANCELAR VENTA</button>
	<div class="col-xs-12">
		<table id="listaCont" class="table table-hover">
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
	        	getAjax('POST','Ventas/deleteVenta',{'folio':'<?= $productos[0]->folio_venta ?>'},'DeletedVenta');
	        }
	    }];	
	    var question = "<strong>¿Desea canselar la venta?</strong>";
	    modal('warning','large','ATENCION',question,false);			
	});
</script>