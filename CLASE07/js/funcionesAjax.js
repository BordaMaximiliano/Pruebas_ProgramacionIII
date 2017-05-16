
function MostrarError()
{
	$.ajax(
		{
			url:"noexiste.php"
		}
		).then(
			funcionUno,funcionDos
		);
		
	//alert("error :(");
	//url:"nexoNoExiste.php",type:"post"

}
//funcion de correcto
function funcionUno(retorno){
	console.info(retorno) ;
}
//funcion de error
function funcionDos(retorno){

	//se llama algo que tenga el id Informe.
	$("#informe").html(retorno.responseText);
	console.info(retorno) ;
}


function MostrarSinParametros()
{
	//url:"nexoTexto.php"});
	$.ajax(
		{
			url:"noexiste.php"
		}
		).then(
			funcionUno,funcionDos
		);
		
	alert("error :(");
	
}

function Mostrar(queMostrar)
{
		//alert(queMostrar);
		$.ajax(
			{	url: 'nexo.php',
				data: {
						queHacer : queMostrar
					} ,
				type: 'post',
				beforeSend: function () {
                        $("#resultado").html("Procesando, espere por favor...");
                },
				success: function(output) {
							alert(queMostrar);
						}
			}

		)
	
		//url:"nexo.php",
		//type:"post",
	
}

function MostarLogin()
{
		//alert(queMostrar);
	var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{queHacer:"MostarLogin"}
	});
	funcionAjax.done(function(retorno){
		$("#principal").html(retorno);
		$("#informe").html("Correcto Form login!!!");	
	});
	funcionAjax.fail(function(retorno){
		$("#botonesABM").html(":(");
		$("#informe").html(retorno.responseText);	
	});
	funcionAjax.always(function(retorno){
		//alert("siempre "+retorno.statusText);

	});
}