<?php $this->load->view('Helpers/Header');?>
<?php $this->load->view('Helpers/AsideLeft',array('text'=>'Caja'));?>

  <link rel="stylesheet" href="<?= base_url('assets/sources/css/global.css'); ?>">
<div class="content-wrapper" style="background: white;">
    <section class="content">

        <h1 class="titulo">Caja</h1>
        <div class="container containerGeneral">
            <div class="form-group" >
                <label for="tipo" id="label_representanteLegal">Dinero en Caja:</label>
                <input type="text" name="representanteLegal" id="representanteLegal" class="form-control" value="" disabled>
            </div>
        </div>
    </section>
</div>






<?php $this->load->view('Helpers/AsideRight');?>
<?php $this->load->view('Helpers/Footer');?>


  


