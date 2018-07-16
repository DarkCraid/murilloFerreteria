<script> $('.opcionMenuOpen').text('Proveedores > Lista de proveedores');</script>
<style>
	
	.row{font-size: 20px;}
	.btn,.eliminarTD{position: relative;z-index: 1000;}
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
							<th width="20%">TELEFONO</th>
							<th width="20%">ACCIONES</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($proveedores as $p): ?>
							<tr class="proveedores" id="<?= $p->id; ?>" style="cursor: pointer;">
								<td class="nombreP"><?= $p->nombre; ?></td>
								<td>
									<?= $p->numero; ?>
									<a class="verTel" data-toggle="tooltip" data-placement="top" title="Ver todos"><i class="fa fa-lg fa-eye"></i></a>
								</td>
								<td class="eliminarTD">
									<button class=" btn btn-primary btn-lg editar">Editar</button>
									<button class=" btn btn-danger btn-lg eliminar">Eliminar</button>
								</td>
							</tr>
						<?php endforeach ?>							
					</tbody>
				</table>
			</div>
		</section>
	</div>
</div>

<script>
 	$('.eliminar').click(function(){
 		cleanBotonesModal(false);
 		let id = $(this).parent('td').parent('tr').attr('id');
		botonesModal=[{ 
		    label: 'Cancelar',
	        cssClass: 'btn-default',
	        action: function(dialogItself){ dialogItself.close(); }
	    },{ 
		    label: 'Eliminar',
	        cssClass: 'btn-danger',
	        action: function(dialogItself){ 
	        	getAjax('POST','Proveedores/deleteProveedor',{'id':id},'deleteProveedor');
	        }
	    }];
	    var question = '<strong>¿Desea eliminar al proveedor '+$('#'+id).children('.nombreP').text()+'?</strong>';
		modal('warning','large','ATENCIÓN',question,false);
 	});

 	$('.editar').click(function(){
 		getAjax('POST','Proveedores/getView',{
 			'page': 'nuevoProveedor',
 			'id': $(this).parent('td').parent('tr').attr('id')
 		},'nuevoProveedor');
 	});
 	$('.verTel').click(function(){
 		getAjax('POST','Proveedores/getPhonesFrom',{
 			'id': $(this).parent('td').parent('tr').attr('id')
 		},'getPhonesFrom');
 	});
 	$('.proveedores').dblclick(function(){
 		alert('proveedor '+this.id);
 	});
 	$('#nuevoProveedor').click(function(){
 		getAjax('POST','Proveedores/getView',{'page':'nuevoProveedor'},'nuevoProveedor');
 	});

</script>