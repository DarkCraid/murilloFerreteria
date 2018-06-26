<?php $this->load->view('Helpers/Header');?>
<?php $this->load->view('Helpers/AsideLeft');?>

  




<div class="content-wrapper" style="background: white;">
    <section class="content">

<!--asdasd-->
        <div class="panel-group" id="accordion">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Venta</a>
                    </h4>
                </div>
                <!-- INFORMACIÓN GENERAL DE INSTITUCIÓN-->
                <div id="collapse1" class="panel-collapse collapse in">
                <div class="panel-body">
                <!--<p>*********</p>-->


                <section class="row">
                <div class="container-fluid">


                <div class="col-md-12">
                <div class="row form-group">
                <div class="col-sm-4 col-md-3 col-lg-2 text-right">
                <label for="tipo" class="col-form-label mr-2 control-label" id="label_representanteLegal">NOmbre del producto: </label>
                </div>
                <div class="col-sm-12 col-md-9 col-lg-9">
                <input type="text" name="representanteLegal" id="representanteLegal" class="form-control" value="" disabled>
                </div>
                </div>
                </div>
                </div>





                <div class="container-fluid">


                <div class="col-md-12">
                <div class="row form-group">
                <div class="col-sm-4 col-md-3 col-lg-2 text-right">
                <label for="tipo" class="col-form-label mr-2 control-label" id="label_representanteLegal">Cantidada: </label>
                </div>
                <div class="col-sm-12 col-md-9 col-lg-9">
                <input type="text" name="representanteLegal" id="representanteLegal" class="form-control" value="" disabled>
                </div>
                </div>
                </div>
                </div>





                <div class="container-fluid">


                <div class="col-md-12">
                <div class="row form-group">
                <div class="col-sm-4 col-md-3 col-lg-2 text-right">
                <label for="tipo" class="col-form-label mr-2 control-label" id="label_representanteLegal">Nombre del empleado: </label>
                </div>
                <div class="col-sm-12 col-md-9 col-lg-9">
                <input type="text" name="representanteLegal" id="representanteLegal" class="form-control" value="" disabled>
                </div>
                </div>
                </div>
                </div>





                <div class="container-fluid">


                <div class="col-md-12">
                <div class="row form-group">
                <div class="col-sm-4 col-md-3 col-lg-2 text-right">
                <label for="tipo" class="col-form-label mr-2 control-label" id="label_representanteLegal">Cliente frecuente: </label>
                </div>
                <div class="col-sm-12 col-md-9 col-lg-9">
               <select name="" id="">
                   <option value="si">si</option>
                   <option value="no">no</option>
               </select>
                </div>
                </div>
                </div>
                </div>




                <div class="container-fluid">


                <div class="col-md-12">
                <div class="row form-group">
                <div class="col-sm-4 col-md-3 col-lg-2 text-right">
                <label for="tipo" class="col-form-label mr-2 control-label" id="label_representanteLegal">Cliente: </label>
                </div>
                <div class="col-sm-12 col-md-9 col-lg-9">
                     <select name="" id="">
                   <option value="0">Adrian Zamudio</option>
                   <option value="1">Fernanda Murillo</option>
                   <option value="2">Daniel Perez</option>
                   <option value="3">Tom Eliezer</option>
               </select>
                </div>
                </div>
                </div>
                </div>
                </section>


            </div>
        </div>

    </section>
</div>






<?php $this->load->view('Helpers/AsideRight');?>
<?php $this->load->view('Helpers/Footer');?>


  


