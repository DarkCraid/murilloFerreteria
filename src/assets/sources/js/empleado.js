let base_url = 'http://localhost/murilloFerreteria/src/index.php/';
$(document).ready(function(){   
pushTable();
});



function openModal(empleado,user,param1,param2,param3,param4,param5,param6,param7,param8) 
{

 let fom= '<form class="form-horizontal" action="">'



  +'<div class="row form-group">'
                      +'<div class="col-sm-4 col-md-3 col-lg-2 text-right">'
                        +'<label for="tipo" class="col-form-label mr-2 control-label" id="label_representanteLegal">Folio: </label>'
                        +'</div>'
                        +'<div class="col-sm-12 col-md-9 col-lg-9">'
                            +'<input type="text" name="representanteLegal" id="representanteLegal" class="form-control" value="#Em-'+empleado+'" disabled>'
                        +'</div>'
                    +'</div>'



                    +'<div class="row form-group">'
                        +'<div class="col-sm-4 col-md-3 col-lg-2 text-right">'
                            +'<label class="col-form-label mr-2 control-label">Nombre: </label>'
                        +'</div>'
                        +'<div class="col-md-8 col-lg-3">'
                            +'<input type="text" id="nombre" class="form-control" value="'+param2+'" >'
                        +'</div>'
                        +'<div class="col-sm-4 col-md-3 col-lg-3 text-right">'
                            +'<label class="col-form-label mr-2 control-label">Apellido Paterno: </label>'
                        +'</div>'
                        +'<div class="col-md-8 col-lg-3">'
                           +' <input type="text" id="a_p" class="form-control" value="'+param3+'" >'
                        +'</div>'
                    +'</div>'

                    +'<div class="row form-group">'
                        +'<div class="col-sm-4 col-md-3 col-lg-2 text-right">'
                            +'<label class="col-form-label mr-2 control-label" id="label_ciudad">Apellido Materno: </label>'
                       +' </div>'
                        +'<div class="col-md-8 col-lg-3">'
                           +' <input type="text" id="a_m" class="form-control" value="'+param4+'" >'
                       +' </div>'
                        +'<div class="col-sm-4 col-md-3 col-lg-3 text-right">'
                           +' <label class="col-form-label mr-2 control-label">Calle: </label>'
                       +' </div>'
                       +' <div class="col-md-8 col-lg-3">'
                            +'<input type="text" id="calle" class="form-control" value="'+param5+'" >'
                        +'</div>'
                    +'</div>'

                    +'<div class="row form-group">'
                        +'<div class="col-sm-4 col-md-3 col-lg-2 text-right">'
                            +'<label class="col-form-label mr-2 control-label" id="label_ciudad">Colonia: </label>'
                       +' </div>'
                        +'<div class="col-md-8 col-lg-3">'
                           +' <input type="text" name="ciudad" id="colonia" class="form-control" value="'+param6+'" >'
                       +' </div>'
                        +'<div class="col-sm-4 col-md-3 col-lg-3 text-right">'
                           +' <label class="col-form-label mr-2 control-label">Telefono: </label>'
                       +' </div>'
                       +' <div class="col-md-8 col-lg-3">'
                            +'<input type="text" name="telefono" id="telefono" class="form-control" value="'+param1+'" >'
                        +'</div>'
                    +'</div>'

                    +'<div class="row form-group">'
                        +'<div class="col-sm-4 col-md-3 col-lg-2 text-right">'
                            +'<label class="col-form-label mr-2 control-label" id="label_ciudad">Usuario: </label>'
                       +' </div>'
                        +'<div class="col-md-8 col-lg-3">'
                           +' <input type="text" name="ciudad" id="usuario" class="form-control" value="'+param7+'">'
                       +' </div>'
                        +'<div class="col-sm-4 col-md-3 col-lg-3 text-right">'
                           +' <label class="col-form-label mr-2 control-label">Tipo de cuenta: </label>'
                       +' </div>'
                       +' <div class="col-md-8 col-lg-3">'
                            +'<select id="tipoUser" name="tipoUser">'
                              +'<option value="usuario">usuario</option>'
                              +'<option value="administrador">administrador</option>'
                            +'</select>'
                        +'</div>'
                    +'</div>'

                    +'<div class="row form-group">'
                        +'<div class="col-sm-4 col-md-3 col-lg-2 text-right">'
                            +'<label class="col-form-label mr-2 control-label" id="label_ciudad">Contraseña: </label>'
                       +' </div>'
                        +'<div class="col-md-8 col-lg-3">'
                           +' <input type="text" id="contrasenia" class="form-control" placeholder="" >'
                       +' </div>'
                        +'<div class="col-sm-4 col-md-3 col-lg-3 text-right">'
                           +' <label class="col-form-label mr-2 control-label">Repetir Contraseña: </label>'
                       +' </div>'
                       +' <div class="col-md-8 col-lg-3">'
                            +'<input type="text"  id="repContrasenia" class="form-control" placeholder="" >'
                        +'</div>'
                    +'</div>'


                    +'<div class="row form-group">'
                        +'<div class="col-sm-4 col-md-3 col-lg-2 text-right">'
                            +'<label class="col-form-label mr-2 control-label" id="label_ciudad">Correo: </label>'
                       +' </div>'
                        +'<div class="col-md-8 col-lg-3">'
                           +' <input type="text" id="correo" class="form-control" value="'+param8+'" >'
                       +' </div>'
                    +'</div>'






        +'</form>';

    BootstrapDialog.show({
    title: '#Em-'+empleado,
    message: $(fom),
    buttons: [{
        label: 'Modificar',
        cssClass: 'btn-success',
        action: function(dialogItself)
        {

        $.ajax({
        type:"POST",
        url: base_url+'Cliente/update',
        data:{
        'id' :            empleado,
        'nombre' :        $('#nombre').val(),
        'a_p' :           $('#a_p').val(),
        'a_m' :           $('#a_m').val(),
        'domicilio' :     $('#calle').val()+'↨'+$('#colonia').val(),
        'numero' :        $('#telefono').val(),
        'tipo' :          $('#telefono').val(),
        'usuario' :       $('#telefono').val(),
        'correo' :        $('#telefono').val(),
        'contrasena' :    $('#telefono').val(),
        },
        success:function (data){

          BootstrapDialog.show({
    title: 'Mensage',
    message: $(data),
    buttons: [{
        label: 'Aceptar',
        cssClass: 'btn-success',
        action: function(dialogItself)
        {dialogItself.close();}
        }]
    });
          
        },
        error:function(jqXHR, textStatus, errorThrown)
        {alert("Error al guardar la información");}
    });
        dialogItself.close();
        }
        },
        {
            label: 'Eliminar',
            cssClass: 'btn-danger',
            action: function(dialogItself)
            {
                $.ajax({
        type:"POST",
        url: base_url+'Empleado/drop',
        data:{
        'idE' :            empleado,
        'idU' :            user
        },
        success:function (data){

          BootstrapDialog.show({
    title: 'Mensage',
    message: $(data),
    buttons: [{
        label: 'Aceptar',
        cssClass: 'btn-success',
        action: function(dialogItself)
        {dialogItself.close();}
        }]
    });
          
        },
        error:function(jqXHR, textStatus, errorThrown)
        {alert("Error al guardar la información");}
    });
        dialogItself.close();
            }
        },
        {
            label: 'Cerrar',
            cssClass: 'btn-primary',
            action: function(dialogItself)
            {
                dialogItself.close();
            }
        }]
    });
}




$('#Agregar').click(function(event) {
   
 let fom= '<form class="form-horizontal" action="">'

                    +'<div class="row form-group">'
                        +'<div class="col-sm-4 col-md-3 col-lg-2 text-right">'
                            +'<label class="col-form-label mr-2 control-label">Nombre: </label>'
                        +'</div>'
                        +'<div class="col-md-8 col-lg-3">'
                            +'<input type="text" id="nombre" class="form-control" placeholder="" >'
                        +'</div>'
                        +'<div class="col-sm-4 col-md-3 col-lg-3 text-right">'
                            +'<label class="col-form-label mr-2 control-label">Apellido Paterno: </label>'
                        +'</div>'
                        +'<div class="col-md-8 col-lg-3">'
                           +' <input type="text" id="a_p" class="form-control" placeholder="" >'
                        +'</div>'
                    +'</div>'

                    +'<div class="row form-group">'
                        +'<div class="col-sm-4 col-md-3 col-lg-2 text-right">'
                            +'<label class="col-form-label mr-2 control-label" id="label_ciudad">Apellido Materno: </label>'
                       +' </div>'
                        +'<div class="col-md-8 col-lg-3">'
                           +' <input type="text" id="a_m" class="form-control" placeholder="" >'
                       +' </div>'
                        +'<div class="col-sm-4 col-md-3 col-lg-3 text-right">'
                           +' <label class="col-form-label mr-2 control-label">Calle: </label>'
                       +' </div>'
                       +' <div class="col-md-8 col-lg-3">'
                            +'<input type="text" id="calle" class="form-control" placeholder="" >'
                        +'</div>'
                    +'</div>'

                    +'<div class="row form-group">'
                        +'<div class="col-sm-4 col-md-3 col-lg-2 text-right">'
                            +'<label class="col-form-label mr-2 control-label" id="label_ciudad">Colonia: </label>'
                       +' </div>'
                        +'<div class="col-md-8 col-lg-3">'
                           +' <input type="text" name="ciudad" id="colonia" class="form-control" placeholder="" >'
                       +' </div>'
                        +'<div class="col-sm-4 col-md-3 col-lg-3 text-right">'
                           +' <label class="col-form-label mr-2 control-label">Telefono: </label>'
                       +' </div>'
                       +' <div class="col-md-8 col-lg-3">'
                            +'<input type="text" name="telefono" id="telefono" class="form-control" placeholder="" >'
                        +'</div>'
                    +'</div>'

                    +'<div class="row form-group">'
                        +'<div class="col-sm-4 col-md-3 col-lg-2 text-right">'
                            +'<label class="col-form-label mr-2 control-label" id="label_ciudad">Usuario: </label>'
                       +' </div>'
                        +'<div class="col-md-8 col-lg-3">'
                           +' <input type="text" name="ciudad" id="usuario" class="form-control" placeholder="" >'
                       +' </div>'
                        +'<div class="col-sm-4 col-md-3 col-lg-3 text-right">'
                           +' <label class="col-form-label mr-2 control-label">Tipo de cuenta: </label>'
                       +' </div>'
                       +' <div class="col-md-8 col-lg-3">'
                            +'<select id="tipoUser" name="tipoUser">'
                              +'<option value="usuario">usuario</option>'
                              +'<option value="administrador">administrador</option>'
                            +'</select>'
                        +'</div>'
                    +'</div>'

                    +'<div class="row form-group">'
                        +'<div class="col-sm-4 col-md-3 col-lg-2 text-right">'
                            +'<label class="col-form-label mr-2 control-label" id="label_ciudad">Contraseña: </label>'
                       +' </div>'
                        +'<div class="col-md-8 col-lg-3">'
                           +' <input type="text" id="contrasenia" class="form-control" placeholder="" >'
                       +' </div>'
                        +'<div class="col-sm-4 col-md-3 col-lg-3 text-right">'
                           +' <label class="col-form-label mr-2 control-label">Repetir Contraseña: </label>'
                       +' </div>'
                       +' <div class="col-md-8 col-lg-3">'
                            +'<input type="text"  id="repContrasenia" class="form-control" placeholder="" >'
                        +'</div>'
                    +'</div>'


                    +'<div class="row form-group">'
                        +'<div class="col-sm-4 col-md-3 col-lg-2 text-right">'
                            +'<label class="col-form-label mr-2 control-label" id="label_ciudad">Correo: </label>'
                       +' </div>'
                        +'<div class="col-md-8 col-lg-3">'
                           +' <input type="text" id="correo" class="form-control" placeholder="" >'
                       +' </div>'
                    +'</div>'






        +'</form>';

    BootstrapDialog.show({
    title: 'Nuevo Registro',
    message: $(fom),
    buttons: [{
        label: 'Agregar',
        cssClass: 'btn-success',
        action: function(dialogItself)
        {
            if ($('#contrasenia').val() == $('#repContrasenia').val()) 
            {
                $.ajax({
                    type:"POST",
                    url: base_url+'Empleado/push',
                    data:{
                    'nombre' :        $('#nombre').val(),
                    'a_p' :           $('#a_p').val(),
                    'a_m' :           $('#a_m').val(),
                    'domicilio' :     $('#calle').val()+'↨'+$('#colonia').val(),
                    'numero' :        $('#telefono').val(),
                    'tipo' :          $('#tipoUser').val(),
                    'usuario' :       $('#usuario').val(),
                    'correo' :        $('#correo').val(),
                    'contrasena' :    $('#contrasenia').val(),
                    },
                    success:function (data){

                      BootstrapDialog.show({
                title: 'Mensage',
                message: $(data),
                buttons: [{
                    label: 'Aceptar',
                    cssClass: 'btn-success',
                    action: function(dialogItself)
                    {dialogItself.close();}
                    }]
                });
                      
                    },
                    error:function(jqXHR, textStatus, errorThrown)
                    {alert("Error al guardar la información");}
                });
                    dialogItself.close();

            }
            else 
            {alert("no coinciden las contraseñas");}



        }
        },
        {
            label: 'Cerrar',
            cssClass: 'btn-danger',
            action: function(dialogItself)
            {dialogItself.close();}
        }]
    });


});

function pushTable() 
{
   $.ajax({
        type:"POST",
        url: base_url+'Empleado/get',
        data:{},
        success:function (data)
        {
            var c = JSON.parse(data);
    var estatus="";
    $.each(c,function(i,item)
    {
        let arr = item.fullDomicilio.split("↨");
        let calle = arr[0];
        let colonia = arr[1];

        $('#contenido_tabla').append('<tr>'
        +'<td><a onclick="openModal('+item.empleado+','+item.user+',\''+item.telefono+'\',\''+item.nombreModal+'\',\''+item.apellidoP+'\',\''+item.apellidoM+'\',\''+calle+'\',\''+colonia+'\',\''+item.nameUser+'\',\''+item.correo+'\')" style="cursor:pointer;">#Em-'+item.empleado+'</a></td>'
        +'<td>'+item.fullName+'</td>'
        +'<td>'+item.telefono+'</td>'
        +'<td>'+item.tipoC+'</td>'
        +'</tr>');
    });
        },
        error:function(jqXHR, textStatus, errorThrown)
        {alert("Error al guardar la información");}
    });
}

function DropTable() 
{
    var oTable = $('#Exportar_a_Excel').dataTable(); 
    oTable.fnDestroy(); 
    $("#contenido_tabla tr").remove();
}



 $("#filtro2").keyup(function(){
    if ($('#filtro2').val() == '')
    {}
    else
    {
        $.ajax({
        type:"POST",
        url: base_url+'Empleado/search',
        data:{
            status: 2,
            data : $('#filtro2').val()
        },
        success:function (data)
        {
            DropTable();
            var c = JSON.parse(data);
    var estatus="";
    $.each(c,function(i,item)
    {
        let arr = item.fullDomicilio.split("↨");
        let calle = arr[0];
        let colonia = arr[1];

        $('#contenido_tabla').append('<tr>'
        +'<td><a onclick="openModal('+item.empleado+','+item.user+',\''+item.telefono+'\',\''+item.nombreModal+'\',\''+item.apellidoP+'\',\''+item.apellidoM+'\',\''+calle+'\',\''+colonia+'\',\''+item.nameUser+'\',\''+item.correo+'\')" style="cursor:pointer;">#Em-'+item.empleado+'</a></td>'
        +'<td>'+item.fullName+'</td>'
        +'<td>'+item.telefono+'</td>'
        +'<td>'+item.tipoC+'</td>'
        +'</tr>');
    });
        },
        error:function(jqXHR, textStatus, errorThrown)
        {alert("Error al guardar la información");}
    });       

    }

       
    });


$("#filtro3").keyup(function(){
    if ($('#filtro3').val() == '')
    {}
    else
    {
     $.ajax({
        type:"POST",
        url: base_url+'Empleado/search',
        data:{
            status: 3,
            data : $('#filtro3').val()
        },
        success:function (data)
        {
            DropTable();
            var c = JSON.parse(data);
    var estatus="";
    $.each(c,function(i,item)
    {
        let arr = item.fullDomicilio.split("↨");
        let calle = arr[0];
        let colonia = arr[1];

        $('#contenido_tabla').append('<tr>'
        +'<td><a onclick="openModal('+item.empleado+','+item.user+',\''+item.telefono+'\',\''+item.nombreModal+'\',\''+item.apellidoP+'\',\''+item.apellidoM+'\',\''+calle+'\',\''+colonia+'\',\''+item.nameUser+'\',\''+item.correo+'\')" style="cursor:pointer;">#Em-'+item.empleado+'</a></td>'
        +'<td>'+item.fullName+'</td>'
        +'<td>'+item.telefono+'</td>'
        +'<td>'+item.tipoC+'</td>'
        +'</tr>');
    });
        },
        error:function(jqXHR, textStatus, errorThrown)
        {alert("Error al guardar la información");}
    });       
 }
});