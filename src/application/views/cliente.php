<?php $this->load->view('Helpers/Header');?>
<?php $this->load->view('Helpers/AsideLeft',array('text'=>'Inventario'));?>




<div class="content-wrapper" style="background: white;">
    <section class="content">




                    <div class="row">
            <div class="box">



                <div class="row">
                    <div class="col-sm-4 text-center" id="txt1" name="txt1">
                        <span><strong>Filtro por Tipo</strong></span>
                    </div>
                    <div class="col-sm-4 text-center" id="txt2" name="txt2">
                        <span><strong>Filtrar por Precio</strong></span>
                    </div>
                    <div class="col-sm-4 text-center" id="txt3" name="txt3">
                        <span><strong>Filtro por nombre</strong></span>
                    </div>
 
                </div>


                <div class="row">
                    <div class="col-sm-4">
                        <select class="form-control" name="filtro" id="filtro">
                            <option value="0">-Seleccionar-</option>
                            <option value="1">No. solicitud</option>
                            <option value="2">Fecha</option>
                            <option value="3">Institución</option>
                            <option value="4">Solicitud Normal</option>
                            <option value="5">Solicitud Re-Activada</option>
                        </select>
                    </div>


                    <div class="col-sm-4 name="filtro3" id="filtro3">
                        <select class="form-control" name="filtro2" id="filtro2">
                            <option value="0">-Seleccionar-</option>
                        </select>
                        
                    </div>


                           <div class="col-sm-4" name="filtro3" id="filtro3">
                        <input type="text" class="form-control">
                        
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
                                            <th>Cantidad</th>
                                            <th>Compra</th>
                                            <th>IVA</th>
                                            <th>Venta</th>
                                        </tr>
                                    </thead>
                                    <tbody id="contenido_tabla">
                                        
                                       <tr>
                                        <td><a onclick="openModal(1)" style="cursor:pointer;">F0001</a></td>  
                                        <td>Tornillo 1/4</td>
                                        <td>52</td>
                                        <td>$58.00</td>
                                        <td>10%</td>
                                        <td>$60.00</td>
                                        </tr>

                                        <tr>
                                        <td><a onclick="openModal(2)" style="cursor:pointer;">F0002</a></td>  
                                        <td>Taquete 1/4</td>
                                        <td>52</td>
                                        <td>$58.00</td>
                                        <td>10%</td>
                                        <td>$60.00</td>
                                        </tr>


                                        <tr>
                                        <td><a onclick="openModal(3)" style="cursor:pointer;">F0003</a></td>  
                                        <td>Huza 1/4</td>
                                        <td>52</td>
                                        <td>$58.00</td>
                                        <td>10%</td>
                                        <td>$60.00</td>
                                        </tr>


                                        <tr>
                                        <td><a onclick="openModal(4)" style="cursor:pointer;">F0004</a></td>  
                                        <td>Clavo 1/4</td>
                                        <td>52</td>
                                        <td>$58.00</td>
                                        <td>10%</td>
                                        <td>$60.00</td>
                                        </tr>


                                        <tr>
                                        <td><a onclick="openModal(5)" style="cursor:pointer;">F0005</a></td>  
                                        <td>Tuerca 1/4</td>
                                        <td>52</td>
                                        <td>$58.00</td>
                                        <td>10%</td>
                                        <td>$60.00</td>
                                        </tr>


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

