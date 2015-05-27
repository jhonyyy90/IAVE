<?php 
$user=$_COOKIE["user"];

?>
<!DOCTYPE html>

<html>
	<head><meta http-equiv="Content-Type" content="text/html; charset=euc-jp">
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>App panico</title>
		<link rel="stylesheet" href="themes/panic.min.css" />
		<link rel="stylesheet" href="themes/jquery.mobile.icons.min.css" />
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
				div[data-role="content"] {
    width: 90%;
    margin: 0px;
    padding: 0px;
}
	   	</style>
        
	</head>
	<body>
<div data-role="page" id="page" style="background-image:url(img/fondo1.jpg); background-size:100%;" align="center" >
		<br><br><br><br><br><br><br>
     <div data-role="content" data-theme="a" widht="60%"> 
           <font face="Century Gothic"> <h3>Por seguridad vuelve a introducir tu contraseña</h3></font>
            <div data-role="content">
            <form id="form1" method="post" action="validaconfig.php">
<input type="text" width="10" placeholder="Usuario/correo" id="user" name="usuario" data-theme="b" data-inline="true" data-position="fixed" data-mini="true" cols="20" value="<?php echo $user; ?>">
<!--<input type="checkbox" name="guardar_clave" value="1"> Memorizar el usuario en este ordenador-->
 <input type="text" placeholder="Password" data-theme="b" name="password" data-inline="true" data-mini="true" >
<input type="submit" id="save" data-inline="true" value="iniciar sesion">
</form>

 </div>
             <font face="Century Gothic">O <a href="inicio2">Cancelar</a></font><br><br>
          </div>

	</div>
</div>
	</body>

</html>