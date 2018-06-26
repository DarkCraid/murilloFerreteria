<?php $this->load->view('Helpers/Header');?>
<?php $this->load->view('Helpers/AsideLeft');?>

  

<link rel="stylesheet" href="<?= base_url('assets/sources/css/global.css'); ?>">

<div class="content-wrapper" style="background: white;">
    <section class="content">
        <h1 class="titulo">Clientes Frecuentes</h1>
        <div class="container containerGeneral ">
            <form>
                <div class="form-group">
                        <label for="nombreClientesFrecuentes">Nombre</label>
                        <input type="text" class="form-control" name="nombreClientesFrecuentes" id="nombreClientesFrecuentes">
                </div>
                <div class="form-group">
                        <label for="rfcClientesFrecuentes">RFC</label>
                        <input type="text" class="form-control" name="rfcClientesFrecuentes" id="rfcClientesFrecuentes">
                </div>
                <div class="form-group">
                        <label for="calleClientesFrecuentes">Calle</label>
                        <input type="text" class="form-control" name="calleClientesFrecuentes" id="calleClientesFrecuentes">
                </div>
                <div class="form-group">
                        <label for="coloniaClientesFrecuentes">Colonia</label>
                        <input type="text" class="form-control" name="coloniaClientesFrecuentes" id="coloniaClientesFrecuentes">
                </div>             
                <div class="form-group">
                        <label for="numcalleClientesFrecuentes">Número de la Calle</label>
                        <input type="text" class="form-control" name="numcalleClientesFrecuentes" id="numcalleClientesFrecuentes">
                </div>

                <div class="form-group">
                        <label for="descuentoClientesFrecuentes">Descuento Especial</label>
                        <input type="text" class="form-control" name="descuentoClientesFrecuentes" id="descuentoClientesFrecuentes">
                </div>

                <div class="form-group">
                        <label for="numTelClientesFrecuentes">Número de teléfono</label>
                        <input type="text" class="form-control" name="numTelClientesFrecuentes" id="numTelClientesFrecuentes">
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group center ">
                            <button type="submit" class="btn  btn-lg btn-general ">Agregar</button>
                        </div>  
                    </div>
                    <div class="col-md-4">
                        <div class="form-group center ">
                            <button type="submit" class="btn  btn-lg btn-general ">Modificar</button>
                        </div>  
                    </div>
                    <div class="col-md-4">
                        <div class="form-group center ">
                            <button type="submit" class="btn  btn-lg btn-general ">Eliminar</button>
                        </div>  
                    </div>                      
                </div>      
            </form>
        </div>



    </section>
</div>






<?php $this->load->view('Helpers/AsideRight');?>
<?php $this->load->view('Helpers/Footer');?>


  


