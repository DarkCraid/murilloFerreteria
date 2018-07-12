var availableTags = {'text':[],'cost':[]};

$(document).ready(function(){
	getAjax('POST','Compras/getProducts',{},'productos');
	getAjax('POST','Compras/getView',{'page':'nuevoPedido'},'view');
});



function result(from,data){
	switch(from){
		case "view":
			$('.full-container').html(data);
			break;
		case "productos":
			$.each(JSON.parse(data),function(i,item){
				availableTags.text.push(item.descripcion);
				availableTags.cost.push(item.costo_unidad);
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
			    label: 'NO',
		        cssClass: 'btn-primary',
		        action: function(dialogItself){ dialogItself.close(); }
		    },{ 
			    label: 'SI',
		        cssClass: 'btn-primary',
		        action: function(dialogItself){ 
		        	cleanBotonesModal(false);
		        	botonesModal=[{ 
					    label: 'Aceptar',
				        cssClass: 'btn-primary',
				        action: function(dialogItself){ 
				        	getAjax('POST','Compras/getView',{'page':'listaCompras'},'view'); 
				        	closeAllModals();
				        }
				    }];
					modal('info','large','ATENCION',data,false);
		        }
		    }];	
		    var question = "<strong>¿Desea canselar la compra?</strong>";
		    modal('warning','large','ATENCION',question,false);		
			break;
	}
}//$('.full-container').html(data.page);