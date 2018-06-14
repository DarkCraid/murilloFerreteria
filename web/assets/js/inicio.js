$('#iniciar').click(function(){
	cleanBotonesModal(true);
	getAjax('POST','Inicio/getLogin',{'page': 'login'},$(this).text());
});

function result(from,data){
	switch(from){
		case "Iniciar sesión":
			botonesModal.push({ 
			    label: 'Entrar',
			        cssClass: 'btn-success',
			        action: function(dialogItself){
			        	dataLogin();
			        }
			});
			modal("success","large",from,"<section>"+data+"</section>",false);
			break;

		case "loginMe":
			data = JSON.parse(data);
			if(data.type == "error"){
				$('.error').children('strong').text(data.msg);
			}else
				getAjax('POST','Panel',{},null);
			break;
	}
}

var dataLogin = function(){
	getAjax('POST','Inicio/loginMe',{
		'user': $('#user').val(),
		'pssw': $('#pssw').val()
		},
		"loginMe"
	);
}

//MENÚ
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}