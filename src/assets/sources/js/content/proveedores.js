$(document).ready(function(){
	getAjax('POST','Proveedores/getView',{'page':'listaProveedores'},'view');
});

function result(from,data){
	switch(from){
		case "view":
			$('.full-container').html(data);
			break;
		case "getPhonesFrom":
			data = JSON.parse(data);
			cleanBotonesModal(true);
			modal('info','large','Telefonos de '+data.proveedor,'<strong>'+data.msg+'</strong>',false);
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
			cleanBotonesModal(true);
			modal(data.type,'large','ATENCIÓN',data.msg,false);
			break;
	}
}