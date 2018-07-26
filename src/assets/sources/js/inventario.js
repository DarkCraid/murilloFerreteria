let base_url = 'http://localhost/murilloFerreteria/src/index.php/';
$(document).ready(function(){   
pushTable();
});



/*
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
                            +'<label for="rfc_" class="col-form-label mr-2 control-label">Articulo: </label>'
                        +'</div>'
                        +'<div class="col-md-8 col-lg-3">'
                            +'<input type="text" name="estado" id="estado" class="form-control" value="Tornillo 1/4" disabled>'
                        +'</div>'
                        +'<div class="col-sm-4 col-md-3 col-lg-3 text-right">'
                            +'<label for="rfc_" class="col-form-label mr-2 control-label">Cantidad: </label>'
                        +'</div>'
                        +'<div class="col-md-8 col-lg-3">'
                           +' <input type="text" name="municipio" id="municipio" class="form-control" value="58" disabled>'
                        +'</div>'
                    +'</div>'



                    +'<div class="row form-group">'
                        +'<div class="col-sm-4 col-md-3 col-lg-2 text-right">'
                            +'<label for="tipo" class="col-form-label mr-2 control-label" id="label_ciudad">Compra: </label>'
                       +' </div>'
                        +'<div class="col-md-8 col-lg-3">'
                           +' <input type="text" name="ciudad" id="ciudad" class="form-control" value="12" disabled>'
                       +' </div>'
                        +'<div class="col-sm-4 col-md-3 col-lg-3 text-right">'
                           +' <label for="rfc_" class="col-form-label mr-2 control-label">IVA: </label>'
                       +' </div>'
                       +' <div class="col-md-8 col-lg-3">'
                            +'<input type="text" name="telefono" id="telefono" class="form-control" value="10%" disabled>'
                        +'</div>'
                    +'</div>'



                    +'<div class="row form-group">'
                        +'<div class="col-sm-4 col-md-3 col-lg-2 text-right">'
                           +' <label for="rfc_" class="col-form-label mr-2 control-label">Venta: </label>'
                        +'</div>'
                        +'<div class="col-md-8 col-lg-3">'
                            +'<input type="text" name="colonia" id="colonia" class="form-control" value="85" disabled>'
                        +'</div>'
                    +'</div>'

        +'</form>';

    BootstrapDialog.show({
    title: id,
    message: $(fom),
    buttons: [{
        label: 'Aceptar',
        cssClass: 'btn-success',
        action: function(dialogItself)
        {

                dialogItself.close();
            }
        },
        {
            label: 'Cancelar',
            cssClass: 'btn-danger',
            action: function(dialogItself)
            {
                dialogItself.close();
            }
        }]
    }); 
}
*/

function pushTable() 
{
    $.ajax({
        type:"POST",
        url: base_url+'Inventario/get',
        data:{},
        success:function (data)
        {
            var c = JSON.parse(data);
    var estatus="";
    $.each(c,function(i,item)
    {

        $('#contenido_tabla').append('<tr>'
        +'<td><a style="cursor:pointer;">#It-'+item.id+'</a></td>'
        +'<td>'+item.descripcion+'</td>'
        +'<td>'+item.costo_unidad+'</td>'
        +'<td>'+item.cantidad+'</td>'
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


$("#filtro3").keyup(function(){
    if ($('#filtro3').val() == '')
    {}
    else
    {
     $.ajax({
        type:"POST",
        url: base_url+'Inventario/search',
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
        $('#contenido_tabla').append('<tr>'
        +'<td><a style="cursor:pointer;">#It-'+item.id+'</a></td>'
        +'<td>'+item.descripcion+'</td>'
        +'<td>'+item.costo_unidad+'</td>'
        +'<td>'+item.cantidad+'</td>'
        +'</tr>');
    });
        },
        error:function(jqXHR, textStatus, errorThrown)
        {alert("Error al guardar la información");}
    });       
 }
});

