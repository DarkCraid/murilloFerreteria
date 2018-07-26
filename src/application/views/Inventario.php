<?php $this->load->view('Helpers/Header');?>
<?php $this->load->view('Helpers/AsideLeft',array('text'=>'Inventario'));?>




<div class="content-wrapper" style="background: white;">
    <section class="content">




                    <div class="row">
            <div class="box">



                <div class="row">
                    <div class="col-sm-4 text-center" >
                      <!--  <span><strong>Filtro por Tipo</strong></span>-->
                    </div>
                    <div class="col-sm-4 text-center" >
                        <span><strong>Filtro por nombre</strong></span>
                    </div>
                    <div class="col-sm-4 text-center" >
                        <!--<span><strong>Filtrar por Precio</strong></span>-->
                    </div>
 
                </div>


                <div class="row">
                    <div class="col-sm-4">

                      <!--  <select class="form-control" name="filtro" id="filtro">
                            <option value="0">-Seleccionar-</option>
                        </select>-->
                    </div>


                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="filtro3" id="filtro3">
                        
                        
                    </div>


                           <div class="col-sm-4" >
                        <!--<select class="form-control" name="filtro2" id="filtro2">
                            <option value="0">-Seleccionar-</option>
                        </select>-->
                        
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
                                            <th>Articulo</th>
                                            <th>Costo</th>
                                            <th>Cantidad</th>
                                        </tr>
                                    </thead>
                                    <tbody id="contenido_tabla">
                                        
                                      

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>



    </section>
</div>






<?php $this->load->view('Helpers/AsideRight');?>
<?php $this->load->view('Helpers/Footer');?>


  
<script src="<?php echo base_url('assets/sources/js/inventario.js'); ?>"></script>

