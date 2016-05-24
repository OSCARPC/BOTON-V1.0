$('#formulario_usuario').submit(function() {  
	// recolecta los valores que inserto el usuario
 			 var dni		=$("#dni").val();
			 var datos		=$("#datos").val();
			 var email		=$("#email").val();
			 var celular    =$("#celular").val();
			 var direccion  =$("#direccion").val();	
		
		 if(dni==""){
			 alert("Ingrese su Documento de Identidad!");
			 return false;
		 }else if(datos==""){
			  alert("Ingrese su Datos personales!");
			  return false;
		 }else if(email==""){
			  alert("Ingrese su E-mail !");
			  return false;
		 }else if(direccion==""){
			  alert("Ingrese su Direccion o referencia!");
			  return false;
		 }else if(celular==""){
			  alert("Ingrese su numero de Celular");
			  return false;
			 }
		
  	archivoValidacion = "http://190.117.115.217/mobile/web_service_insert_usuarios.php?jsoncallback=?"

	$.getJSON( archivoValidacion, { dni:dni ,datos:datos ,email:email ,celular:celular , direccion:direccion})
	.done(function(respuestaServer) {
		
		alert(respuestaServer.mensaje + "\nAlerta enviada: " + respuestaServer.hora + "\n" +respuestaServer.generador)
		
		if(respuestaServer.validacion == "ok"){
		 	/// si la validacion es correcta, muestra la pantalla "home"
			//$.mobile.changePage("#principal")
			window.location.href='index.html';
		}else{
		  /// ejecutar una conducta cuando la validacion falla
		}
  
	})
	return false;
})

function regresar_inicio(){
	window.location.href="index.html";
	}