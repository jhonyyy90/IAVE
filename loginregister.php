   <!-- COMERE APP -->
<?php 
		
		//require('conectaloca.php');
//2 consultar el usuario en la tabla users
$sql="select * from users where usuario = '".$_COOKIE["user"]."'";
$result=mysql_query($sql);
//3 contar los registros encontrados
$contar=mysql_num_rows($result); 
//4 si encontro usuario en la tabla valida el password y redirecciona
$row=mysql_fetch_array($result);
$passwordsql=$row[password];

?>
<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
         <link href="favicon.ico" rel="icon" type="image/x-icon" />
		<title>Capufe-Factura</title>
		<link rel="stylesheet" href="themes/panic.min.css" />
		<link rel="stylesheet" href="themes/jquery.mobile.icons.min.css" />
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.0/jquery.mobile.structure-1.4.0.min.css" />
        
		
        
		<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.js"></script>
        <script type="text/javascript">

/*		function iniciate() { 
		 var myForm = $(this).getElementById('form1');
		 var user= myForm.elements['user'].value;
		
       //var user = document.getElementById('user').value;
		//window.location.href = '../panic/index.html?user='+user;
		window.location.href = '../panic/index.html'; 
    	}*/
		function pass(){
		 var myForm = document.getElementById('user').value;
		window.location.href = '../capufe/facturacion.php?user='+myForm;
		}
		
		</script>       
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
<div data-role="page" id="page" style="background-image:url(fondo1.jpg); background-size:100%;" align="center" >
		<br><br><br><br><br><br><br>
     <div data-role="content" data-theme="b" widht="60%"> 
           <font face="Century Gothic"> <h3>Aun no ha iniciado sesion</h3></font>
            <font face="Century Gothic">Por favor proporcione sus datos aqui: <br>
            (en caso de no tenerlos registrese)</font>
            <div data-role="content">
            <form id="form1" method="post" action="markers.php" data-ajax="false" >
<input type="text" width="10" placeholder="Usuario" id="user" name="usuario" data-theme="b" data-inline="true" data-position="fixed" data-mini="true" cols="20">
<!--<input type="checkbox" name="guardar_clave" value="1"> Memorizar el usuario en este ordenador-->
 <input type="password" placeholder="Password" data-theme="b" name="password" data-inline="true" data-mini="true" >
<input type="submit" id="save" data-inline="true" value="iniciar sesion">
</form>

 </div>
            <br>
       
             <font face="Century Gothic">O <a href="#page2">Registro</a></font>     
            <br><br>
          </div>

	</div>
</div>

<div data-role="page" id="page2" style="background-image:url(fondo1.jpg);background-repeat:no-repeat; background-size:100%;" align="center" >
<br><br><br><br><br><br>
	<div data-role="content" data-theme="b">	
		<div data-role="content" data-theme="b">
       <font face="Century Gothic" size="+3">Registro</font>
				<p>Introduzca los datos siguientes:</p>
                
                <div data-role="content">
                <form method="post" action="insertar.php" name="form1" id="form1">
<input type="text" name="usuario" placeholder="Nombre" data-theme="b" data-inline="true" data-mini="true"  >
<input type="password" name="contrasena" placeholder="contraseña" data-theme="b" data-inline="true" data-mini="true"  >
<input type="text" name="email" placeholder="correo" data-theme="b" data-inline="true" data-mini="true"  >		           
    <div data-role="collapsible">
    <p>1. Ingrese un nombre de usuario (en caso de que ya no este disponible ingrese uno diferente)
    </p>
        <p>2. Ingrese una contraseña que debe tener como mínimo 8 caracteres (puede ingresar números y letras mayúsculas o minúsculas).
    </p>
    <p>3. Este campo debe coincidir con el campo anterior</p>
    <p>4. El correo electrónico debe tener formato correcto(sin espacios en blancos y minúsculas)</p>
    <p>5. Ningún campo debe estar vacío.</p>
    <p>UNA VEZ LLENOS LOS 4 CAMPOS, DE CLICK EN EL BOTON<BR> 
“REGISTRARSE”</p>
    <p><h3>Terminos y condiciones</h3></p>
</div>
                <!--<input type="submit" name="guardar" value="Guardar" onmouseUp="alert('Tus contactos han sido guadados')" >-->
<div data-role="fieldcontain">
    <input type="submit" name="button" id="idbutton" value="REGISTRARSE"/>
</div></form>
</div>

               <!-- <p><a href="#page" data-role="button">Guardar</a></p>-->
                <p>PARA REALIZAR SU REGISTRO, POR FAVOR LLENE LOS SIGUIENTES </p>
                <p>CAMPOS TOMANDO EN CUENTA LO QUE ESTA EN TERMINOS Y CONDICIONES:</p>
		</div>
	</div>
</div>

<div data-role="page" id="page3">
	<div data-role="header" data-position="fixed"> <img id="bg2" src="img/logo.png"  /> </div>
	<div data-role="content" data-theme="b">	
		<div data-role="content" data-theme="b">
				<p>Login o registro</p>
				<p>Introduce tu usuario</p><br><br>
                <form method="POST" action="redireccionar.php">
                <input type="text" name="user">usuario</input>
                <input type="text" name="cont">Contraseña</input>
                <!--input type="submit" name="guardar" value="Guardar">-->
                <!--<a href="http://iaasagroup.com.mx/panic#main" rel="external">continuar</a>-->
                </form>
                <p><a href="http://iaasagroup.com.mx/TIsoluction/panic/#main" data-role="button" rel="external">Guardar</a></p>
                <p>En caso de no dar sus datos, no podra utilizar la aplicacion</p>
		</div>
	</div>
	<div data-role="footer">
		<h4>Login</h4>
	</div>
</div>


</div>

	</body>

</html>