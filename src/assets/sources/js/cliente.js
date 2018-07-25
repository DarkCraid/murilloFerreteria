let base_url = 'http://localhost/murilloFerreteria/src/index.php/';
$(document).ready(function(){   
pushTable();
});




function openModal(id,param1,param2,param3,param4,param5,param6) 
{
  let fom= '<form class="form-horizontal" action="">'
                    +'<div class="row form-group">'
                      +'<div class="col-sm-4 col-md-3 col-lg-2 text-right">'
                        +'<label for="tipo" class="col-form-label mr-2 control-label" id="label_representanteLegal">Folio: </label>'
                        +'</div>'
                        +'<div class="col-sm-12 col-md-9 col-lg-9">'
                            +'<input type="text" name="representanteLegal" id="folio" class="form-control" value="#Cl-'+id+'" disabled>'
                        +'</div>'
                    +'</div>'
                    +'<div class="row form-group">'
                        +'<div class="col-sm-4 col-md-3 col-lg-2 text-right">'
                            +'<label for="rfc_" class="col-form-label mr-2 control-label">Nombre: </label>'
                        +'</div>'
                        +'<div class="col-md-8 col-lg-3">'
                            +'<input type="text" name="estado" id="nombre" class="form-control" value="'+param2+'" >'
                        +'</div>'
                        +'<div class="col-sm-4 col-md-3 col-lg-3 text-right">'
                            +'<label for="rfc_" class="col-form-label mr-2 control-label">Apellido Paterno: </label>'
                        +'</div>'
                        +'<div class="col-md-8 col-lg-3">'
                           +' <input type="text" name="municipio" id="a_p" class="form-control" value="'+param3+'" >'
                        +'</div>'
                    +'</div>'
                    +'<div class="row form-group">'
                        +'<div class="col-sm-4 col-md-3 col-lg-2 text-right">'
                            +'<label for="tipo" class="col-form-label mr-2 control-label" id="label_ciudad">Apellido Materno: </label>'
                       +' </div>'
                        +'<div class="col-md-8 col-lg-3">'
                           +' <input type="text" name="ciudad" id="a_m" class="form-control" value="'+param4+'" >'
                       +' </div>'
                        +'<div class="col-sm-4 col-md-3 col-lg-3 text-right">'
                           +' <label for="rfc_" class="col-form-label mr-2 control-label">Calle: </label>'
                       +' </div>'
                       +' <div class="col-md-8 col-lg-3">'
                            +'<input type="text" name="telefono" id="calle" class="form-control" value="'+param5+'" >'
                        +'</div>'
                    +'</div>'
          +'<div class="row form-group">'
                        +'<div class="col-sm-4 col-md-3 col-lg-2 text-right">'
                            +'<label for="tipo" class="col-form-label mr-2 control-label" id="label_ciudad">Colonia: </label>'
                       +' </div>'
                        +'<div class="col-md-8 col-lg-3">'
                           +' <input type="text" name="ciudad" id="colonia" class="form-control" value="'+param6+'" >'
                       +' </div>'
                        +'<div class="col-sm-4 col-md-3 col-lg-3 text-right">'
                           +' <label for="rfc_" class="col-form-label mr-2 control-label">Telefono: </label>'
                       +' </div>'
                       +' <div class="col-md-8 col-lg-3">'
                            +'<input type="text" name="telefono" id="telefono" class="form-control" value="'+param1+'" >'
                        +'</div>'
                    +'</div>'
        +'</form>';

    BootstrapDialog.show({
    title: 'Usuario: #Cl-'+id,
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
        'id' :            id,
        'nombre' :        $('#nombre').val(),
        'a_p' :           $('#a_p').val(),
        'a_m' :           $('#a_m').val(),
        'domicilio' :     $('#calle').val()+'↨'+$('#colonia').val(),
        'numero' :        $('#telefono').val(),
        'tipo' :          'Cliente',
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
        url: base_url+'Cliente/drop',
        data:{
        'id' :            id
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
                            +'<label for="rfc_" class="col-form-label mr-2 control-label">Nombre: </label>'
                        +'</div>'
                        +'<div class="col-md-8 col-lg-3">'
                            +'<input type="text" name="estado" id="nombre" class="form-control" placeholder="" >'
                        +'</div>'
                        +'<div class="col-sm-4 col-md-3 col-lg-3 text-right">'
                            +'<label for="rfc_" class="col-form-label mr-2 control-label">Apellido Paterno: </label>'
                        +'</div>'
                        +'<div class="col-md-8 col-lg-3">'
                           +' <input type="text" name="municipio" id="a_p" class="form-control" placeholder="" >'
                        +'</div>'
                    +'</div>'
                    +'<div class="row form-group">'
                        +'<div class="col-sm-4 col-md-3 col-lg-2 text-right">'
                            +'<label for="tipo" class="col-form-label mr-2 control-label" id="label_ciudad">Apellido Materno: </label>'
                       +' </div>'
                        +'<div class="col-md-8 col-lg-3">'
                           +' <input type="text" name="ciudad" id="a_m" class="form-control" placeholder="" >'
                       +' </div>'
                        +'<div class="col-sm-4 col-md-3 col-lg-3 text-right">'
                           +' <label for="rfc_" class="col-form-label mr-2 control-label">Calle: </label>'
                       +' </div>'
                       +' <div class="col-md-8 col-lg-3">'
                            +'<input type="text" name="telefono" id="calle" class="form-control" placeholder="" >'
                        +'</div>'
                    +'</div>'
          +'<div class="row form-group">'
                        +'<div class="col-sm-4 col-md-3 col-lg-2 text-right">'
                            +'<label for="tipo" class="col-form-label mr-2 control-label" id="label_ciudad">Colonia: </label>'
                       +' </div>'
                        +'<div class="col-md-8 col-lg-3">'
                           +' <input type="text" name="ciudad" id="colonia" class="form-control" placeholder="" >'
                       +' </div>'
                        +'<div class="col-sm-4 col-md-3 col-lg-3 text-right">'
                           +' <label for="rfc_" class="col-form-label mr-2 control-label">Telefono: </label>'
                       +' </div>'
                       +' <div class="col-md-8 col-lg-3">'
                            +'<input type="text" name="telefono" id="telefono" class="form-control" placeholder="" >'
                        +'</div>'
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

        $.ajax({
        type:"POST",
        url: base_url+'Cliente/push',
        data:{
        'nombre' :        $('#nombre').val(),
        'a_p' :           $('#a_p').val(),
        'a_m' :           $('#a_m').val(),
        'domicilio' :     $('#calle').val()+'↨'+$('#colonia').val(),
        'numero' :        $('#telefono').val(),
        'tipo' :          'Cliente',
        },
        success:function (data){
         // DropTable();
         // pushTable();
          
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
        url: base_url+'Cliente/get',
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
        +'<td><a onclick="openModal('+item.cliente+',\''+item.telefono+'\',\''+item.nombreModal+'\',\''+item.apellidoP+'\',\''+item.apellidoM+'\',\''+calle+'\',\''+colonia+'\')" style="cursor:pointer;">#Cl-'+item.cliente+'</a></td>'
        +'<td>'+item.fullName+'</td>'
        +'<td>'+item.telefono+'</td>'
        +'<td>'+item.punto+'</td>'
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

$("#filtro1").change(function(event) {
    if ($('#filtro1').val() == '-Seleccionar-')
    {}
    else
    {
        $.ajax({
        type:"POST",
        url: base_url+'Cliente/search',
        data:{
            status: 2,
            data : $('#filtro1').val()
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
        +'<td><a onclick="openModal('+item.cliente+',\''+item.telefono+'\',\''+item.nombreModal+'\',\''+item.apellidoP+'\',\''+item.apellidoM+'\',\''+calle+'\',\''+colonia+'\')" style="cursor:pointer;">#Cl-'+item.cliente+'</a></td>'
        +'<td>'+item.fullName+'</td>'
        +'<td>'+item.telefono+'</td>'
        +'<td>'+item.punto+'</td>'
        +'</tr>');
    });
        },
        error:function(jqXHR, textStatus, errorThrown)
        {alert("Error al guardar la información");}
    });       

    }
});

 $("#filtro2").keyup(function(){
    if ($('#filtro2').val() == '')
    {}
    else
    {
        $.ajax({
        type:"POST",
        url: base_url+'Cliente/search',
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
        +'<td><a onclick="openModal('+item.cliente+',\''+item.telefono+'\',\''+item.nombreModal+'\',\''+item.apellidoP+'\',\''+item.apellidoM+'\',\''+calle+'\',\''+colonia+'\')" style="cursor:pointer;">#Cl-'+item.cliente+'</a></td>'
        +'<td>'+item.fullName+'</td>'
        +'<td>'+item.telefono+'</td>'
        +'<td>'+item.punto+'</td>'
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
        url: base_url+'Cliente/search',
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
        +'<td><a onclick="openModal('+item.cliente+',\''+item.telefono+'\',\''+item.nombreModal+'\',\''+item.apellidoP+'\',\''+item.apellidoM+'\',\''+calle+'\',\''+colonia+'\')" style="cursor:pointer;">#Cl-'+item.cliente+'</a></td>'
        +'<td>'+item.fullName+'</td>'
        +'<td>'+item.telefono+'</td>'
        +'<td>'+item.punto+'</td>'
        +'</tr>');
    });
        },
        error:function(jqXHR, textStatus, errorThrown)
        {alert("Error al guardar la información");}
    });       
 }
});

