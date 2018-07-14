var productos   = [];

$('.subMenu').click(function(){
    getAjax('POST','Compras/getView',{'page':this.id},'view');
});

$('#producto').keyup(function(){
    $( "#producto" ).autocomplete({
        source: availableTags.text
    });
    var pos=0;
    for (var i = 0; i < availableTags.text.length; i++) {
        if(availableTags.text[i]==$( "#producto" ).val())
            pos=i;
    }
    $( "#monto" ).val(availableTags.cost[pos]);
});

$('#agregar').click(function(){
    var errors      = [];

    if($("#proveedor").val()==0)
        errors.push('Seleccione un proveedor');
    if($('#producto').val()=="")
        errors.push('Capture un producto');
    if($('#cantidad').val()=="" || parseInt($('#cantidad').val())<=0)
        errors.push('La cantidad debe ser superior a 0');
    if($('#monto').val()=="" || parseInt($('#monto').val())<=0)
        errors.push('El costo debe ser superior a 0');

    if(errors.length<=0){
        productos.push({
            'nombre': $('#producto').val(),
            'cantidad': $('#cantidad').val(),
            'costo': $('#monto').val()
        });
        $('.total').children('span').text(
            parseFloat($('.total').children('span').text())+
            (parseFloat($('#monto').val())*parseInt($('#cantidad').val()))
        );

        $('#tbContent').children().remove();
        for (var i = 0; i < productos.length; i++) {
            var cont = '<tr><td class="text-left">'+productos[i].nombre+'</td><td class="text-center">'+
            productos[i].cantidad+' | $ '+productos[i].costo+'</td><td class="text-right">$ '+
            (parseFloat(productos[i].cantidad)*parseFloat(productos[i].costo))+'</td></tr>';
            $('#tbContent').append(cont);
        }
        $('#finalizar').attr('disabled',false);
    }else{
        cleanBotonesModal(true);
        modal('danger','large','ERROR',getErrors(errors),true);
    }
    
});

$('#finalizar').click(function(){
    getAjax('POST','Compras/setPedido',{
        'data':productos,
        'folio':$('.folio').children('strong').text(),
        'proveedor':$("#proveedor").val(),
        'total':$('.total').children('span').text(),
        'nota':$('#nota').val()
    },'confirmarCompra');
});

$('#proveedor').change(function(){
    if($("#proveedor").val()!=0)
        $('.proveedor').text($("#proveedor option:selected").text());
    else
        $('.proveedor').text('');
});

function getErrors(errors){
    let err = '';
    for (var i = 0; i < errors.length; i++) {
        err += '<li>'+errors[i]+'</li>';
    }
    return '<ul>'+err+'</ul>';
}

$('#nuevoProve').click(function(){
    getAjax('POST','Proveedores/getView',{'page':'nuevoProveedor'},'nuevoProveedor');
});