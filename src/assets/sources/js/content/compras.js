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
	}
}