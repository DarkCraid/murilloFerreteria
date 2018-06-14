$(document).ready(function(){
	$('#InicioPanel').addClass('active').removeClass('menu_none');
	getAjax('POST','Panel/getView',{'page': 'InicioPanel'},"menu");
});

$('#salir').click(function(){
	cleanBotonesModal(false);
	botonesModal.push({ 
	    label: 'Cancelar',
	        cssClass: 'btn-default',
	        action: function(dialogItself){dialogItself.close();}},{ 
	    label: 'Salir',
	        cssClass: 'btn-danger',
	        action: function(dialogItself){
	        	getAjax('POST','Panel/salir',{},null);
	        }
	});
	modal("danger","large",$(this).text(),false,false);
});

$('.menu-l').click(function(){
	$('.menu-l').removeClass('active');
	$(this).addClass('active');	
	getAjax('POST','Panel/getView',{'page': this.id},"menu");
});

function result(from,data){
	switch(from){
		case "menu":
		//alert(data);
			$('.full-container').html(data);
			break;
	}
}