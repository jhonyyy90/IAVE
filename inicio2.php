<!DOCTYPE html>
<html>
	<head><meta http-equiv="Content-Type" content="text/html; charset=euc-jp">
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Boton de panico</title>
		<link rel="stylesheet" href="panic/themes/Panic-Button.min.css" />
		<link rel="stylesheet" href="panic/themes/jquery.mobile.icons.min.css" />
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.0/jquery.mobile.structure-1.4.0.min.css" />
		<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.js"></script>
        <style>
			#bg {
  				position: fixed;
  				z-index: -1;
  				top: 0;
   				 left: 0;
   				 width: 100%;
  				}
  			#bg2 {
   				top: 0;
  				left: 0;
  				width: 100%;
  				}
	   	</style>
        
<!--< ?php 
$user=$_GET['user'];
$pass=$_GET['pass'];
$expire=time()+60*60*24*365;
setcookie("user", $user, $expire);
setcookie("pass", $pass, $expire);
? >-->
	
      <script type="text/javascript">
			$(document).on("pageshow","#page2",function(){
  			alert("Mensaje Enviado");
			});
function getUrlVars() {
	var vars = {};
	var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
		vars[key] = value;
	});
	return vars;
	}

	var tipo;
	function sendP() {
		tipo ="policia";
		var user = getUrlVars()["user"];
		window.location.href = 'geo.html?user='+user+'&type='+tipo;
		//window.location.href = 'geo.html';
	}
	function sendA() {
			tipo ="ambulancia";
		var user = getUrlVars()["user"];
		window.location.href = 'geo.html?user='+user+'&type='+tipo;
		//window.location.href = 'geo.html';
	}
	function sendB() {
			tipo ="bomberos";
		var user = getUrlVars()["user"];
		window.location.href = 'geo.html?user='+user+'&type='+tipo;
		//window.location.href = 'geo.html';
	}
	function sendAl() {
			tipo ="alerta";
		var user = getUrlVars()["user"];
		window.location.href = 'geo.html?user='+user+'&type='+tipo;
		//window.location.href = 'geo.html';
	}
		</script> 
	</head>
	<body>
		
        
        <div data-role="page" data-theme="b" id="page" >
			<div data-role="header" data-position="fixed">
             <img id="bg2" src="img/logo.png"  />
			</div>
			<div data-role="content" data-theme="a">
<p><a href="loginconf.php" data-role="button" data-inline="true" style="float:right">Configuraciones</a></p>
				<p>Solo usar en caso de emergencia</p>
				<p>Bienvenido:<?php echo $_COOKIE["user"]; ?></p>
                <!--<p>Contraseña:< ? php echo $_COOKIE["pass"]; ?></p>-->
				<p>Bienvenido al boton de panico 

<img scr="image" src="panic/img/icon1.png" width="70%"  style="float:left" onClick="sendP()">


<img type="image" src="panic/img/icon3.png" width="30%"  style="float:right" onClick="sendA()">


<img type="image" src="panic/img/icon4.png" width="30%"  style="float:right" onClick="sendB()" >

<br><br>
<img type="image" src="panic/img/icon2.png" width="90%"  class="center" onClick="sendAl()" >

				
                
                
              <p>En caso de no dar sus datos, no podra utilizar la aplicacion</p>
			</div>

		</div>
        
        
        
        
	</body>
</html>