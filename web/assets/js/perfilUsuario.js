$(document).ready(function(){
	getAjax('POST','Panel/getDataPerfil',{},"dataUser");
});

$('#changepssw').click(function(){
	$('.float-pssw').removeClass('hidden');
});

$('.btn-danger').click(function(){
	$('.float-pssw').addClass('hidden');
	$("input[type='password']").val('');
});

$('.btn-success').click(function(){
	getAjax('POST','Panel/changePassword',{
		'pssw1': $("input[name='pssw1']").val(),
		'pssw2': $("input[name='pssw2']").val(),
		'pssw3': $("input[name='pssw3']").val()
	},"changePassword");
});

function result(from,data){
	switch(from){
		case "dataUser":
			data = JSON.parse(data);
			$('#inpNombre').val(data.msg.nombre);
			$('#inpEmail').val(data.msg.email);
			break;
		case "changePassword":
			data = JSON.parse(data);
			cleanBotonesModal(true);
			if(data.type == "error")				
				modal('danger','large','¡ERROR!','<strong>'+data.msg+'</strong>',true);
			else{
				modal('success','large',data.msg,null,true);
				$('.float-pssw').addClass('hidden');
				$("input[type='password']").val('');
			}
			break;

		case "menu":
			$('.full-container').html(data);
			break;

	}
}