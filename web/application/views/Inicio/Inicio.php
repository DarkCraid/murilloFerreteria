<?php $this->load->view('Helpers/header'); ?>
<link rel="stylesheet" href="<?= base_url('assets/css/inicio.css'); ?>">

<img class="imgFondo hidden-xs" src="<?= base_url('assets/img/fondos/fondo.jpg'); ?>" alt="fondo">
<img class="imgFondo hidden-md hidden-md hidden-lg" src="<?= base_url('assets/img/fondos/fondo1.1.jpg'); ?>" alt="fondo">

<div class="topnav" id="myTopnav">
  <a id="iniciar" class="active">Iniciar sesión</a>
  <a href="#news">Solicitar cuenta</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fas fa-bars fa-lg"></i>
  </a>
</div>

<div class="contenedor">
	<div class="container">
		<div class="col-xs-12 col-sm-6 col-lg-4">
			<section class="row"><br>
				<!--img class="img-title"alt="battery matters"-->
				<strong style="color:#000;font-size: 60px;">Ferreteria Murillo</strong><br>
				<span class="subtitle" style="color:#000;">Subtile 1<br>Subtitle 2</span>
			</section>
		</div>
	</div>
</div>
<?php $this->load->view('Helpers/footer'); ?>
<script src="<?= base_url('assets/js/inicio.js'); ?>"></script>