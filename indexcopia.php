   <!-- PANICO APP -->
<?php 
if (isset($_COOKIE["user"]))
	if (isset($_COOKIE["pass"])){
		
		require('conectaloca.php');
//2 consultar el usuario en la tabla users
$sql="select * from users where usuario = '".$_COOKIE["user"]."'";
$result=mysql_query($sql);
//3 contar los registros encontrados
$contar=mysql_num_rows($result); 
//4 si encontro usuario en la tabla valida el password y redirecciona
$row=mysql_fetch_array($result);
$passwordsql=$row[password];

if($contar==1){
	if($passwordsql==$_COOKIE["pass"]){
		
		
echo '<body>';
                echo '<script type="text/javascript">window.location="inicio2.php"';
                echo '</script>';
                echo '</body>';
		}
	}
}
?>
<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>App panico</title>
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
		window.location.href = '../panic/index.html?user='+myForm;
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
<div data-role="page" id="page" style="background-image:url(img/fondo1.jpg); background-size:100%;" align="center" >
		<br><br><br><br><br><br><br>
     <div data-role="content" data-theme="a" widht="60%"> 
           <font face="Century Gothic"> <h3>Aun no ha iniciado sesion</h3></font>
            <font face="Century Gothic">Por favor proporcione sus datos aqui:</font>
            <div data-role="content">
            <form id="form1" method="post" action="valida.php">
<input type="text" width="10" placeholder="Usuario/correo" id="user" name="usuario" data-theme="b" data-inline="true" data-position="fixed" data-mini="true" cols="20">
<!--<input type="checkbox" name="guardar_clave" value="1"> Memorizar el usuario en este ordenador-->
 <input type="text" placeholder="Password" data-theme="b" name="password" data-inline="true" data-mini="true" >
<input type="submit" id="save" data-inline="true" value="iniciar sesion">
</form>

 </div>
            <br>
       
             <font face="Century Gothic">O <a href="#page2">registrese aqui</a></font><br><br>
          </div>

	</div>
</div>

<div data-role="page" id="page2" style="background-image:url(img/fondo1.jpg);background-repeat:no-repeat; background-size:100%;" align="center" >
<br><br><br><br><br><br>
	<div data-role="content">	
		<div data-role="content" data-theme="a">
       <font face="Century Gothic" size="+3">Registro</font>
				<p>Introduzca los datos siguientes:</p>
                
                <div data-role="content">
                <form method="post" action="insertar.php" name="form1" id="form1">
<input type="text" name="email" placeholder="correo" data-theme="b" data-inline="true" data-mini="true"  >
<input type="text" name="usuario" placeholder="Nombre" data-theme="b" data-inline="true" data-mini="true"  >
<input type="text" name="phone" placeholder="Telefono" data-theme="b" data-inline="true" data-mini="true" >
<input type="text" name="deleg" placeholder="Delegacion" data-theme="b" data-inline="true" data-mini="true" >

				<p>Inserte aqui almenos 2 numeros para <br>enviarles un mensaje en caso emergencia, <br>ya sean familiares, amigos o vecinos.</p>

    <div data-role="collapsible">
    <p>
    <input type="text" placeholder="contacto obligatorio" name="contac1" data-theme="b" data-inline="true" data-mini="true" />
<input type="text" placeholder="contacto obligatorio" data-theme="b" name="contac2" data-inline="true" data-mini="true" />
<input type="text" placeholder="contacto" data-theme="b" data-inline="true" name="contac3" data-mini="true" align="middle"/>
<input type="text" placeholder="contacto" data-theme="b" data-inline="true" data-mini="true"name="contac4" />
<input type="text" placeholder="contacto" data-theme="b" data-inline="true" data-mini="true" name="contac5" />
<input type="text" placeholder="contacto" data-theme="b" data-inline="true" data-mini="true" name="contac6" />
    </p>
    <p><h3>Contactos</h3></p>
</div>
<p>Aqui escriba correos electronicos a los cuales enviar un e-mail en caso de emergencia</p>

  
    <div data-role="collapsible">
    <p>
    <input type="text" placeholder="Email 1" data-theme="b" data-inline="true" data-mini="true" name="mail1" />
<input type="text" placeholder="Email 2" data-theme="b" data-inline="true" data-mini="true" name="mail2" />
    </p>
    <p><h3>Emails</h3></p>
</div>
            
    <div data-role="collapsible">
    <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
    </p>
        <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
    </p>
    <p>Para utilizar correctamente esta aplicación es necesario dar de alta 2 números telefonicos y 
    dos correos electronicos de amigos o familiares para darles conocimiento de tus emergencias</p>
    <p><h3>Terminos y condiciones</h3></p>
</div>
                <!--<input type="submit" name="guardar" value="Guardar" onmouseUp="alert('Tus contactos han sido guadados')" >-->
<div data-role="fieldcontain">
 	<fieldset data-role="controlgroup">
		<input type="checkbox" name="checkbox-1" id="checkbox-1" class="custom" />
		<label for="checkbox-1">Acepto terminos y condiciones</label>
    </fieldset>
    <input type="submit" name="button" id="idbutton" value="Guardar"/>
</div></form>
</div>

               <!-- <p><a href="#page" data-role="button">Guardar</a></p>-->
                <p>En caso de no dar sus datos, no podra utilizar la aplicacion</p>
		</div>
	</div>
</div>

<div data-role="page" id="page3">
	<div data-role="header" data-position="fixed"> <img id="bg2" src="img/logo.png"  /> </div>
	<div data-role="content">	
		<div data-role="content" data-theme="a">
				<p>Login o registro</p>
				<p>Introduce tu correo electronico</p><br><br>
                <form method="POST" action="redireccionar.php">
                <input type="text" name="user">Correo electronico</input>
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

	</body>

</html>