<?php $this->load->view('Helpers/Header');?>
<?php $this->load->view('Helpers/AsideLeft');?>

  


<link rel="stylesheet" href="<?= base_url('assets/sources/css/global.css'); ?>">
<link rel="stylesheet" href="<?= base_url('assets/sources/css/tableGlobal.css'); ?>">

<div class="content-wrapper" style="background: white;">
    <section class="content">

        <h1 class="titulo">Lista de Proveedores</h1>
        <div class="container  containerTable">
            <table id="Exportar_a_Excel" class="table table-hover no-margin">
                <thead>
                    <tr>
                        <th>Listado de proveedores</th>
                    </tr>
                </thead>
                <tbody id="contenido_tabla"></tbody>
                    <tr class="trStyle">
                        <td></td>
                    </tr>
                    <tr class="trStyle">
                        <td></td>
                    </tr>
                    <tr class="trStyle">
                        <td></td>
                    </tr>
                </table>
        </div>
    </section>
</div>






<?php $this->load->view('Helpers/AsideRight');?>
<?php $this->load->view('Helpers/Footer');?>


  


