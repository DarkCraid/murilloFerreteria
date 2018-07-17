
$("#MontoInicialbtn").click(function(){
var errors = [];
    if($("#dineroEnCaja").val()==0)
         errors.push('Es obligatorio ingresar el monton con el que se inicio el dia');
    if(errors.length<=0){
        $("#MontoInicialbtn").hide(500);
        $( "#dineroEnCaja" ).prop( "disabled", true );
        $("#DataAfterMonto").show(500);
        $.ajax({ 
            type: 'POST',   
            url: window.location.origin+'/murilloFerreteria/src/index.php/' + 'Caja/setMontoInicial',   
            data: {
                caja:$("#dineroEnCaja").val(),
                ingreso:1,
                retiro:1,
                empleado:1                
             }
            });
    }


});

$("#addRetiros").click(function(){
    var errors = [];
        if($("#retirosDiarios").val()==0)
        errors.push('Es obligatorio ingresar el retiro que obtuvo este dia');
        $.ajax({ 
            type: 'POST',   
            url: window.location.origin+'/murilloFerreteria/src/index.php/' + 'Caja/setMontoInicial',   
            data: {
                ingreso:$("#retirosDiarios").val(),                  
             }
        });


});
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
