<?php $this->load->view('Helpers/Header');?>
<?php $this->load->view('Helpers/AsideLeft');?>

  




<div class="content-wrapper" style="background: white;">
    <section class="content">

<!--asdasd-->
        <div class="panel-group" id="accordion">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Proveedores</a>
                    </h4>
                </div>
                <!-- INFORMACIÓN GENERAL DE INSTITUCIÓN-->
                <div id="collapse1" class="panel-collapse collapse in">
                <div class="panel-body">
                <!--<p>*********</p>-->


                <section class="row">
                <div class="container-fluid">


                <table id="Exportar_a_Excel" class="table table-hover no-margin">
                <thead>
                <tr>
                <th>Dato 1</th>
                <th>Dato 2</th>
                <th>Dato 3</th>
                <th>Dato 4</th>
                <th>Dato 5</th>
                </tr>
                </thead>
                <tbody id="contenido_tabla"></tbody>
                <tr >
                <td>lorem</td>
                <td>lorem</td>
                <td>lorem</td>
                <td>lorem</td>
                <td>lorem</td>
                </tr>
                </table>


                </div>
                </section>


            </div>
        </div>

    </section>
</div>






<?php $this->load->view('Helpers/AsideRight');?>
<?php $this->load->view('Helpers/Footer');?>


  


