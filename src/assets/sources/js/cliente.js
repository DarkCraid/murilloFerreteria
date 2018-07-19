let base_url = 'http://localhost/murilloFerreteria/src/index.php/';
$(document).ready(function(){   
pushTable();
});




function openModal(id) 
{
   let fom= '<form class="form-horizontal" action="">'
                    +'<div class="row form-group">'
                      +'<div class="col-sm-4 col-md-3 col-lg-2 text-right">'
                        +'<label for="tipo" class="col-form-label mr-2 control-label" id="label_representanteLegal">Folio: </label>'
                        +'</div>'
                        +'<div class="col-sm-12 col-md-9 col-lg-9">'
                            +'<input type="text" name="representanteLegal" id="representanteLegal" class="form-control" value="F0001" disabled>'
                        +'</div>'
                    +'</div>'
                    +'<div class="row form-group">'
                        +'<div class="col-sm-4 col-md-3 col-lg-2 text-right">'
                            +'<label for="rfc_" class="col-form-label mr-2 control-label">Nombres(s): </label>'
                        +'</div>'
                        +'<div class="col-md-8 col-lg-3">'
                            +'<input type="text" name="estado" id="estado" class="form-control" value="Zero" >'
                        +'</div>'
                        +'<div class="col-sm-4 col-md-3 col-lg-3 text-right">'
                            +'<label for="rfc_" class="col-form-label mr-2 control-label">Apellido Paterno: </label>'
                        +'</div>'
                        +'<div class="col-md-8 col-lg-3">'
                           +' <input type="text" name="municipio" id="municipio" class="form-control" value="Two" >'
                        +'</div>'
                    +'</div>'
                    +'<div class="row form-group">'
                        +'<div class="col-sm-4 col-md-3 col-lg-2 text-right">'
                            +'<label for="tipo" class="col-form-label mr-2 control-label" id="label_ciudad">Apellido Materno: </label>'
                       +' </div>'
                        +'<div class="col-md-8 col-lg-3">'
                           +' <input type="text" name="ciudad" id="ciudad" class="form-control" value="random" >'
                       +' </div>'
                        +'<div class="col-sm-4 col-md-3 col-lg-3 text-right">'
                           +' <label for="rfc_" class="col-form-label mr-2 control-label">Calle: </label>'
                       +' </div>'
                       +' <div class="col-md-8 col-lg-3">'
                            +'<input type="text" name="telefono" id="telefono" class="form-control" value="random" >'
                        +'</div>'
                    +'</div>'
          +'<div class="row form-group">'
                        +'<div class="col-sm-4 col-md-3 col-lg-2 text-right">'
                            +'<label for="tipo" class="col-form-label mr-2 control-label" id="label_ciudad">Colonia: </label>'
                       +' </div>'
                        +'<div class="col-md-8 col-lg-3">'
                           +' <input type="text" name="ciudad" id="ciudad" class="form-control" value="6691122136" >'
                       +' </div>'
                        +'<div class="col-sm-4 col-md-3 col-lg-3 text-right">'
                           +' <label for="rfc_" class="col-form-label mr-2 control-label">Telefono: </label>'
                       +' </div>'
                       +' <div class="col-md-8 col-lg-3">'
                            +'<input type="text" name="telefono" id="telefono" class="form-control" value="ZeroTwo@gmail.com" >'
                        +'</div>'
                    +'</div>'
        +'</form>';

    BootstrapDialog.show({
    title: id,
    message: $(fom),
    buttons: [{
        label: 'Modificar',
        cssClass: 'btn-success',
        action: function(dialogItself)
        {

                dialogItself.close();
            }
        },
        {
            label: 'Eliminar',
            cssClass: 'btn-danger',
            action: function(dialogItself)
            {
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
                        +'<label for="tipo" class="col-form-label mr-2 control-label" id="label_representanteLegal">Folio: </label>'
                        +'</div>'
                        +'<div class="col-sm-12 col-md-9 col-lg-9">'
                            +'<input type="text" name="representanteLegal" id="folio" class="form-control" value="F0001" disabled>'
                        +'</div>'
                    +'</div>'
                    +'<div class="row form-group">'
                        +'<div class="col-sm-4 col-md-3 col-lg-2 text-right">'
                            +'<label for="rfc_" class="col-form-label mr-2 control-label">Nombres(s): </label>'
                        +'</div>'
                        +'<div class="col-md-8 col-lg-3">'
                            +'<input type="text" name="estado" id="nombre" class="form-control" value="Zero" >'
                        +'</div>'
                        +'<div class="col-sm-4 col-md-3 col-lg-3 text-right">'
                            +'<label for="rfc_" class="col-form-label mr-2 control-label">Apellido Paterno: </label>'
                        +'</div>'
                        +'<div class="col-md-8 col-lg-3">'
                           +' <input type="text" name="municipio" id="a_p" class="form-control" value="Two" >'
                        +'</div>'
                    +'</div>'
                    +'<div class="row form-group">'
                        +'<div class="col-sm-4 col-md-3 col-lg-2 text-right">'
                            +'<label for="tipo" class="col-form-label mr-2 control-label" id="label_ciudad">Apellido Materno: </label>'
                       +' </div>'
                        +'<div class="col-md-8 col-lg-3">'
                           +' <input type="text" name="ciudad" id="a_m" class="form-control" value="random" >'
                       +' </div>'
                        +'<div class="col-sm-4 col-md-3 col-lg-3 text-right">'
                           +' <label for="rfc_" class="col-form-label mr-2 control-label">Calle: </label>'
                       +' </div>'
                       +' <div class="col-md-8 col-lg-3">'
                            +'<input type="text" name="telefono" id="calle" class="form-control" value="random" >'
                        +'</div>'
                    +'</div>'
          +'<div class="row form-group">'
                        +'<div class="col-sm-4 col-md-3 col-lg-2 text-right">'
                            +'<label for="tipo" class="col-form-label mr-2 control-label" id="label_ciudad">Colonia: </label>'
                       +' </div>'
                        +'<div class="col-md-8 col-lg-3">'
                           +' <input type="text" name="ciudad" id="colonia" class="form-control" value="6691122136" >'
                       +' </div>'
                        +'<div class="col-sm-4 col-md-3 col-lg-3 text-right">'
                           +' <label for="rfc_" class="col-form-label mr-2 control-label">Telefono: </label>'
                       +' </div>'
                       +' <div class="col-md-8 col-lg-3">'
                            +'<input type="text" name="telefono" id="telefono" class="form-control" value="ZeroTwo@gmail.com" >'
                        +'</div>'
                    +'</div>'
        +'</form>';

    BootstrapDialog.show({
    title: 'id',
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
          //reloadTable();
          
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

        $('#contenido_tabla').append('<tr>'
        +'<td><a onclick="openModal('+item.cliente+')" style="cursor:pointer;">#Cl-'+item.cliente+'</a></td>'
        +'<td>'+item.fullName+'</td>'
        +'<td>'+item.telefono+'</td>'
        +'<td>'+item.fullName+'</td>'
        +'</tr>');


        /*$('#contenido_tabla').append('<tr id="fila_'+item.idsoli+'">'+
        '<td>'+'<a onclick="paraEnviarId('+item.idsoli+')" style="cursor:pointer;">'+ item.idsoli +'</a>'+'</td>'+  
        '<td>'+item.nombre+'</td>'+
        '<td>'+item.fecha.substr(0,10)+'</td>'+
        '<td>'+'<span class="label label-danger">'+"En espera"+'</span>'+'</td>'+
        '</tr>');*/
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
