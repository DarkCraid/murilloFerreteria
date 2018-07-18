<script src="<?= base_url('assets/sources/js/graficas/highcharts.js');?>"></script>
<script src="<?= base_url('assets/sources/js/graficas/series-label.js');?>"></script>
<script src="<?= base_url('assets/sources/js/graficas/exporting.js');?>"></script>
<script src="<?= base_url('assets/sources/js/graficas/jquery-3.1.1.min.js');?>"></script>
<script src="<?= base_url('assets/sources/js/graficas/highcharts-3d.js');?>"></script>

<!--div class="content-wrapper" style="background: white;">
    <section class="content">
		

	

	

	<div id="container4"></div>





	<div id="sliders">
	    <table>
	        <tr>
	        	<td>Alpha Angle</td>
	        	<td><input id="alpha" type="range" min="0" max="45" value="15"/> <span id="alpha-value" class="value"></span></td>
	        </tr>
	        <tr>
	        	<td>Beta Angle</td>
	        	<td><input id="beta" type="range" min="-45" max="45" value="15"/> <span id="beta-value" class="value"></span></td>
	        </tr>
	        <tr>
	        	<td>Depth</td>
	        	<td><input id="depth" type="range" min="20" max="100" value="50"/> <span id="depth-value" class="value"></span></td>
	        </tr>
	    </table>
	</div>

	
</div-->


<script>
		
		

		function showValues() {
		    $('#alpha-value').html(chart.options.chart.options3d.alpha);
		    $('#beta-value').html(chart.options.chart.options3d.beta);
		    $('#depth-value').html(chart.options.chart.options3d.depth);
		}

		// Activate the sliders
		$('#sliders input').on('input change', function () {
		    chart.options.chart.options3d[this.id] = parseFloat(this.value);
		    showValues();
		    chart.redraw(false);
		});

		showValues();

	</script>