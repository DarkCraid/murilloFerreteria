<?php $this->load->view('Helpers/Header');?>
<?php $this->load->view('Helpers/AsideLeft',array('text'=>'Caja'));?>

  <link rel="stylesheet" href="<?= base_url('assets/sources/css/global.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('assets/sources/css/caja.css'); ?>">
<div class="content-wrapper" style="background: white;">
    <section class="content">
        <div class="container containerCaja">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group" >
                        <?php foreach ($monto as $mon ) { ?>
                            <label for="tipo" id="label_representanteLegal">Monto Inicial:</label>
                            <input type="prices" name="representanteLegal"  min="1" id="dineroEnCaja" class="form-control" value="<?php echo $mon ?>" >  
                        <?php }?> 
                    </div>
                </div>
                 <div class="col-md-6">
                     <button class="btn btn-primary" id="MontoInicialbtn">Agregar Monto inicial</button>
                 </div>
                <div class="containerCaja" id="DataAfterMonto">
                    <?php
                       
                        if ($rol == 'Administrador') {

                    ?>
                        <div class="col-md-6">
                            <button class="btn btn-primary" id="UpdateMontoInicial">Modificar Monto inicial</button>      
                    </div>
                    <?php 
                              }
                    ?>                     
                     <div class="col-md-12">
                        <div class="form-group" >
                            <label for="tipo" id="label_representanteLegal">Monto final del dia:</label>
                            <input type="prices" name="representanteLegal"  id="ingresosDiarios" class="form-control" placeholder="ingresar este valor al final del dia">
                        </div> 
                     </div>                              
                    <div class="col-md-12 margin-top center">
                        <button class="btn btn-primary btn-lg" id="calcularMonto" ">Elaborar Corte</button>  
                    </div>                   
                </div>                                    
            </div>                                 
        </div>
    </section>
</div>


<?php $this->load->view('Helpers/AsideRight');?>
<?php $this->load->view('Helpers/Footer');?>
<script src="<?= base_url('assets/sources/js/content/caja.js'); ?>"></script>