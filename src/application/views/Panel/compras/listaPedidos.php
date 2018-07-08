<script> $('.opcionMenuOpen').text('Compras > Lista de pedidos');</script>
<div class="row">
    <div class="container-fluid">
    	<section class="optionsTop col-xs-12">
            <button class="btn btn-info btn-lg subMenu" id="nuevoPedido">Nuevo pedido</button>
            <button class="btn btn-info btn-lg subMenu" disabled id="listaPedidos">Lista de pedidos</button>
        </section> 
        <section id="content-dinamic">
			<div class="col-xs-12">
				<table class="table table-hover table-stripet">
					<thead>
						<tr>
							<th>FOLIO</th>
							<th>MATERIAL</th>
							<th>CANTIDAD</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>asd</td>
							<td>asd</td>
							<td>asd</td>
						</tr>
						<tr>
							<td>asd</td>
							<td>asd</td>
							<td>asd</td>
						</tr>
						<tr>
							<td>asd</td>
							<td>asd</td>
							<td>asd</td>
						</tr>	
					</tbody>
				</table>
			</div>
		</section>
	</div>
</div>

<script>
    $('.subMenu').click(function(){
	    getAjax('POST','Compras/getView',{'page':this.id},'view');
	});
</script>