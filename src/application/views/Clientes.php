<?php $this->load->view('Helpers/Header');?>
<?php $this->load->view('Helpers/AsideLeft',array('text'=>'Cliente'));?>




<div class="content-wrapper" style="background: white;">
    <section class="content">




                    <div class="row">
            <div class="box">



                <div class="row">
                    <div class="col-sm-4 text-center" id="txt1" name="txt1">
                        <span><strong>Filtro por Puntos</strong></span>
                    </div>
                    <div class="col-sm-4 text-center" id="txt2" name="txt2">
                        <span><strong>Filtrar por Nombre</strong></span>
                    </div>
                    <div class="col-sm-4 text-center" id="txt3" name="txt3">
                        <span><strong>Filtro por Telefono</strong></span>
                    </div>
 
                </div>


                <div class="row">
                    <div class="col-sm-4">
                        <select class="form-control" name="filtro" id="filtro">
                            <option value="0">-Seleccionar-</option>
                            <option value="1">0 - 100</option>
                            <option value="2">101 - 500</option>
                            <option value="3">501 - 800</option>
                            <option value="4">801 - 1000</option>
                            <option value="5">1001 - Más</option>
                        </select>
                    </div>


                    <div class="col-sm-4 name="filtro3" id="filtro3">
                        <input type="text" class="form-control">
                        
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
                                            <th>Nombre</th>
                                            <th>Telefono</th>
                                            <th>Puntos</th>
                                        </tr>
                                    </thead>
                                    <tbody id="contenido_tabla">
                                        
                                       <tr>
                                        <td><a onclick="openModal(1)" style="cursor:pointer;">F0001</a></td>  
                                        <td>Zero Two</td>
                                        <td>6691122136</td>
                                        <td>120</td>
                                        </tr>

                                        <tr>
                                        <td><a onclick="openModal(2)" style="cursor:pointer;">F0002</a></td>  
                                        <td>Mitzuki</td>
                                        <td>6691775588</td>
                                        <td>54</td>
                                        </tr>


                                        <tr>
                                        <td><a onclick="openModal(3)" style="cursor:pointer;">F0003</a></td>  
                                        <td>Asuna</td>
                                        <td>6691663311</td>
                                        <td>895</td>
                                        </tr>


                                        <tr>
                                        <td><a onclick="openModal(4)" style="cursor:pointer;">F0004</a></td>  
                                        <td>Stela</td>
                                        <td>6691774411</td>
                                        <td>74</td>
                                        </tr>


                                        <tr>
                                        <td><a onclick="openModal(5)" style="cursor:pointer;">F0005</a></td>  
                                        <td>Maki-Chan</td>
                                        <td>6691995511</td>
                                        <td>1313</td>
                                        </tr>


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


  
<script src="<?php echo base_url('assets/sources/js/cliente.js'); ?>"></script>

