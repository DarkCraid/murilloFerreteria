$(document).ready(function(){
	getAjax('POST','Panel/getView',{'page':'Contenidos/thead_chistorialClient'},"theadHisCli");
	
});

$('#ver').click(function(){
	if($(this).text()=="Ver historial"){
		$(this).text('Cerrar historial');
		$('.tbDetalles').removeClass('hidden');
	}
	else{
		$(this).text('Ver historial');
		$('.tbDetalles').addClass('hidden');
	}
});

$('#actualizar').click(function(){
	//whereLoad = '.modal-body';
	//startLoader('.bootstrap-dialog-message');
	getAjax('POST','Panel/getEstadisticas',{
		'page':'Contenidos/estadisticasCliente',
		'id':idR},
	"detallesCliente_update");
});

$('#tipo_logs').change(function(){
	getAjax('POST','Panel/getLogs',{
				'id':idR,
				'type': $(this).val()},
			"contTbHistorial");
});

function setGrafica(baja,alta){
	var data = [];
	data.push({'name':'Baja','y':baja,'color':'#ef6b6b'});
	data.push({'name':'Alta','y':alta,'color':'#39d68c'});
	Gpastel('Batería',data,'Alertas de batería.','gDetalles');
}