<?php $this->load->view('Helpers/Header');?>
<?php $this->load->view('Helpers/AsideLeft',array('text'=>'Caja'));?>

  <link rel="stylesheet" href="<?= base_url('assets/sources/css/global.css'); ?>">
<div class="content-wrapper" style="background: white;">
    <section class="content">

        <h1 class="titulo">Caja</h1>
        <div class="container containerGeneral">
                <div class="form-group" >
                    <label for="tipo" id="label_representanteLegal">Monto Inicial:</label>
                    <input type="text" name="representanteLegal" id="dineroEnCaja" class="form-control" value="">
                </div>
                <div class="form-group" >
                    <label for="tipo" id="label_representanteLegal">Ingresos de hoy:</label>
                    <input type="text" name="representanteLegal" id="ingresosDiarios" class="form-control" value="">
                </div>
                <div class="form-group" >
                    <label for="tipo" id="label_representanteLegal">Retiros:</label>
                    <input type="text" name="representanteLegal" id="retirosDiarios" class="form-control" value="">
                </div>
                <button class="btn btn-primary" >Calcular Monto</button>                               
        </div>
    </section>
</div>






<?php $this->load->view('Helpers/AsideRight');?>
<?php $this->load->view('Helpers/Footer');?>


  


