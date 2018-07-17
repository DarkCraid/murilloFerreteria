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
                        <label for="tipo" id="label_representanteLegal">Monto Inicial:</label>
                        <input type="number" name="representanteLegal"  min="1" id="dineroEnCaja" class="form-control" >  
                    </div>
                </div>
                 <div class="col-md-12">
                     <button class="btn btn-primary" id="MontoInicialbtn">Agregar Monto inicial</button>
                 </div>
                <div class="containerCaja" id="DataAfterMonto">
                     <div class="col-md-12">
                        <div class="form-group" >
                            <label for="tipo" id="label_representanteLegal">Ingresos de hoy:</label>
                            <input type="number" name="representanteLegal" min="1" id="ingresosDiarios" class="form-control">
                        </div> 
                     </div>               
                    <div class="col-md-12 margin-top">
                        <div class="form-group" >
                            <label for="tipo" id="label_representanteLegal">Retiros:</label>
                            <input type="number" name="representanteLegal" min="1" id="retirosDiarios" class="form-control" >
                        </div>  
                    </div>
                    <div class="col-md-6">
                        <button class="btn btn-primary" id="addRetiros">Agregar Retiro</button>
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