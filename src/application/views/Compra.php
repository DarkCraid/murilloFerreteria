<?php $this->load->view('Helpers/Header');?>
<?php $this->load->view('Helpers/AsideLeft');?>

  




<div class="content-wrapper" style="background: white;">
    <section class="content">

<!--asdasd-->
        <div class="panel-group" id="accordion">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Compra</a>
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
                <label for="tipo" class="col-form-label mr-2 control-label" id="label_representanteLegal">Nombre del producto: </label>
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
                <label for="tipo" class="col-form-label mr-2 control-label" id="label_representanteLegal">Cantidad: </label>
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
                <label for="tipo" class="col-form-label mr-2 control-label" id="label_representanteLegal">Nombre del proveedor: </label>
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
                <a class="btn btn-sm btn-success btn-flat pull-right" id="Dictamen" style="padding: 5px 30px; font-weight: bold; font-size: 1em; border-radius: 5px;" >Realizar Compra</a>
                </div>
                </div>
                </div>
                </section>
                </section>


            </div>
        </div>

    </section>
</div>






<?php $this->load->view('Helpers/AsideRight');?>
<?php $this->load->view('Helpers/Footer');?>


  


