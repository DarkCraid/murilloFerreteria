<?php $this->load->view('Helpers/Header');?>
<?php $this->load->view('Helpers/AsideLeft',array('text'=>'Reportes y estadisticas > Ingresos, retiros y ganancias'));?>

<div class="content-wrapper full-container" style="background: white;">
	<div class="content">
		
		<div class="panel-group" id="accordion">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                    <a class="titleSub" data-toggle="collapse" data-parent="#accordion" href="#collapse1">Ingresos, retiros y ganancias</a>
                    </h4>
                </div>
                <div id="collapse1" class="panel-collapse collapse in">
                    <div class="panel-body">
                        <div id="IRG" style="width:99%; height:400px;"></div>
                    </div>
                </div>
            </div>
				
			<div class="panel panel-default">
    			<div class="panel-heading">
  					<h4 class="panel-title">
    				<a class="titleSub" data-toggle="collapse" data-parent="#accordion" href="#collapse2">Compras y ventas</a>
  					</h4>
				</div>
    			<div id="collapse2" class="panel-collapse collapse">
      				<div class="panel-body">
                		<div id="CV" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>
            		</div>
        		</div>
        	</div>

			<div class="panel panel-default">
    			<div class="panel-heading">
      				<h4 class="panel-title">
        			<a class="titleSub" data-toggle="collapse" data-parent="#accordion" href="#collapse3">Usuarios registrados</a>
      				</h4>
    			</div>
    			<div id="collapse3" class="panel-collapse collapse">
      				<div class="panel-body">
                		<div id="UR"></div>
            		</div>
        		</div>
        	</div>
		</div>

	</div>
</div>


<?php $this->load->view('try'); ?>

<?php $this->load->view('Helpers/AsideRight');?>
<?php $this->load->view('Helpers/Footer');?>
  
<script>
	$(document).ready(function(){
		var data = [{
			'name': 'Compras (gastos de inversión)',
			'y': 	5400,
			'color': '#ec7575'
		},{
			'name': 'Ventas (ingresos)',
			'y': 	1656,
			'color': '#5bd05f'
		}];
		Gpastel('monto',data,'Compras y ventas','CV');
		var fecha = new Date();
		data = [{
        name: "Ingresos",
        color: "blue",
        data: [
            [Date.UTC(2018, 5, 24), 1],
            [Date.UTC(2018, 5, 29), 2],
            [Date.UTC(2018, 6,  3), 3],
            [Date.UTC(2018, 6,  4), 4]
        ]
    }, {
        name: "Retiros",
        color: "red",
        data: [
            [Date.UTC(2018, 5, 24), 4],
            [Date.UTC(2018, 5, 29), 4],
            [Date.UTC(2018, 6,  3), 5],
            [Date.UTC(2018, 6,  4), 2]
        ]
    }, {
        name: "Ganancias",
        color: "green",
        data: [
            [Date.UTC(2018, 5, 24), 6],
            [Date.UTC(2018, 5, 29), 6],
            [Date.UTC(2018, 6,  3), 4],
            [Date.UTC(2018, 6,  4), 2]
        ]
    }];

	Gtimeline('Montos ($)',data,'Ingresos, retiros y ganancias','IRG');

	data = [
        {
            "name": "Usuarios",
            "colorByPoint": true,
            "data": [
                {
                    "name": "Clientes frecuentes",
                    "y": 4,
                    "drilldown": "Clientes frecuentes"
                },
                {
                    "name": "Empleados",
                    "y": 2,
                    "drilldown": "Empleados"
                },
                {
                    "name": "Administradores",
                    "y": 1,
                    "drilldown": "Administradores"
                }
            ]
        }
    ];

	GlineV('Cantidad de usuarios',data,'Usuarios registrados','UR');
	});

	$('.titleSub').click(function(){
		$('.opcionMenuOpen').text("Reportes y estadisticas > "+$(this).text());
	});
</script>


