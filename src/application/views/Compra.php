<?php $this->load->view('Helpers/Header');?>
<?php $this->load->view('Helpers/AsideLeft');?>

  

<link rel="stylesheet" href="<?= base_url('assets/sources/css/global.css'); ?>">

<div class="content-wrapper" style="background: white;">
    <section class="content">

    <h1 class="titulo">Compras</h1>

    <div class="container containerGeneral">
        <form>
                <div class="form-group">
                    <label for="productoCompra">Nombre del producto</label>
                    <input type="text" class="form-control" name="productoCompra" id="productoCompra">
                </div>
                <div class="form-group">
                    <label for="cantidadCompra">Cantidad</label>
                    <input type="text" class="form-control" name="cantidadCompra" id="cantidadCompra">
                </div>
                <div class="form-group">
                        <label for="nombreProveedorCompras">Cantidad</label>
                    <input type="text" class="form-control" name="nombreProveedorCompras" id="nombreProveedorCompras">
                </div>
                <div class="form-group center ">
                    <button type="submit" class="btn  btn-lg btn-general ">Realizar compra</button>
                </div>          
        </form>                 
    </div>

    </section>
</div>






<?php $this->load->view('Helpers/AsideRight');?>
<?php $this->load->view('Helpers/Footer');?>


  


