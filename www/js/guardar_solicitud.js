$('#formulario').submit(function() { 
	
	 
	// recolecta los valores que inserto el usuario
	var latitud	 = $("#latitud").val();
	var longitud = $("#longitud").val();
	var codigo	 = $("#codigo ").val();
	var dni		 = $("#dni").val();
	var descripcion = $("#descripcion").val();
			
	
  	archivoValidacion = "http://190.117.115.217/observatorio/guarda_solicitud.php?jsoncallback=?"
	$.getJSON( archivoValidacion, { latitud:latitud , longitud:longitud , codigo:codigo , dni:dni , descripcion:descripcion })
	.done(function(respuestaServer) {
		
		alert(respuestaServer.mensaje + "\nGenerado en: " + respuestaServer.hora + "\n" +respuestaServer.generador)
		
		if(respuestaServer.validacion == "ok"){
		  
		 	/// si la validacion es correcta, muestra la pantalla "home"
			//$.mobile.changePage("#home")
			//window.location='index_categorias.html';
		  $.mobile.changePage( "recepciono.html", { transition: "slideup", changeHash: false });
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