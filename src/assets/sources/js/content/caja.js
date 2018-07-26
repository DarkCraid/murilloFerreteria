$(document).ready(function(){

    if ($("#dineroEnCaja").val()!=0) {
        $("#MontoInicialbtn").hide(500);
        $( "#dineroEnCaja" ).prop( "disabled", true );
        $("#DataAfterMonto").show(500);
    }   
    $.ajax({ 
            type: 'POST',   
            url: window.location.origin+'/murilloFerreteria/src/index.php/' + 'Caja/getUser',   
            data: {
                session:""
            },
            success: function(data){
                OnAdmin(data);      
            }      
        });

});
$('input').keypress(function(event){
    return validCaracteres(event,this.id);
});
$("#MontoInicialbtn").click(function(){
    var errors = [];
    var success =[];
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
             },
            success: function(data){
               $("#retirosDiarios").val("0");
                $("#ingresosDiarios").val("0");
               success.push("Datos agregados Exitosamente");
               modal('success','large','Caja a sido agregada!',getErrors(success),true);
             }              
            });
    }


});

$("#UpdateMontoInicial").click(function(){
       $.ajax({ 
            type: 'POST',   
            url: window.location.origin+'/murilloFerreteria/src/index.php/' + 'Caja/UpdateMontoInicial',   
            data: {
                caja:$("#dineroEnCaja").val(),                  
             },
            success: function(data){
               success.push("nuevo retiro a sido agregado");
               modal('success','large','Nuevo retiro!',getErrors(success),true);
             } 
        }); 

});

$("#addRetiros").click(function(){
    var errors = [];
    var success =[];
        if($("#retirosDiarios").val()==0)
        errors.push('Es obligatorio ingresar el retiro que obtuvo este dia');
        $.ajax({ 
            type: 'POST',   
            url: window.location.origin+'/murilloFerreteria/src/index.php/' + 'Caja/setNewRetiro',   
            data: {
                ingreso:$("#retirosDiarios").val(),                  
             },
            success: function(data){
               $("#retirosDiarios").val("0");
               success.push("nuevo retiro a sido agregado");
               modal('success','large','Nuevo retiro!',getErrors(success),true);
             } 
        });


});
$("#calcularMonto").click(function(){
	var errors = [];
    var success =[];
	  if(errors.length<=0){
	  	$.ajax({ 
        	type: 'POST',   
        	url: window.location.origin+'/murilloFerreteria/src/index.php/' + 'Caja/setCaja',   
        	data: {
        		ingreso:$("#ingresosDiarios").val()
        	},
            success: function(data){
                $("#retirosDiarios").val("0");
                $("#ingresosDiarios").val("0");
                $("#dineroEnCaja").val("0");
                $("#MontoInicialbtn").show(500);
                $( "#dineroEnCaja" ).prop( "disabled", false );
                $("#DataAfterMonto").hide(500);
               success.push("Corte del dia elaborado exitosamente!");
               modal('success','large','Fin del dia!',getErrors(success),true);
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
function OnAdmin(data){
    if (data=='"Administrador"') {
        $( "#dineroEnCaja" ).prop( "disabled", false );
    }      
}  
