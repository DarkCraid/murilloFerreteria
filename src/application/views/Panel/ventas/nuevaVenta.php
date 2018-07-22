<script> $('.opcionMenuOpen').text('Ventas > nueva venta');</script>
<style>
    #agregar{    position: relative;
    bottom: 50px;
    float: right;}
    .monto{ position: absolute;
     top: 25px; 
    font-size: 25px !important;
    right: 30px;
}
</style>

<div class="row">
    <div class="container-fluid">
        <div class="col-xs-12 col-lg-8 col-normal">
            <section class="optionsTop">
                <span class="folio">Folio pedido: <strong><?= $folio; ?></strong></span>
                <button class="btn btn-info btn-lg subMenu" disabled id="nuevaVenta">Nueva venta</button>
                <button class="btn btn-info btn-lg subMenu" id="listaVentas">Lista de ventas</button>
            </section> 
            <section id="content-dinamic">
                <div class="container col-xs-12">
                    <div class="form-group">
                        <label >Nombre del producto</label>
                        <input type="text" class="form-control" id="producto" required>
                        <strong class="monto">$<strong id="monto"></strong></strong>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-xs-6">
                                <label >Cantidad</label>
                                <input type="number" class="form-control" id="cantidad" min="1" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-xs-6">
                                <label >¿Cuenta con registro de cliente frecuente?</label>
                                <select id="frecuente" class="form-control" required>
                                    <option value="0">NO</option>
                                    <option value="1">SI</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row nombreCliente">
                            <div class="col-xs-6">
                                <label >Nombre</label>
                                <input type="text" class="form-control" id="nombreCliente" required>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-success" id="agregar">Agregar a la lista</button><br>
                    <hr>
                </div>
                <div class="container col-xs-12">
                    <div class="form-group">
                        <div class="row container-fluid">
                            <strong class="total pull-right">Total: $<span>0</span></strong>
                        </div>
                    </div>
                </div>
            </section>
        </div>  
        <div class="col-xs-12 col-lg-4 text-center col-info">
            <strong>Detalles de la venta</strong>
            <div class="container-details">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Producto</th>
                            <th class="text-center">Cantidad | $/u</th>
                            <th class="text-right">Costo</th>
                        </tr>
                    </thead>
                    <tbody id="tbContent"></tbody>
                </table>
            </div>
            <div class="row text-left">
                <div class="container-fluid">
                    <label class="nombreCliente">Cliente: </label>
                    <span class="cliente"></span><br>
                    <button class="btn btn-success btn-block btn-lg" id="finalizar" disabled>Finalizar</button>
                </div>
            </div>

        </div>              
    </div>
</div>

<script src="<?= base_url('assets/sources/js/content/nuevaVenta.js'); ?>"></script>