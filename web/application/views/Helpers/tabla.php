<link rel="stylesheet" href="<?= base_url('assets/css/tablas.css'); ?>">

<div class="box">
    <div class="box-header">
      	<h3 class="box-title"><?= $dataTable->title; ?></h3>
    </div>
	<div class="box-body">
      	<table id="<?= $dataTable->id; ?>" class="table table-hover no-margin">
			<thead></thead>
			<tbody class="cursor-pointer"></tbody>
		</table>
	</div>
</div>

<script src="<?php echo base_url('assets/js/jquery.dataTables.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/dataTables.bootstrap.min.js'); ?>"></script>