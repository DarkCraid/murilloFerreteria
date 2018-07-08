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
                            +'<label for="rfc_" class="col-form-label mr-2 control-label">Nombres(s): </label>'
                        +'</div>'
                        +'<div class="col-md-8 col-lg-3">'
                            +'<input type="text" name="estado" id="estado" class="form-control" value="Zero" >'
                        +'</div>'
                        +'<div class="col-sm-4 col-md-3 col-lg-3 text-right">'
                            +'<label for="rfc_" class="col-form-label mr-2 control-label">Apellidos: </label>'
                        +'</div>'
                        +'<div class="col-md-8 col-lg-3">'
                           +' <input type="text" name="municipio" id="municipio" class="form-control" value="Two" >'
                        +'</div>'
                    +'</div>'



                    +'<div class="row form-group">'
                        +'<div class="col-sm-4 col-md-3 col-lg-2 text-right">'
                            +'<label for="tipo" class="col-form-label mr-2 control-label" id="label_ciudad">Calle: </label>'
                       +' </div>'
                        +'<div class="col-md-8 col-lg-3">'
                           +' <input type="text" name="ciudad" id="ciudad" class="form-control" value="random" >'
                       +' </div>'
                        +'<div class="col-sm-4 col-md-3 col-lg-3 text-right">'
                           +' <label for="rfc_" class="col-form-label mr-2 control-label">Colonia: </label>'
                       +' </div>'
                       +' <div class="col-md-8 col-lg-3">'
                            +'<input type="text" name="telefono" id="telefono" class="form-control" value="random" >'
                        +'</div>'
                    +'</div>'



          +'<div class="row form-group">'
                        +'<div class="col-sm-4 col-md-3 col-lg-2 text-right">'
                            +'<label for="tipo" class="col-form-label mr-2 control-label" id="label_ciudad">Telefono: </label>'
                       +' </div>'
                        +'<div class="col-md-8 col-lg-3">'
                           +' <input type="text" name="ciudad" id="ciudad" class="form-control" value="6691122136" >'
                       +' </div>'
                        +'<div class="col-sm-4 col-md-3 col-lg-3 text-right">'
                           +' <label for="rfc_" class="col-form-label mr-2 control-label">Correo: </label>'
                       +' </div>'
                       +' <div class="col-md-8 col-lg-3">'
                            +'<input type="text" name="telefono" id="telefono" class="form-control" value="ZeroTwo@gmail.com" >'
                        +'</div>'
                    +'</div>'



                              +'<div class="row form-group">'
                        +'<div class="col-sm-4 col-md-3 col-lg-2 text-right">'
                            +'<label for="tipo" class="col-form-label mr-2 control-label" id="label_ciudad">Tipo de Cuenta: </label>'
                       +' </div>'
                        +'<div class="col-md-8 col-lg-3">'
                           +' <input type="text" name="ciudad" id="ciudad" class="form-control" value="Administrador" >'
                       +' </div>'
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





///////////////

$('#Agregar').click(function(event) {
   
    let fom= '<form class="form-horizontal" action="">'


       
                    +'<div class="row form-group">'
                      +'<div class="col-sm-4 col-md-3 col-lg-2 text-right">'
                        +'<label for="tipo" class="col-form-label mr-2 control-label" id="label_representanteLegal">Folio: </label>'
                        +'</div>'
                        +'<div class="col-sm-12 col-md-9 col-lg-9">'
                            +'<input type="text" name="representanteLegal" id="representanteLegal" class="form-control" value="F0009" disabled>'
                        +'</div>'
                    +'</div>'


                    +'<div class="row form-group">'
                        +'<div class="col-sm-4 col-md-3 col-lg-2 text-right">'
                            +'<label for="rfc_" class="col-form-label mr-2 control-label">Nombres(s): </label>'
                        +'</div>'
                        +'<div class="col-md-8 col-lg-3">'
                            +'<input type="text" name="estado" id="estado" class="form-control" value="" >'
                        +'</div>'
                        +'<div class="col-sm-4 col-md-3 col-lg-3 text-right">'
                            +'<label for="rfc_" class="col-form-label mr-2 control-label">Apellidos: </label>'
                        +'</div>'
                        +'<div class="col-md-8 col-lg-3">'
                           +' <input type="text" name="municipio" id="municipio" class="form-control" value="" >'
                        +'</div>'
                    +'</div>'



                    +'<div class="row form-group">'
                        +'<div class="col-sm-4 col-md-3 col-lg-2 text-right">'
                            +'<label for="tipo" class="col-form-label mr-2 control-label" id="label_ciudad">Calle: </label>'
                       +' </div>'
                        +'<div class="col-md-8 col-lg-3">'
                           +' <input type="text" name="ciudad" id="ciudad" class="form-control" value="" >'
                       +' </div>'
                        +'<div class="col-sm-4 col-md-3 col-lg-3 text-right">'
                           +' <label for="rfc_" class="col-form-label mr-2 control-label">Colonia: </label>'
                       +' </div>'
                       +' <div class="col-md-8 col-lg-3">'
                            +'<input type="text" name="telefono" id="telefono" class="form-control" value="" >'
                        +'</div>'
                    +'</div>'



          +'<div class="row form-group">'
                        +'<div class="col-sm-4 col-md-3 col-lg-2 text-right">'
                            +'<label for="tipo" class="col-form-label mr-2 control-label" id="label_ciudad">Telefono: </label>'
                       +' </div>'
                        +'<div class="col-md-8 col-lg-3">'
                           +' <input type="text" name="ciudad" id="ciudad" class="form-control" value="" >'
                       +' </div>'
                        +'<div class="col-sm-4 col-md-3 col-lg-3 text-right">'
                           +' <label for="rfc_" class="col-form-label mr-2 control-label">Correo: </label>'
                       +' </div>'
                       +' <div class="col-md-8 col-lg-3">'
                            +'<input type="text" name="telefono" id="telefono" class="form-control" value="" >'
                        +'</div>'
                    +'</div>'



                              +'<div class="row form-group">'
                        +'<div class="col-sm-4 col-md-3 col-lg-2 text-right">'
                            +'<label for="tipo" class="col-form-label mr-2 control-label" id="label_ciudad">Tipo de Cuenta: </label>'
                       +' </div>'
                        +'<div class="col-md-8 col-lg-3">'
                           +' <input type="text" name="ciudad" id="ciudad" class="form-control" value="" >'
                       +' </div>'
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

                dialogItself.close();
            }
        },
        {
            label: 'Cerrar',
            cssClass: 'btn-danger',
            action: function(dialogItself)
            {
                dialogItself.close();
            }
        }]
    });


});

