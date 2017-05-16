function validarLogin()
{
		var varUsuario=$("#correo").val();
		var varClave=$("#clave").val();
		var recordar=$("#recordarme").is(':checked');

		alert(varUsuario);
		
	$("#informe").html("<img src='imagenes/ajax-loader.gif' style='width: 30px;'/>");
	
	$.ajax(
			{	url: "php/validarUsuario.php",
				data: {
						usuario : varUsuario,
						clave	: varClave,
						recordarme : recordar					
						},
				type: "post",
				//beforeSend: function () {
                //        $("#resultado").html("Procesando, espere por favor...");
                //},
				//success: function(output) {
				//			alert(queMostrar);
				//		}
			}
	)
	.then(
			loginSuccess,loginFail
		);
	
	//	url:"php/validarUsuario.php",
	//	type:"post",
	


		
			// si esta logeado le habilito los botones 
			//hay que ver como obtener los valores de retorno del php
			//if(estalogueado){	
				//MostarBotones();
			//	MostarLogin();

			//	$("#BotonLogin").html("Ir a salir<br>-Sesión-");
			//	$("#BotonLogin").addClass("btn btn-danger");				
			//	$("#usuario").val("usuario: "+retorno);
			//}else
			//{
			//	$("#informe").html("usuario o clave incorrecta");	
			//	$("#formLogin").addClass("animated bounceInLeft");
		//	}
	//error de ajax muestro lo siguiente
	//	$("#botonesABM").html(":(");
	//	$("#informe").html(retorno.responseText);	

	
}

function loginSuccess(retorno){

	alert(retorno);
	// si esta logeado le habilito los botones 
	//if(????????){	
		MostarBotones();
		MostarLogin();

		$("#BotonLogin").html("Ir a salir<br>-Sesión-");
		$("#BotonLogin").addClass("btn btn-danger");				
		$("#usuario").val("usuario: "+retorno);
	//}else
	//{
	//	$("#informe").html("usuario o clave incorrecta");	
	//	$("#formLogin").addClass("animated bounceInLeft");

}

function loginFail(retorno){

	alert(retorno);
	$("#botonesABM").html(":(");
	$("#informe").html(retorno.responseText);	

}

function deslogear()
{	
	
	//	url:"php/deslogearUsuario.php",
	//	type:"post"		

}
function MostarBotones()
{	
	//	url:"nexo.php",
	//	type:"post",
	//	data:{queHacer:"MostarBotones"}

	//asignar el retorno a botones ABM
	$.ajax(
			{	url: "nexo.php",				
				type: "post",
				data: {queHacer:"MostarBotones"	}
				//beforeSend: function () {
                //        $("#resultado").html("Procesando, espere por favor...");
                //},
				//success: function(output) {
				//			alert(queMostrar);
				//		}
			}
	)
	.then(
			loginSuccess,loginFail
		);

}
