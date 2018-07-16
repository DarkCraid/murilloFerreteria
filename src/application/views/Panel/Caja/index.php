<?php $this->load->view('Helpers/Header');?>
<?php $this->load->view('Helpers/AsideLeft',array('text'=>'Caja'));?>

  <link rel="stylesheet" href="<?= base_url('assets/sources/css/global.css'); ?>">
<div class="content-wrapper" style="background: white;">
    <section class="content">

        <h1 class="titulo">Caja</h1>
        <div class="container containerGeneral">
            <div class="form-group" >
                <label for="tipo" id="label_representanteLegal">Monto Inicial:</label>
                <input type="number" name="representanteLegal"  min="1" id="dineroEnCaja" class="form-control" >
            </div>
            <div class="form-group" >
                <label for="tipo" id="label_representanteLegal">Ingresos de hoy:</label>
                <input type="number" name="representanteLegal" min="1" id="ingresosDiarios" class="form-control">
            </div>
            <div class="form-group" >
                <label for="tipo" id="label_representanteLegal">Retiros:</label>
                <input type="number" name="representanteLegal" min="1" id="retirosDiarios" class="form-control" >
            </div>
            <button class="btn btn-primary" id="calcularMonto" ">Calcular Monto</button>                                 
        </div>
    </section>
</div>


<?php $this->load->view('Helpers/AsideRight');?>
<?php $this->load->view('Helpers/Footer');?>
<script src="<?= base_url('assets/sources/js/content/caja.js'); ?>"></script>