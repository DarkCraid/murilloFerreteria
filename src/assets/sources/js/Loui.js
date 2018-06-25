$(function(){
	$('#guardar').click(function (event){
		event.preventDefault();
		$.ajax({
			url:$("form").attr("action"),
			type:$("form").attr("method"),
			data:$("form").serialize(),
			success: function (respuesta){
				alert ("respuesta");
			}
		});
	});	
});