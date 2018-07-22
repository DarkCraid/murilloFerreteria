var availableTags = {'text':[],'cost':[]};
var clientes = [];
var productos = [];

$(document).ready(function(){
	getAjax('POST','Ventas/getProducts',{},'productos');
	getAjax('POST','Ventas/getClientes',{},'clientes');
	getAjax('POST','Ventas/getView',{'page':'nuevaVenta'},'view');
});


 
function result(from,data){
	switch(from){
		case "view":
			$('.full-container').html(data);
			break;
		case "productos":
				availableTags.text.push("");
				availableTags.cost.push(0);
			$.each(JSON.parse(data),function(i,item){
				availableTags.text.push(item.descripcion);
				availableTags.cost.push(item.costo_unidad);
			});
			break;
		case "clientes":
			$.each(JSON.parse(data),function(i,item){
				clientes.push(item.nombre);
			});
			break;





		case "confirmarCompra":
			cleanBotonesModal(false);
			botonesModal=[{ 
			    label: 'Aceptar',
		        cssClass: 'btn-default',
		        action: function(dialogItself){ location.reload(); }
		    }];
			modal('default','large','ATENCION',data,false);
			break;
		case "showPedidosFrom":
			cleanBotonesModal(true);
			modal('default','wide','Detalles',data,false);
			break;
		case "DeletedCompra":
			cleanBotonesModal(false);
        	botonesModal=[{ 
			    label: 'Aceptar',
		        cssClass: 'btn-primary',
		        action: function(dialogItself){ 
		        	getAjax('POST','Ventas/getView',{'page':'listaVentas'},'view'); 
		        	closeAllModals();
		        }
		    }];
			modal('info','large','ATENCION',data,false);	
			break;
		case "nuevoProveedor":
			cleanBotonesModal(true);
			botonesModal.push({ 
		    label: 'Guardar',
		        cssClass: 'btn-success',
		        action: function(dialogItself){ finalizar(); }
		    });
			modal('primary','wide','Nuevo proveedor',data,false);
			break;
		case "setProveedor":
			data = JSON.parse(data);
			cleanBotonesModal(false);
			botonesModal=[{ 
			    label: 'Aceptar',
		        cssClass: 'btn-primary',
		        action: function(dialogItself){ 
		        	if(data.type=="success"){
		        		dropDataCombo('proveedor');
			        	getAjax('POST','Proveedores/getProveedores',{},'getProveedores'); 
			           	closeAllModals();
			           }else{ dialogItself.close(); }
		        }
		    }];
			modal(data.type,'large','ATENCIÓN',data.msg,false);
			break;
		case "getProveedores":
			var op = '<option value="0">- Seleccionar -</option>';
			$.each(JSON.parse(data),function(i,item){
				op = '<option value="'+item.id+'">'+item.nombre+'</option>';
				$('#proveedor').append(op);
			});
			break;
	}
}//$('.full-container').html(data.page);