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
		
		


		Highcharts.chart('container2', {
		    chart: {
		        type: 'bar'
		    },
		    title: {
		        text: 'Historic World Population by Region'
		    },
		    subtitle: {
		        text: 'Source: <a href="https://en.wikipedia.org/wiki/World_population">Wikipedia.org</a>'
		    },
		    xAxis: {
		        categories: ['Africa', 'America', 'Asia', 'Europe', 'Oceania'],
		        title: {
		            text: null
		        }
		    },
		    yAxis: {
		        min: 0,
		        title: {
		            text: 'Population (millions)',
		            align: 'high'
		        },
		        labels: {
		            overflow: 'justify'
		        }
		    },
		    tooltip: {
		        valueSuffix: ' millions'
		    },
		    plotOptions: {
		        bar: {
		            dataLabels: {
		                enabled: true
		            }
		        }
		    },
		    legend: {
		        layout: 'vertical',
		        align: 'right',
		        verticalAlign: 'top',
		        x: -40,
		        y: 80,
		        floating: true,
		        borderWidth: 1,
		        backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
		        shadow: true
		    },
		    credits: {
		        enabled: false
		    },
		    series: [{
		        name: 'Year 1800',
		        data: [107, 31, 635, 203, 2]
		    }, {
		        name: 'Year 1900',
		        data: [133, 156, 947, 408, 6]
		    }, {
		        name: 'Year 2000',
		        data: [814, 841, 3714, 727, 31]
		    }, {
		        name: 'Year 2016',
		        data: [1216, 1001, 4436, 738, 40]
		    }]
		});


		// Set up the chart
		var chart = new Highcharts.Chart({
		    chart: {
		        renderTo: 'container4',
		        type: 'column',
		        options3d: {
		            enabled: true,
		            alpha: 15,
		            beta: 15,
		            depth: 50,
		            viewDistance: 25
		        }
		    },
		    title: {
		        text: 'Chart rotation demo'
		    },
		    subtitle: {
		        text: 'Test options by dragging the sliders below'
		    },
		    plotOptions: {
		        column: {
		            depth: 25
		        }
		    },
		    series: [{
		        data: [29.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4]
		    }]
		});

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