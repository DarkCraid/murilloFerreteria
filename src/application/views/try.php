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
		
		Highcharts.chart('container', {

		    title: {
		        text: 'Solar Employment Growth by Sector, 2010-2016'
		    },

		    subtitle: {
		        text: 'Source: thesolarfoundation.com'
		    },

		    yAxis: {
		        title: {
		            text: 'Number of Employees'
		        }
		    },
		    legend: {
		        layout: 'vertical',
		        align: 'right',
		        verticalAlign: 'middle'
		    },

		    plotOptions: {
		        series: {
		            label: {
		                connectorAllowed: false
		            },
		            pointStart: 2010
		        }
		    },

		    series: [{
		        name: 'Installation',
		        data: [43934, 52503, 57177, 69658, 97031, 119931, 137133, 154175]
		    }, {
		        name: 'Manufacturing',
		        data: [24916, 24064, 29742, 29851, 32490, 30282, 38121, 40434]
		    }, {
		        name: 'Sales & Distribution',
		        data: [11744, 17722, 16005, 19771, 20185, 24377, 32147, 39387]
		    }, {
		        name: 'Project Development',
		        data: [null, null, 7988, 12169, 15112, 22452, 34400, 34227]
		    }, {
		        name: 'Other',
		        data: [12908, 5948, 8105, 11248, 8989, 11816, 18274, 18111]
		    }],

		    responsive: {
		        rules: [{
		            condition: {
		                maxWidth: 500
		            },
		            chartOptions: {
		                legend: {
		                    layout: 'horizontal',
		                    align: 'center',
		                    verticalAlign: 'bottom'
		                }
		            }
		        }]
		    }

		});


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

		Highcharts.chart('container3', {
		    chart: {
		        plotBackgroundColor: null,
		        plotBorderWidth: null,
		        plotShadow: false,
		        type: 'pie'
		    },
		    title: {
		        text: 'Browser market shares in January, 2018'
		    },
		    tooltip: {
		        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
		    },
		    plotOptions: {
		        pie: {
		            allowPointSelect: true,
		            cursor: 'pointer',
		            dataLabels: {
		                enabled: true,
		                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
		                style: {
		                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
		                }
		            }
		        }
		    },
		    series: [{
		        name: 'Brands',
		        colorByPoint: true,
		        data: [{
		            name: 'Chrome',
		            y: 61.41,
		            sliced: true,
		            selected: true
		        }, {
		            name: 'Internet Explorer',
		            y: 11.84
		        }, {
		            name: 'Firefox',
		            y: 10.85
		        }, {
		            name: 'Edge',
		            y: 4.67
		        }, {
		            name: 'Safari',
		            y: 4.18
		        }, {
		            name: 'Sogou Explorer',
		            y: 1.64
		        }, {
		            name: 'Opera',
		            y: 1.6
		        }, {
		            name: 'QQ',
		            y: 1.2
		        }, {
		            name: 'Other',
		            y: 2.61
		        }]
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