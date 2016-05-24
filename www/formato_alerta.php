<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="format-detection" content="telephone=no" />
        <meta name="msapplication-tap-highlight" content="no" />
        <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height, target-densitydpi=device-dpi" />
        <link rel="stylesheet" type="text/css" href="css/index.css" />
		<link rel="stylesheet" type="text/css"  href="css/jquery.mobile-1.4.5.css">
		   <link rel="stylesheet" type="text/css"  href="css/jquery.mobile.theme-1.4.5.css">
		   <link rel="stylesheet" type="text/css"  href="css/temafsc_3.css">
		   <link rel="stylesheet"  type="text/css" href="css/jquery.mobile.external-png-1.4.5.css">
		   <link rel="stylesheet" type="text/css"  href="css/jquery.mobile.icons-1.4.5.css">
		   <link rel="stylesheet" type="text/css"  href="css/jquery.mobile.inline-png-1.4.5.css"> 
		   <link rel="stylesheet" type="text/css"  href="css/jquery.mobile.structure-1.4.5.css">
        <title>Bot&oacute;n de Panico</title>
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
       <script type="text/javascript">
var x=document.getElementById("demo");
function cargarmap(){
navigator.geolocation.getCurrentPosition(showPosition,showError);
function showPosition(position)
  {
  lat=position.coords.latitude;
  lon=position.coords.longitude;
  latlon=new google.maps.LatLng(lat, lon)
  mapholder=document.getElementById('mapholder')
  mapholder.style.height='250px';
  mapholder.style.width='500px';
  var myOptions={
  center:latlon,zoom:10,
  mapTypeId:google.maps.MapTypeId.ROADMAP,
  mapTypeControl:false,
  navigationControlOptions:{style:google.maps.NavigationControlStyle.SMALL}
  };
  var map=new google.maps.Map(document.getElementById("mapholder"),myOptions);
  var marker=new google.maps.Marker({position:latlon,map:map,title:"You are here!"});
  }
function showError(error)
  {
  switch(error.code) 
    {
    case error.PERMISSION_DENIED:
      x.innerHTML="Denegada la peticion de Geolocalización en el navegador."
      break;
    case error.POSITION_UNAVAILABLE:
      x.innerHTML="La información de la localización no esta disponible."
      break;
    case error.TIMEOUT:
      x.innerHTML="El tiempo de petición ha expirado."
      break;
    case error.UNKNOWN_ERROR:
      x.innerHTML="Ha ocurrido un error desconocido."
      break;
    }
  }}
  

	
</script>
    </head>
    <body onLoad="cargarmap();">
   
	<div data-role="page" id="inicio">

     <div data-role="content">
     		<?php
			  $codigo  =$_GET['codigo'];
			  $latitud =$_GET['latitud'];
			  $longitud=$_GET['longitud'];
			  $dni=$_GET['dni'];
			  
			  if($codigo=='00001'){
				    $img="drogas.png";
				 }elseif($codigo=='00002'){
					 $img="robo.png";
				 }elseif($codigo=='00003'){
					 $img="pandillaje.png";					 
				}elseif($codigo=='00004'){
					$img="violencia.png";
				}elseif($codigo=='00005'){
					$img="sospechoso.png";
			    }elseif($codigo=='00006'){
					$img="robo_casa.png";
				}elseif($codigo=='00007'){
					$img="robo_vehicular.png";
				}elseif($codigo=='00008'){
					$img="emergencia.png";
				}elseif($codigo=='00009'){
					$img="otros.png";
				}
			?>
          
  <center><img src="img/<?php echo $img; ?>"></center>	
		    <form id="formulario" >
            	   <input type="hidden" id="latitud" name="latitud" value="<?php echo $latitud;?>">
                   <input type="hidden" id="longitud" name="longitud" value="<?php echo $longitud;?>">
                   <input type="hidden" id="dni" name="dni" value="<?php echo $dni; ?>">
                   <input type="hidden" id="codigo" name="codigo" value="<?php echo $codigo; ?>">
    			   <input id="descripcion" name="descripcion" placeholder="Escribir alguna descripci&oacute;n" style="height:60px;text-wrap:break-word;">
      			<button type="submit"  id="botonLogin" data-icon="check"   style="background-color:#0e70d8;color:#DFDFDF;">ENVIAR INFORMACI&Oacute;N</button>    
    		</form>	
    	</div>
	
</div>
  <br>
  <script type="text/javascript" src="js/jquery-2.1.3.min.js"></script>		
        <script type="text/javascript" src="js/jquery.mobile-1.4.5.js"></script>		
        <script type="text/javascript" src="cordova.js"></script>
        <script type="text/javascript" src="js/index.js"></script>
		<script type="text/javascript" src="js/guardar_solicitud.js"></script>        
        <script type="text/javascript">
            app.initialize();
        </script>
    </body>
</html>
