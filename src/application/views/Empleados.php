<?php $this->load->view('Helpers/Header');?>
<?php $this->load->view('Helpers/AsideLeft',array('text'=>'Empleado'));?>




<div class="content-wrapper" style="background: white;">
    <section class="content">




                    <div class="row">
            <div class="box">



                <div class="row">
                    <div class="col-sm-3 text-center" id="txt2" name="txt2">
                       <input type="hidden" class="form-control">
                    </div>
                    <div class="col-sm-3 text-center" id="txt2" name="txt2">
                        <span><strong>Filtrar por Nombre</strong></span>
                    </div>
                    <div class="col-sm-3 text-center" id="txt3" name="txt3">
                        <span><strong>Filtro por Telefono</strong></span>
                    </div>
 
                </div>


                <div class="row">
                             <div class="col-sm-3" >
                        <input type="hidden" class="form-control">
                        
                    </div>

                    <div class="col-sm-3" >
                        <input type="text" class="form-control" name="filtro2" id="filtro2">
                        
                    </div>


                           <div class="col-sm-3" >
                        <input type="text" class="form-control" name="filtro3" id="filtro3">
                        
                    </div>





                </div>
                <span id="br"><br></span>
            </div>
        </div>






                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-header">
                                <h2 class="box-title"></h2>
                            </div>
                            <div class="box-body">
                                <table id="Exportar_a_Excel" class="table table-hover no-margin">
                                    <thead>
                                        <tr>
                                            <th>Folio</th>
                                            <th>Nombre</th>
                                            <th>Telefono</th>
                                            <th>Tipo de Cuenta</th>
                                        </tr>
                                    </thead>
                                    <tbody id="contenido_tabla">
                                        
                                      

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>


                <input type="button" value="Agregar" id="Agregar" class="form-control btn-success">



    </section>
</div>





<?php $this->load->view('Helpers/AsideRight');?>
<?php $this->load->view('Helpers/Footer');?>


  
<script src="<?php echo base_url('assets/sources/js/empleado.js'); ?>"></script>

