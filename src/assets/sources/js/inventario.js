$(document).ready(function(){   

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