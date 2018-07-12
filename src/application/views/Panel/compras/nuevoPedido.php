<script> $('.opcionMenuOpen').text('Compras > nuevos pedidos');</script>
<div class="row">
    <div class="container-fluid">
        <div class="col-xs-12 col-lg-8 col-normal">
            <section class="optionsTop">
                <span class="folio">Folio pedido: <strong><?= $folio; ?></strong></span>
                <button class="btn btn-info btn-lg subMenu" disabled id="nuevoPedido">Nuevo pedido</button>
                <button class="btn btn-info btn-lg subMenu" id="listaCompras">Lista de pedidos</button>
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
                            <input type="number" class="form-control" id="cantidad" min="1" required>
                        </div>
                        <div class="col-xs-6">
                            <label >Costo actual por unidad</label>
                            <input type="number" class="form-control" id="monto" min=".1" required>
                        </div>
                    </div>
                    
                </div>
                <div class="form-group">
                    <div class="row container-fluid">
                        <label >Proveedor</label>
                    </div>
                    <div class="row container-fluid ">
                        <div class="col-xs-6 select-proveedor">
                            <select id="proveedor" class="form-control">
                                <option value="0">- Seleccionar -</option>
                                <?php foreach ($proveedores as $p){ ?>
                                    <option value="<?= $p->id; ?>"><?= $p->nombre; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col-xs-6">
                            <div class="col-xs-6">
                                <button class="btn btn-warning btn-block" id="nuevoProve">Agregar nuevo proveedor</button>
                            </div>
                            <div class="col-xs-6">
                                <button class="btn btn-success pull-right btn-block" id="agregar">Agregar a la lista</button>
                            </div>
                        </div>    
                    </div>
                    
                </div>
                <hr>
                <div class="form-group">
                    <div class="row container-fluid">
                        <strong class="total pull-right">Total: $<span>0</span></strong>
                    </div>
                </div>
            </section>
        </div>  
        <div class="col-xs-12 col-lg-4 text-center col-info">
            <strong>Detalles de la compra</strong>
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
                    <label>Proveedor: </label>
                    <span class="proveedor"></span><br>
                    <label>Agregar nota (opcional)</label>
                    <textarea  id="nota" class="form-control" cols="30" rows="5"></textarea><br>
                    <button class="btn btn-success btn-block btn-lg" id="finalizar" disabled>Finalizar</button>
                </div>
            </div>

        </div>              
    </div>
</div>

<style>
    .select-proveedor{margin-left: -15px;}
    #nuevoProve,#agregar{right: -45px !important; width: 110%;
    position: relative;}
    #nuevoProve{left: 0px !important; width: 120%;}
</style>

<script src="<?= base_url('assets/sources/js/content/pedidos.js'); ?>"></script>