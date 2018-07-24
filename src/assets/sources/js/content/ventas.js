var availableTags = {'text':[],'cost':[],'cant':[]};
var clientes = {'name':[],'id':[]};
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
				availableTags.cant.push(0);
				availableTags.cost.push(0);
			$.each(JSON.parse(data),function(i,item){
				availableTags.text.push(item.descripcion);
				availableTags.cost.push(item.costo_unidad);
				availableTags.cant.push(item.cantidad);
			});
			console.log(availableTags);
			break;
		case "clientes":
			$.each(JSON.parse(data),function(i,item){
				clientes.name.push(item.nombre);
				clientes.id.push(item.id);
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
		case "DeletedVenta":
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
	}
}