<?php $this->load->view('Helpers/header'); ?>
<link rel="stylesheet" href="<?= base_url('assets/css/menuLateral.css'); ?>">
<link rel="stylesheet" href="<?= base_url('assets/css/panel.css'); ?>">

<div class="topnav" id="myTopnav">
  <a id="salir">Cerrar sesión</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fas fa-bars fa-lg"></i>
  </a>
</div>

<?php $this->load->view('Helpers/menu-lateral'); ?>

<div class="container full-container"></div>

<?php $this->load->view('Helpers/footer'); ?>
<script src="<?= base_url('assets/js/panel.js'); ?>"></script>