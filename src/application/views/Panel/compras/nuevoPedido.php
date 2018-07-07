<script> $('.opcionMenuOpen').text('Compras > nuevos pedidos');</script>
<div class="row">
    <div class="container-fluid">
        <div class="col-xs-12 col-lg-8 col-normal">
            <section class="optionsTop">
                <span class="folio">Folio pedido: <strong>P001070718</strong></span>
                <button class="btn btn-info btn-lg" disabled id="nuevoPedido">Nuevo pedido</button>
                <button class="btn btn-info btn-lg" id="listaPedidos">Lista de pedidos</button>
            </section> 
            <section id="content-dinamic">
                <div class="form-group">
                    <label >Nombre del producto</label>
                    <input type="text" class="form-control" id="producto" required>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-xs-6">
                            <label >Cantidad</label>
                            <input type="number" class="form-control" id="cantidad" required>
                        </div>
                        <div class="col-xs-6">
                            <label >Costo actual por unidad</label>
                            <input type="number" class="form-control" id="monto" required>
                        </div>
                    </div>
                    
                </div>
                <div class="form-group">
                    <div class="row container-fluid">
                        <label >Proveedor</label>
                    </div>
                    <div class="row container-fluid ">
                        <div class="col-xs-7 select-proveedor">
                            <select id="proveedor" class="form-control">
                                <option value="0">- Seleccionar -</option>
                            </select>
                        </div>
                        <div class="col-xs-5">
                            <button class="btn btn-warning btn-block" id="nuevoProve">Agregar nuevo proveedor</button>
                        </div>    
                    </div>
                    
                </div>
                <hr>
                <div class="form-group ">
                    <div class="col-xs-7">
                        <div class="col-xs-6 total">
                            <strong>Total de la compra:</strong>
                        </div>
                        <div class="col-xs-6">
                            <input class="form-control col-xs-3" id="total" value="$ 123" disabled></input>
                        </div>
                    </div>
                    <div class="col-xs-5">
                        <button type="submit" class="btn  btn-lg btn-success btn-block">Finalizar</button>
                    </div>
                    
                    
                </div>
            </section>
        </div>  
        <div class="col-xs-12 col-lg-4 text-center col-info">
            <strong>Detalles de la compra</strong>
            <div class="container-details">
                <label class="notification">Nada capturado.</label>
            </div>

        </div>              
    </div>
</div>

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<style>
    .select-proveedor{margin-left: -15px;}
    #nuevoProve{right: -15px !important;
    position: relative;}
</style>

<script>
    $('.btn').click(function(){
        getAjax('POST','Inicio/getView',{'page':'Panel/compras/'+this.id},'view');
    });

    $('#producto').keyup(function(){
        $( "#producto" ).autocomplete({
            source: availableTags.text
        });
        var pos=0;
        $( "#monto" ).val(availableTags.cost[pos]);
    });
</script>