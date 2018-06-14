<div class="left scrollbar">
	<?php foreach ($dataMenu as $m) { ?>
		<div id="<?= $m->ruta; ?>" class="item menu-l">
			<i class="fas <?= $m->icono; ?> fa-lg"></i>
			<span><?= $m->descripcion; ?></span>
		</div>
	<?php	}	?>
</div>