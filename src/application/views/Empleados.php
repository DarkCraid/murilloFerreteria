<?php $this->load->view('Helpers/Header');?>
<?php $this->load->view('Helpers/AsideLeft');?>

  


<link rel="stylesheet" href="<?= base_url('assets/sources/css/global.css'); ?>">

<div class="content-wrapper" style="background: white;">
    <section class="content">
        <h1 class="titulo">Empleados</h1>
        <div class="container containerGeneral ">
            <form>
                <div class="form-group">
                        <label for="nombreEmpleados">Nombre</label>
                        <input type="text" class="form-control" name="nombreEmpleados" id="nombreEmpleados">
                </div> 
                <div class="form-group">
                        <label for="calleEmpleados">Calle</label>
                        <input type="text" class="form-control" name="calleEmpleados" id="calleEmpleados">
                </div>
                <div class="form-group">
                        <label for="coloniaEmpleados">Colonia</label>
                        <input type="text" class="form-control" name="coloniaEmpleados" id="coloniaEmpleados">
                </div>    
                <div class="form-group">
                        <label for="numcalleEmpleados">Número de la Calle</label>
                        <input type="text" class="form-control" name="numcalleEmpleados" id="numcalleEmpleados">
                </div>        

                <div class="form-group">
                        <label for="numTelEmpleados">Número de teléfono</label>
                        <input type="text" class="form-control" name="numTelEmpleados" id="numTelEmpleados">
                </div>
                <div class="form-group">
                        <label for="statusEmpleados">Status</label>
                        <input type="text" class="form-control" name="statusEmpleados" id="statusEmpleados">
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


  


