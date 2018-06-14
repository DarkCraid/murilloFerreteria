<script>
		var ruta_base 		=	'<?= base_url('index.php/'); ?>';
		var ruta_base_files =	'<?= base_url(); ?>';
</script>
<script src="<?= base_url('assets/js/jquery.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/bootstrap.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/bootstrap-dialog.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/loader/jquery.preloader.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/loader/loader.js'); ?>"></script>
<script src="<?= base_url('assets/js/generales.js'); ?>"></script>

<script src="<?= base_url('assets/js/graficas/highcharts.js'); ?>"></script>
<script src="<?= base_url('assets/js/graficas/series-label.js'); ?>"></script>
<script src="<?= base_url('assets/js/graficas/exporting.js'); ?> "></script>
<script src="<?= base_url('assets/js/graficas/highcharts-3d.js'); ?>"></script>
<script type="text/javascript">
$(window).scroll(function(){ 
	if($(window).scrollTop() > 0 && $(window).scrollTop() < 52)
	    $(".left").css('top',(52-$(window).scrollTop())+'px');
	else if($(window).scrollTop() >= 52)
		$(".left").css('top','0px');
	else
	    $(".left").css('top','52px');
});
</script>
</body>
</html>