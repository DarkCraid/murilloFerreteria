var pos = -1;

$('#frecuente').change(function(){
    showCliente();
});
$(document).ready(function(){
    showCliente();
});

function showCliente(){
    if($('#frecuente').val()==0){
        $(".nombreCliente").hide(500);
        $('.cliente').text("");
    }
    else
        $(".nombreCliente").show(500);
}

$('.subMenu').click(function(){
    getAjax('POST','Ventas/getView',{'page':this.id},'view');
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
    $( "#monto" ).text(availableTags.cost[pos]);
    if(parseInt(availableTags.cant[pos])<=0){
        $( "#cantidad" ).attr('disabled',true);
        $( "#cantidad" ).attr('placeholder','No hay disponibles.');
        $( "#cantidad" ).addClass('error');
    }
    else{
        $( "#cantidad" ).attr('disabled',false);
        $( "#cantidad" ).attr('max',availableTags.cant[pos]);
        $( "#cantidad" ).attr('placeholder','');
        $( "#cantidad" ).removeClass('error');
    }
});

$('#nombreCliente').keyup(function(){
    $( "#nombreCliente" ).autocomplete({
        source: clientes.name
    });
    $('.cliente').text($('#nombreCliente').val());
    for (var i = 0; i < clientes.name.length; i++) {
        if(clientes.name[i]==$( ".cliente" ).text())
            pos=i;
        else
            pos = -1;
    }
});

 
$('#agregar').click(function(){
    var errors      = [];

    if($('#producto').val()=="")
        errors.push('Capture un producto.');
    if($('#cantidad').val()=="" || parseInt($('#cantidad').val())<=0)
        errors.push('La cantidad debe ser superior a 0.');
    if($('#monto').text()=="" || parseInt($('#monto').text())<=0)
        errors.push('El costo debe ser superior a 0.');
    if($('#frecuente').val()==1 && $('#nombreCliente').val()=="")
        errors.push('Ingrese el nombre del cliente.');

    if(errors.length<=0){
        productos.push({
            'nombre': $('#producto').val(),
            'cantidad': $('#cantidad').val(),
            'costo': $('#monto').text()
        });
        var total = parseFloat($('.total').children('span').text())+
            (parseFloat($('#monto').val())*parseInt($('#cantidad').val()));
        $('.total').children('span').text(total.toFixed(2));

        dropDataTable('tbContent');
        for (var i = 0; i < productos.length; i++) {
            var cont = '<tr><td class="text-left">'+productos[i].nombre+'</td><td class="text-center">'+
            productos[i].cantidad+' | $ '+productos[i].costo+'</td><td class="text-right">$ '+
            (parseFloat(productos[i].cantidad)*parseFloat(productos[i].costo))+'</td></tr>';
            $('#tbContent').children('tbody').append(cont);
        }
        insertarPaginado('tbContent',5);
        $('#finalizar').attr('disabled',false);
    }else{
        cleanBotonesModal(true);
        modal('danger','large','ERROR',getErrors(errors),true);
    }
    
});

$('#finalizar').click(function(){
    if($('.cliente').text()=="")
        setVenta(null);
    else if(pos!= -1){
        setVenta(clientes.id[pos]);
    }else{
        cleanBotonesModal(true);
        modal('danger','large','ERROR','<strong>El cliente no existe.</strong>',true);
    }
});

function setVenta(idCliente){
    getAjax('POST','Ventas/setVenta',{
        'data':productos,
        'folio':$('.folio').children('strong').text(),
        'cliente':idCliente,
        'total':$('.total').children('span').text()
    },'confirmarCompra');
}

function getErrors(errors){
    let err = '';
    for (var i = 0; i < errors.length; i++) {
        err += '<li>'+errors[i]+'</li>';
    }
    return '<ul>'+err+'</ul>';
}

$('input').keypress(function(event){
    return validCaracteres(event,this.id);
});