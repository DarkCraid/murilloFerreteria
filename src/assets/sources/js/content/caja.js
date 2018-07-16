

$("#calcularMonto").click(function(){
	var errors = [];
	if($("#dineroEnCaja").val()==0)
		 errors.push('Es obligatorio ingresar el monton con el que se inicio el dia');
	if($("#ingresosDiarios").val()==0)
		errors.push('Es obligatorio ingresar el ingreso que obtuvo este dia');
	if($("#retirosDiarios").val()==0)
		errors.push('Es obligatorio ingresar el retiro que obtuvo este dia');	

	  if(errors.length<=0){
	  	$.ajax({ 
        	type: 'POST',   
        	url: window.location.origin+'/murilloFerreteria/src/index.php/' + 'Caja/setCaja',   
        	data: {
        		caja:$("#dineroEnCaja").val(),
        		ingreso:$("#ingresosDiarios").val(),
        		retiro:$("#retirosDiarios").val(),
        		empleado:1
        	}
    		});
	  /*  getAjax('POST','Caja/setCaja',{
	        'caja':$("#dineroEnCaja").val(),
	        'ingreso':$("#ingresosDiarios").val(),
	        'retiro':$("#retirosDiarios").val(),
	        'empleado':1
	    },'asda');*/
	}else{
        cleanBotonesModal(true);
        modal('danger','large','ERROR',getErrors(errors),true);
    }
});

function getErrors(errors){
    let err = '';
    for (var i = 0; i < errors.length; i++) {
        err += '<li>'+errors[i]+'</li>';
    }
    return '<ul>'+err+'</ul>';
}
