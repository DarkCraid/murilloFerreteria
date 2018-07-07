$(document).ready(function(){
	getAjax('POST','Inicio/getView',{'page':'Panel/compras/nuevoPedido'},'view');
});



function result(from,data){
	switch(from){
		case "view":
			$('.full-container').html(data);
			break;
	}
}