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

<script src="<?= base_url('assets/sources/js/graficas/highcharts.js');?>"></script>
<script src="<?= base_url('assets/sources/js/graficas/series-label.js');?>"></script>
<script src="<?= base_url('assets/sources/js/graficas/exporting.js');?>"></script>
<script src="<?= base_url('assets/sources/js/graficas/jquery-3.1.1.min.js');?>"></script>
<script src="<?= base_url('assets/sources/js/graficas/highcharts-3d.js');?>"></script>

<?php $this->load->view('Helpers/AsideRight');?>
<?php $this->load->view('Helpers/Footer');?>
  
<script>
	$(document).ready(function(){
		Gpastel('monto',<?= $retiros ?>,'Compras y ventas','CV');

        var info = '<?= $TimelineRetiros ?>';
        var dataret = [];
        $.each(JSON.parse(info),function(i,item){
            var datainside = [];
            datainside.push(
                Date.UTC(parseInt(item.year),parseInt(item.mes)-1,parseInt(item.dia)),
                parseInt(item.total)
            );
            dataret.push(datainside);
        });

        info = '<?= $TimelineIngresos ?>';
        var dataing = [];
        $.each(JSON.parse(info),function(i,item){
            var datainside = [];
            datainside.push(
                Date.UTC(parseInt(item.year),parseInt(item.mes)-1,parseInt(item.dia)),
                parseInt(item.total)
            );
            dataing.push(datainside);
        });

        info = '<?= $TimelineGanancias ?>';
        var datagan = [];
        $.each(JSON.parse(info),function(i,item){
            var datainside = [];
            datainside.push(
                Date.UTC(parseInt(item.year),parseInt(item.mes)-1,parseInt(item.dia)),
                parseInt(item.total)
            );
            datagan.push(datainside);
        });

		data = [{
        name: "Ingresos",
        color: "blue",
        data: dataing
    }, {
        name: "Retiros",
        color: "red",
        data: dataret
    }, {
        name: "Ganancias",
        color: "green",
        data: datagan
    }];

	Gtimeline('Montos ($)',data,'Ingresos, retiros y ganancias','IRG');

	data = [{
        "name": "Usuarios",
        "colorByPoint": true,
        "data": <?= $users ?>
    }];

	GlineV('Cantidad de usuarios',data,'Usuarios registrados','UR');
	});

	$('.titleSub').click(function(){
		$('.opcionMenuOpen').text("Reportes y estadisticas > "+$(this).text());
	});
</script>

<style>
    .highcharts-menu-item{font-size: 20px !important;}
</style>