<?php $this->load->view('Helpers/Header');?>
<?php $this->load->view('Helpers/AsideLeft',array('text'=>'Proveedores'));?>

<link rel="stylesheet" href="<?= base_url('assets/sources/css/global.css'); ?>">


<div class="content-wrapper" style="background: white;">
    <section class="content">
        <h1 class="titulo">Proveedores</h1>
        <div class="container containerGeneral ">
            <form>
                <div class="form-group">
                        <label for="nombreProveedorProvedores">Nombre del producto</label>
                        <input type="text" class="form-control" name="nombreProveedorProvedores" id="nombreProveedorProvedores">
                </div>
                <div class="form-group">
                        <label for="calleProvedores">Calle</label>
                        <input type="text" class="form-control" name="calleProvedores" id="calleProvedores">
                </div>
                <div class="form-group">
                        <label for="coloniaProvedores">Colonia</label>
                        <input type="text" class="form-control" name="coloniaProvedores" id="coloniaProvedores">
                </div>
                <div class="form-group">
                        <label for="numCalleProvedores">Número de la Calle</label>
                        <input type="text" class="form-control" name="numCalleProvedores" id="numCalleProvedores">
                </div>
                <div class="form-group">
                        <label for="RFCProvedores">RFC</label>
                        <input type="text" class="form-control" name="RFCProvedores" id="RFCProvedores">
                </div>
                <div class="form-group">
                        <label for="numTelProvedores">Número de teléfono</label>
                        <input type="text" class="form-control" name="numTelProvedores" id="numTelProvedores">
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


  


