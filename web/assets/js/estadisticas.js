var idR = null;
$(document).ready(function(){
	getAjax('POST','Panel/getView',{'page':'Contenidos/thead_clientes'},"theadClientes");
});

function result(from,data){
	switch(from){
		case "clientesTabla":
			data = JSON.parse(data);
			cGoogle = 0;
			if(data.type != "error"){
				var min = [0,0,0,0];
				var max = [0,0,0,0];
				$.each(JSON.parse(data.msg),function(i,item){ 
					if(item.battery_min>=0 && item.battery_min<=20)
						min[0]++;
					else if(item.battery_min>=21 && item.battery_min<=40)
						min[1]++;
					else if(item.battery_min>=41 && item.battery_min<=60)
						min[2]++;
					else if(item.battery_min>=61 && item.battery_min<=80)
						min[3]++;

					if(item.battery_max>=20 && item.battery_max<=40)
						max[0]++;
					else if(item.battery_max>=41 && item.battery_max<=60)
						max[1]++;
					else if(item.battery_max>=61 && item.battery_max<=80)
						max[2]++;
					else if(item.battery_max>=81 && item.battery_max<=100)
						max[3]++;
					var cont 	= 	'<tr id="'+item.id+'" onclick="clickTBrow(this.id)"><td>'+item.nombre+'</td>';
						if(item.email)
							cont 	+=	'<td>'+item.email+'</td></tr>';
						else
							cont 	+=	'<td>-</td></tr>';
		            $('#clientes').children('tbody').append(cont);
		            if(item.tipo_cuenta == 1)
		            	cGoogle++;
		            $('#lVlmn').val((parseInt($('#lVlmn').val()))+parseInt(item.battery_min));
		            $('#lVlmx').val((parseInt($('#lVlmx').val()))+parseInt(item.battery_max));
		        });
		        $('#TotalUsers').text($('#clientes >tbody >tr').length);
		        data = [{
			        	'name':'FACEBOOK',
			        	'y':(parseInt($('#TotalUsers').text()) - cGoogle),
			        	'color':'#4267b2'
			        	},
		        		{'name':'GOOGLE',
		        		'y':cGoogle,
		        		'color':'#dd5347'
		        }];
				Gpastel('Cuenta/s',data,'Tipo de cuentas','GFaccount');
				$('#lVlmn').val((parseInt($('#lVlmn').val())) / parseInt($('#TotalUsers').text()));
				$('#lVlmn').val(parseFloat($('#lVlmn').val()).toFixed(2)+' %');
		        $('#lVlmx').val((parseInt($('#lVlmx').val())) / parseInt($('#TotalUsers').text()));
		        $('#lVlmx').val(parseFloat($('#lVlmx').val()).toFixed(2)+' %');
		        insertarPaginado('clientes');
		        config = [{
		        	id: 'Gmin',
		        	title:'Tendencias de configuración de batería.',
		        	subtitle: 'cantidad de usuarios que tienden a porcentajes de batería mínima',
		        	color:'#b1942d'
		    	}];
		    	data = [{
		    		categories:['0 - 20%', '21 - 40%','41 - 60%', '61 - 80%'],
		    		data:min
		    	}]
		        GbarrasH(config,data);
		        config = [{
		        	id: 'Gmax',
		        	title:'Tendencias de configuración de batería.',
		        	subtitle: 'cantidad de usuarios que tienden a porcentajes de batería maxima',
		        	color:'#558269'
		    	}];
		    	data = [{
		    		categories:['20 - 40%', '41 - 60%','61 - 80%', '81 - 100%'],
		    		data:max
		    	}]
		        GbarrasH(config,data);
			}
			break;

		case "theadClientes":
			$('#clientes').children('thead').append(data);
			getAjax('POST','Panel/getClientes',{},"clientesTabla");
			break;

		case "detallesCliente":
			cleanBotonesModal(true);
			var title = 'estadisticas:\t\t'+$('#'+idR).children('td:first').text();
			modal('primary','wide',title,data,true);
			break;

		case "detallesCliente_update":
			//stopLoader();
			$('.modal-body').html(data);
			break;

		case "theadHisCli":
			$('#tbHistorial').children('thead').append(data);
			getAjax('POST','Panel/getLogs',{
				'id':idR,
				'type': 0},
			"contTbHistorial");
			break;

		case "contTbHistorial":
			dropDataTable('tbHistorial');
			data = JSON.parse(data);
			var alta = 0;
			var baja = 0;
			var cant = 0;
			$.each(JSON.parse(data.msg),function(i,item){ 
				item.fecha = new Date(item.fecha);
				item.fecha = '<div class="col-xs-12 text-right"><div class="col-md-6 col-xs-12"><strong>'+timeFormat(item.fecha.getHours())+':'+timeFormat(item.fecha.getMinutes())+':'+timeFormat(item.fecha.getSeconds())+'</strong>'+
				'</div><div class="col-md-5 col-xs-12"><span>'+timeFormat(item.fecha.getDate())+' '+item.fecha.toLocaleString('es-mx', {month: "short"})+' '+item.fecha.getFullYear()+'</span></div></div>';
				var cont 	= 	'<tr id="hc_'+item.id_user+'"><td>'+item.tipo+'</td>';
					cont 	+=	'<td>'+item.descripcion+'</td>';
					cont 	+=	'<td class="text-center">'+item.nivel_bateria+' %</td>';
					cont 	+=	'<td>'+item.fecha+'</td></tr>';
				cant++;
		        $('#tbHistorial').children('tbody').append(cont);
		        if(item.tipLogId==1)
		        	baja++;
		        else if(item.tipLogId==2)
		        	alta++;
		    });

		    if(baja>0 && $('#totalLogs').text()=="#" ||alta>0 && $('#totalLogs').text()=="#"){
		    	$('#totalLogs').text(cant);
		    	setGrafica(baja,alta);

		    }else if($('#totalLogs').text()=="#"){
		    	$('#gDetalles').addClass('notFountAlerts');
		    	$('#gDetalles').append('<strong>No hay registros de alertas de batería baja o alta.</strong>');
		    	$('.btn-block').attr('disabled',true);
		    }
		    insertarPaginado('tbHistorial');
			break;

		case "menu":
			$('.full-container').html(data);
			break;
	}
}

function clickTBrow(id){
	idR = id;
	getAjax('POST','Panel/getEstadisticas',{
		'page':'Contenidos/estadisticasCliente',
		'id':id},
	"detallesCliente");
	
}