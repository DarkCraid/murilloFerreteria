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
                    <label >Cantidad</label>
                    <input type="number" class="form-control" id="cantidad" required>
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
                            <button class="btn btn-warning">Agregar nuevo proveedor</button>
                        </div>    
                    </div>
                    
                </div>
                <hr>
                <div class="form-group ">
                    <button type="submit" class="btn  btn-lg btn-success ">Confirmar</button>
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

<style>
    .select-proveedor{margin-left: -15px;}
</style>

<script>
    $('.btn').click(function(){
    getAjax('POST','Inicio/getView',{'page':'Panel/compras/'+this.id},'view');
});
</script>