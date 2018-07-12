var availableTags = {'text':[],'cost':[]};

$(document).ready(function(){
	getAjax('POST','Proveedores/getView',{'page':'listaProveedores'},'view');
});

function result(from,data){
	switch(from){
		case "view":
			$('.full-container').html(data);
			break;
	}
}