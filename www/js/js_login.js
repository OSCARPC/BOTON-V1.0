$('#formulario').submit(function() { 
	
	 
	// recolecta los valores que inserto el usuario
	var datosUsuario = $("#usuario").val()
	var datosPassword = $("#password").val()
	
  	archivoValidacion = "http://190.117.115.217/mobile/login_usuario.php?jsoncallback=?"
	$.getJSON( archivoValidacion, { usuario:datosUsuario ,password:datosPassword})
	.done(function(respuestaServer) {
		
		alert(respuestaServer.mensaje + "\nGenerado en: " + respuestaServer.hora + "\n" +respuestaServer.generador)
		
		if(respuestaServer.validacion == "ok"){
		  
		 	/// si la validacion es correcta, muestra la pantalla "home"
			//$.mobile.changePage("#home")
			window.location='index_categorias.html?user='+btoa(respuestaServer.user)+btoa('-'+respuestaServer.dni);
		  //window.parent.frames['mainFrame'].location="../pagwebcast/productos.php?txtbuscador=" + valor;
		  //window.parent.
		}else{
		 // alert("error");
		  /// ejecutar una conducta cuando la validacion falla
		}
  
	})
	return false;
})

function Registrarse(){
	window.location="new_user.html";
	}