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

<div data-role="page" id="editarcta" style="background-image:url(fondo1.jpg);background-repeat:no-repeat; background-size:100%;" align="center" >
<div data-role="header" data-position="fixed" data-theme="b"> <a href="#" data-rel="back">Regresar</a><H2>CAPUFE-IAVE</H2>  </div>
<br><br><br><br><br><br>
	<div data-role="content" data-theme="b">	
		<div data-role="content" data-theme="b">
       <font face="Century Gothic" size="+3">Edicion de cuenta</font>
				<p>Estos son sus datos:</p>
                
                <div data-role="content">
                <form method="post" action="modificarcta.php" name="form1" id="form1">
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
“ACTUALIZAR”</p>
    <p><h3>Terminos y condiciones</h3></p>
</div>
                <!--<input type="submit" name="guardar" value="Guardar" onmouseUp="alert('Tus contactos han sido guadados')" >-->
<div data-role="fieldcontain">
    <input type="submit" name="button" id="idbutton" value="ACTUALIZAR"/>
</div></form>
</div>

               <!-- <p><a href="#page" data-role="button">Guardar</a></p>-->
		</div>
	</div>
</div>

<div data-role="page" id="page3">
	<div data-role="header" data-position="fixed"> <img id="bg2" src="img/logo.png"  /> </div>
	<div data-role="content" data-theme="b">	
		<form method="post" action="modificarcta.php" name="form1" id="form1">
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
    <input type="submit" name="button" id="idbutton" value="ACTUALIZAR"/>
</div></form>
	</div>
	<div data-role="footer">
		<h4>Login</h4>
	</div>
</div>


</div>

 <!-- nvorfc-->

<div data-role="page" id="nvorfc" style="background-image:url(fondo1.jpg);background-repeat:no-repeat; background-size:100%;" align="center" >
<div data-role="header" data-position="fixed" data-theme="b"> <a href="#" data-rel="back">Regresar</a><H2>CAPUFE-FACTURA</H2>  </div>
<br><br><br><br><br><br>
	<div data-role="content" data-theme="b">	
		<div data-role="content" data-theme="b">
       <font face="Century Gothic" size="+3">Crear Nuevo RFC</font>
				<p>Escriba sus datos del RFC:</p>
                
                <div data-role="content">
                <form method="post" action="insertarrfc.php" name="form1" id="form1">
<input type="text" name="rfc" placeholder="RFC" data-theme="b" data-inline="true" data-mini="true"  >
<input type="text" name="razonsocial" placeholder="Razon Social" data-theme="b" data-inline="true" data-mini="true"  >
<input type="text" name="calle" placeholder="Calle" data-theme="b" data-inline="true" data-mini="true"  >	
<input type="text" name="numext" placeholder="Numero Exterior" data-theme="b" data-inline="true" data-mini="true"  >	
<input type="text" name="numint" placeholder="Numero Interior" data-theme="b" data-inline="true" data-mini="true"  >	
<input type="text" name="colonia" placeholder="Colonia" data-theme="b" data-inline="true" data-mini="true"  >	
<input type="text" name="municipio" placeholder="Municipio" data-theme="b" data-inline="true" data-mini="true"  >	
<input type="text" name="estado" placeholder="Estado" data-theme="b" data-inline="true" data-mini="true"  >	
<input type="text" name="cp" placeholder="Codigo Postal" data-theme="b" data-inline="true" data-mini="true"  >		           
    <div data-role="collapsible">
    <p>1. Ingrese un nombre de usuario (en caso de que ya no este disponible ingrese uno diferente)
    </p>
        <p>2. Ingrese una contraseña que debe tener como mínimo 8 caracteres (puede ingresar números y letras mayúsculas o minúsculas).
    </p>
    <p>3. Este campo debe coincidir con el campo anterior</p>
    <p>4. El correo electrónico debe tener formato correcto(sin espacios en blancos y minúsculas)</p>
    <p>5. Ningún campo debe estar vacío.</p>
    <p>UNA VEZ LLENOS LOS 4 CAMPOS, DE CLICK EN EL BOTON<BR> 
“Insertar Nuevo”</p>
    <p><h3>Terminos y condiciones</h3></p>
</div>
                <!--<input type="submit" name="guardar" value="Guardar" onmouseUp="alert('Tus contactos han sido guadados')" >-->
<div data-role="fieldcontain">
    <input type="submit" name="button" id="idbutton" value="Insertar Nuevo"/>
</div></form>
</div>

               <!-- <p><a href="#page" data-role="button">Guardar</a></p>-->
		</div>
	</div>
</div>


 <!-- rfc actualizar-->

<div data-role="page" id="rfc" style="background-image:url(fondo1.jpg);background-repeat:no-repeat; background-size:100%;" align="center" >
<div data-role="header" data-position="fixed" data-theme="b"> <a href="#" data-rel="back">Regresar</a><H2>CAPUFE-FACTURA</H2>  </div>
<br><br><br><br><br><br>
	<div data-role="content" data-theme="b">	
		<div data-role="content" data-theme="b">
       <font face="Century Gothic" size="+3">Modificacion RFC</font>
				<p>Verifique los datos del RFC:</p>
                
                <div data-role="content">
                <form method="post" action="insertarrfc.php" name="form1" id="form1">
<input type="text" name="rfc" placeholder="RFC" data-theme="b" data-inline="true" data-mini="true"  value="CACD720320KK3">
<input type="text" name="razonsocial" placeholder="Razon Social" data-theme="b" data-inline="true" data-mini="true"  value="DAVID RICARDO CARRERA CHAVEZ">
<input type="text" name="calle" placeholder="Calle" data-theme="b" data-inline="true" data-mini="true"  value="16 DE SEPTIEMBRE">	
<input type="text" name="numext" placeholder="Numero Exterior" data-theme="b" data-inline="true" data-mini="true"  value="146">	
<input type="text" name="numint" placeholder="Numero Interior" data-theme="b" data-inline="true" data-mini="true"  value="">	
<input type="text" name="colonia" placeholder="Colonia" data-theme="b" data-inline="true" data-mini="true"  value="LOMAS DE TZOMPANTLE">	
<input type="text" name="municipio" placeholder="Municipio" data-theme="b" data-inline="true" data-mini="true"  value="CUERNAVACA">	
<input type="text" name="estado" placeholder="Estado" data-theme="b" data-inline="true" data-mini="true"  value="MORELOS">	
<input type="text" name="cp" placeholder="Codigo Postal" data-theme="b" data-inline="true" data-mini="true"  value="62135">		           
    <div data-role="collapsible">
    <p>1. Ingrese un nombre de usuario (en caso de que ya no este disponible ingrese uno diferente)
    </p>
        <p>2. Ingrese una contraseña que debe tener como mínimo 8 caracteres (puede ingresar números y letras mayúsculas o minúsculas).
    </p>
    <p>3. Este campo debe coincidir con el campo anterior</p>
    <p>4. El correo electrónico debe tener formato correcto(sin espacios en blancos y minúsculas)</p>
    <p>5. Ningún campo debe estar vacío.</p>
    <p>UNA VEZ LLENOS LOS 4 CAMPOS, DE CLICK EN EL BOTON<BR> 
“Insertar Nuevo”</p>
    <p><h3>Terminos y condiciones</h3></p>
</div>
                <!--<input type="submit" name="guardar" value="Guardar" onmouseUp="alert('Tus contactos han sido guadados')" >-->
<div data-role="fieldcontain">
    <input type="submit" name="button" id="idbutton" value="Guardar datos"/>
</div></form>
</div>

               <!-- <p><a href="#page" data-role="button">Guardar</a></p>-->
		</div>
	</div>
</div>

 <!-- iave actualizar-->

<div data-role="page" id="iave" style="background-image:url(fondo1.jpg);background-repeat:no-repeat; background-size:100%;" align="center" >
<div data-role="header" data-position="fixed" data-theme="b"> <a href="#" data-rel="back">Regresar</a><H2>CAPUFE-IAVE</H2>  </div>
<br><br><br><br><br><br>
	<div data-role="content" data-theme="b">	
		<div data-role="content" data-theme="b">
       <font face="Century Gothic" size="+3">IAVE</font>
				<p>Verifique los datos de su IAVE:</p>
                
                <div data-role="content">
                <form method="post" action="rfc.php" name="form1" id="form1">
<input type="text" name="iave" placeholder="IAVE" data-theme="b" data-inline="true" data-mini="true"  value="IMDM-22005057-6">
<input type="text" name="nombre" placeholder="nombre" data-theme="b" data-inline="true" data-mini="true"  value="MI IAVE">
<input type="text" name="status" placeholder="status" data-theme="b" data-inline="true" data-mini="true"  value="ACTIVO">	
<input type="text" name="modalidad" placeholder="modalidad" data-theme="b" data-inline="true" data-mini="true"  value="PREPAGO">
saldo:	
<input type="text" name="saldo" placeholder="saldo" data-theme="b" data-inline="true" data-mini="true"  value="$ 98.36">	
<a href="#rfc" rel="external" data-role="button">datos fiscales</a>
     <a href="#personal" rel="external" data-role="button">datos personales</a>	           
    <div data-role="collapsible">
    <p>1. Ingrese un nombre de usuario (en caso de que ya no este disponible ingrese uno diferente)
    </p>
        <p>2. Ingrese una contraseña que debe tener como mínimo 8 caracteres (puede ingresar números y letras mayúsculas o minúsculas).
    </p>
    <p>3. Este campo debe coincidir con el campo anterior</p>
    <p>4. El correo electrónico debe tener formato correcto(sin espacios en blancos y minúsculas)</p>
    <p>5. Ningún campo debe estar vacío.</p>
    <p>UNA VEZ LLENOS LOS 4 CAMPOS, DE CLICK EN EL BOTON<BR> 
“Insertar Nuevo”</p>
    <p><h3>Terminos y condiciones</h3></p>
</div>
                <!--<input type="submit" name="guardar" value="Guardar" onmouseUp="alert('Tus contactos han sido guadados')" >-->
<div data-role="fieldcontain">
     <!--<input type="submit" name="button" id="idbutton" value="datos fiscales"/>-->
     
</div></form>
</div>

               <!-- <p><a href="#page" data-role="button">Guardar</a></p>-->
		</div>
	</div>
</div>

 <!-- iave agregar-->

<div data-role="page" id="nvaiave" style="background-image:url(fondo1.jpg);background-repeat:no-repeat; background-size:100%;" align="center" >
<div data-role="header" data-position="fixed" data-theme="b"> <a href="#" data-rel="back">Regresar</a><H2>CAPUFE-IAVE</H2>  </div>
<br><br><br><br><br><br>
	<div data-role="content" data-theme="b">	
		<div data-role="content" data-theme="b">
       <font face="Century Gothic" size="+3">NUEVA IAVE</font>
				<p>Inserte los datos de su nueva IAVE:</p>
                
                <div data-role="content">
                <form method="post" action="insertaiave.php" name="form1" id="form1">
<input type="text" name="iave" placeholder="IAVE" data-theme="b" data-inline="true" data-mini="true"  >
<input type="text" name="nombre" placeholder="nombre" data-theme="b" data-inline="true" data-mini="true">
<input type="text" name="status" placeholder="status" data-theme="b" data-inline="true" data-mini="true">	
<input type="text" name="modalidad" placeholder="modalidad" data-theme="b" data-inline="true" data-mini="true">	
<a href="#nvorfc" rel="external" data-role="button">datos fiscales</a>
     <a href="#nvopersonal" rel="external" data-role="button">datos personales</a>	           
    <div data-role="collapsible">
    <p>1. Ingrese un nombre de usuario (en caso de que ya no este disponible ingrese uno diferente)
    </p>
        <p>2. Ingrese una contraseña que debe tener como mínimo 8 caracteres (puede ingresar números y letras mayúsculas o minúsculas).
    </p>
    <p>3. Este campo debe coincidir con el campo anterior</p>
    <p>4. El correo electrónico debe tener formato correcto(sin espacios en blancos y minúsculas)</p>
    <p>5. Ningún campo debe estar vacío.</p>
    <p>UNA VEZ LLENOS LOS 4 CAMPOS, DE CLICK EN EL BOTON<BR> 
“Insertar Nuevo”</p>
    <p><h3>Terminos y condiciones</h3></p>
</div>
                <!--<input type="submit" name="guardar" value="Guardar" onmouseUp="alert('Tus contactos han sido guadados')" >-->
<div data-role="fieldcontain">
     <!--<input type="submit" name="button" id="idbutton" value="datos fiscales"/>-->
     
</div></form>
</div>

               <!-- <p><a href="#page" data-role="button">Guardar</a></p>-->
		</div>
	</div>
</div>


 <!-- CONTACTO-->

<div data-role="page" id="contacto" style="background-image:url(fondo1.jpg);background-repeat:no-repeat; background-size:100%;" align="center" >
<div data-role="header" data-position="fixed" data-theme="b"> <a href="#" data-rel="back">Regresar</a><H2>CAPUFE-IAVE</H2>  </div>
<br><br><br><br><br><br>
	<div data-role="content" data-theme="b">	
		<div data-role="content" data-theme="b">
       <font face="Century Gothic" size="+3">CONTACTO</font>
				<p>ESTOS SON NUESTRAS FORMAS DE ATENCION:</p>
                
                <div data-role="content">
                <a href="#page" data-role="button">ATENCION TELEFONICA</a>
                <a href="#page" data-role="button">CORREO ELECTRONICO</a>
                <a href="#page" data-role="button">TERMINOS LEGALES</a>
                <a href="#page" data-role="button">FAQ'S</a>
                
</div>

               <!-- <p><a href="#page" data-role="button">Guardar</a></p>-->
		</div>
	</div>
</div>

 <!-- detalles del comprobante-->

<div data-role="page" id="comprobante" style="background-image:url(fondo1.jpg);background-repeat:no-repeat; background-size:100%;" align="center" >
<div data-role="header" data-position="fixed" data-theme="b"> <a href="#" data-rel="back">Regresar</a><H2>CAPUFE-FACTURA</H2>  </div>
<br><br><br><br><br><br>
	<div data-role="content" data-theme="b">	
		<div data-role="content" data-theme="b">
       <font face="Century Gothic" size="+3">Detalles comprobante</font>
				<p>Verifique los datos del comprobante:</p>
                
                <div data-role="content">
                <form method="post" action="insertarrfc.php" name="form1" id="form1">
<input type="text" name="comprobante" placeholder="folio" data-theme="b" data-inline="true" data-mini="true"  value="IMDM-22005057-6">
<input type="text" name="total" placeholder="total" data-theme="b" data-inline="true" data-mini="true"  value="$10.00">
<input type="text" name="rfc" placeholder="RFC" data-theme="b" data-inline="true" data-mini="true"  value="CACD720320KK3">
<input type="text" name="Razon Social" placeholder="Razon Social" data-theme="b" data-inline="true" data-mini="true"  value="DAVID RICARDO CARRERA CHAVEZ">
<input type="text" name="calle" placeholder="Calle" data-theme="b" data-inline="true" data-mini="true"  value="16 DE SEPTIEMBRE">	
<input type="text" name="numext" placeholder="Numero Exterior" data-theme="b" data-inline="true" data-mini="true"  value="146">	
<input type="text" name="numint" placeholder="Numero Interior" data-theme="b" data-inline="true" data-mini="true"  value="">	
<input type="text" name="colonia" placeholder="Colonia" data-theme="b" data-inline="true" data-mini="true"  value="LOMAS DE TZOMPANTLE">	
<input type="text" name="municipio" placeholder="Municipio" data-theme="b" data-inline="true" data-mini="true"  value="CUERNAVACA">	
<input type="text" name="estado" placeholder="Estado" data-theme="b" data-inline="true" data-mini="true"  value="MORELOS">	
<input type="text" name="cp" placeholder="Codigo Postal" data-theme="b" data-inline="true" data-mini="true"  value="62135">		           
    <div data-role="collapsible">
    <p>1. Ingrese un nombre de usuario (en caso de que ya no este disponible ingrese uno diferente)
    </p>
        <p>2. Ingrese una contraseña que debe tener como mínimo 8 caracteres (puede ingresar números y letras mayúsculas o minúsculas).
    </p>
    <p>3. Este campo debe coincidir con el campo anterior</p>
    <p>4. El correo electrónico debe tener formato correcto(sin espacios en blancos y minúsculas)</p>
    <p>5. Ningún campo debe estar vacío.</p>
    <p>UNA VEZ LLENOS LOS 4 CAMPOS, DE CLICK EN EL BOTON<BR> 
“Insertar Nuevo”</p>
    <p><h3>Terminos y condiciones</h3></p>
</div>
                <!--<input type="submit" name="guardar" value="Guardar" onmouseUp="alert('Tus contactos han sido guadados')" >-->
<div data-role="fieldcontain">
    <input type="submit" name="button" id="idbutton" value="Guardar datos"/>
</div></form>
</div>

               <!-- <p><a href="#page" data-role="button">Guardar</a></p>-->
		</div>
	</div>
</div>


 <!-- alta comprobante-->

<div data-role="page" id="altacomprobante" style="background-image:url(fondo1.jpg);background-repeat:no-repeat; background-size:100%;" align="center" >
<div data-role="header" data-position="fixed" data-theme="b"> <a href="#" data-rel="back">Regresar</a><H2>CAPUFE-FACTURA</H2>  </div>
<br><br><br><br><br><br>
	<div data-role="content" data-theme="b">	
		<div data-role="content" data-theme="b">
       <font face="Century Gothic" size="+3">Alta Comprobante</font>
				<p>Verifique los datos del comprobante:</p>
                
                <div data-role="content">
                <form method="post" action="insertacomprobante.php" name="form1" id="form1">
<input type="text" name="comprobante" placeholder="folio" data-theme="b" data-inline="true" data-mini="true"  value="2:93??1;8>775E776856=931:7L982:>?3f">
<input type="text" name="total" placeholder="total" data-theme="b" data-inline="true" data-mini="true"  value="$10.00">
<input type="text" name="rfc" placeholder="RFC" data-theme="b" data-inline="true" data-mini="true"  value="CACD720320KK3">
<input type="text" name="Razon Social" placeholder="Razon Social" data-theme="b" data-inline="true" data-mini="true"  value="DAVID RICARDO CARRERA CHAVEZ">
<input type="text" name="calle" placeholder="Calle" data-theme="b" data-inline="true" data-mini="true"  value="16 DE SEPTIEMBRE">	
<input type="text" name="numext" placeholder="Numero Exterior" data-theme="b" data-inline="true" data-mini="true"  value="146">	
<input type="text" name="numint" placeholder="Numero Interior" data-theme="b" data-inline="true" data-mini="true"  value="">	
<input type="text" name="colonia" placeholder="Colonia" data-theme="b" data-inline="true" data-mini="true"  value="LOMAS DE TZOMPANTLE">	
<input type="text" name="municipio" placeholder="Municipio" data-theme="b" data-inline="true" data-mini="true"  value="CUERNAVACA">	
<input type="text" name="estado" placeholder="Estado" data-theme="b" data-inline="true" data-mini="true"  value="MORELOS">	
<input type="text" name="cp" placeholder="Codigo Postal" data-theme="b" data-inline="true" data-mini="true"  value="62135">		           
    <div data-role="collapsible">
    <p>1. Ingrese un nombre de usuario (en caso de que ya no este disponible ingrese uno diferente)
    </p>
        <p>2. Ingrese una contraseña que debe tener como mínimo 8 caracteres (puede ingresar números y letras mayúsculas o minúsculas).
    </p>
    <p>3. Este campo debe coincidir con el campo anterior</p>
    <p>4. El correo electrónico debe tener formato correcto(sin espacios en blancos y minúsculas)</p>
    <p>5. Ningún campo debe estar vacío.</p>
    <p>UNA VEZ LLENOS LOS 4 CAMPOS, DE CLICK EN EL BOTON<BR> 
“Insertar Nuevo”</p></form>
    <p><h3>Terminos y condiciones</h3></p>
</div>
                <!--<input type="submit" name="guardar" value="Guardar" onmouseUp="alert('Tus contactos han sido guadados')" >-->
<div data-role="fieldcontain">
    <a href="#finalizacomprobante" data-role="button">Guardar Datos</a>
</div>
</div>
               <!-- <p><a href="#page" data-role="button">Guardar</a></p>-->
		</div>
	</div>
</div>

 <!-- verifica recarga-->

<div data-role="page" id="verificarecarga" style="background-image:url(fondo1.jpg);background-repeat:no-repeat; background-size:100%;" align="center" >
<div data-role="header" data-position="fixed" data-theme="b"> <a href="#" data-rel="back">Regresar</a><H2>CAPUFE-IAVE</H2>  </div>
<br><br><br><br><br><br>
	<div data-role="content" data-theme="b">	
		<div data-role="content" data-theme="b">
       <font face="Century Gothic" size="+3">Recarga IAVE</font>
				<p>Verifique los datos de la recarga:</p>
                
                <div data-role="content">
                <form method="post" action="inserta recarga.php" name="form1" id="form1">
<input type="text" name="comprobante" placeholder="folio" data-theme="b" data-inline="true" data-mini="true"  value="IMDM-22005057-6">
<input type="text" name="total" placeholder="total" data-theme="b" data-inline="true" data-mini="true"  value="$100.00">
<input type="text" name="rfc" placeholder="RFC" data-theme="b" data-inline="true" data-mini="true"  value="CACD720320KK3">
<input type="text" name="Razon Social" placeholder="Razon Social" data-theme="b" data-inline="true" data-mini="true"  value="DAVID RICARDO CARRERA CHAVEZ">
<input type="text" name="calle" placeholder="Calle" data-theme="b" data-inline="true" data-mini="true"  value="16 DE SEPTIEMBRE">	
<input type="text" name="numext" placeholder="Numero Exterior" data-theme="b" data-inline="true" data-mini="true"  value="146">	
<input type="text" name="numint" placeholder="Numero Interior" data-theme="b" data-inline="true" data-mini="true"  value="">	
<input type="text" name="colonia" placeholder="Colonia" data-theme="b" data-inline="true" data-mini="true"  value="LOMAS DE TZOMPANTLE">	
<input type="text" name="municipio" placeholder="Municipio" data-theme="b" data-inline="true" data-mini="true"  value="CUERNAVACA">	
<input type="text" name="estado" placeholder="Estado" data-theme="b" data-inline="true" data-mini="true"  value="MORELOS">	
<input type="text" name="cp" placeholder="Codigo Postal" data-theme="b" data-inline="true" data-mini="true"  value="62135">		           
    <div data-role="collapsible">
    <p>1. Ingrese un nombre de usuario (en caso de que ya no este disponible ingrese uno diferente)
    </p>
        <p>2. Ingrese una contraseña que debe tener como mínimo 8 caracteres (puede ingresar números y letras mayúsculas o minúsculas).
    </p>
    <p>3. Este campo debe coincidir con el campo anterior</p>
    <p>4. El correo electrónico debe tener formato correcto(sin espacios en blancos y minúsculas)</p>
    <p>5. Ningún campo debe estar vacío.</p>
    <p>UNA VEZ LLENOS LOS 4 CAMPOS, DE CLICK EN EL BOTON<BR> 
“Insertar Nuevo”</p></form>
    <p><h3>Terminos y condiciones</h3></p>
</div>
                <!--<input type="submit" name="guardar" value="Guardar" onmouseUp="alert('Tus contactos han sido guadados')" >-->
<div data-role="fieldcontain">
    <a href="#finalizacomprobante" data-role="button">finalizar recarga</a>
</div>
</div>
               <!-- <p><a href="#page" data-role="button">Guardar</a></p>-->
		</div>
	</div>
</div>


 <!-- alta recarga-->

<div data-role="page" id="altarecarga" style="background-image:url(fondo1.jpg);background-repeat:no-repeat; background-size:100%;" align="center" >
<div data-role="header" data-position="fixed" data-theme="b"> <a href="#" data-rel="back">Regresar</a><H2>CAPUFE-IAVE</H2>  </div>
<br><br><br><br><br><br>
	<div data-role="content" data-theme="b">	
		<div data-role="content" data-theme="b">
       <font face="Century Gothic" size="+3">Recarga IAVE</font>
				<p>cuanto vas a recargar:</p>
                
                <div data-role="content">
                <form method="post" action="verificarecarga.php" name="form1" id="form1">
<label type="text" name="comprobante" placeholder="folio" data-theme="b" data-inline="true" data-mini="true"  value="IMDM-22005057-6">
<input type="text" name="total" placeholder="total" data-theme="b" data-inline="true" data-mini="true">	           
    <div data-role="collapsible">
    <p>1. Ingrese un nombre de usuario (en caso de que ya no este disponible ingrese uno diferente)
    </p>
        <p>2. Ingrese una contraseña que debe tener como mínimo 8 caracteres (puede ingresar números y letras mayúsculas o minúsculas).
    </p>
    <p>3. Este campo debe coincidir con el campo anterior</p>
    <p>4. El correo electrónico debe tener formato correcto(sin espacios en blancos y minúsculas)</p>
    <p>5. Ningún campo debe estar vacío.</p>
    <p>UNA VEZ LLENOS LOS 4 CAMPOS, DE CLICK EN EL BOTON<BR> 
“Insertar Nuevo”</p></form>
    <p><h3>Terminos y condiciones</h3></p>
</div>
                <!--<input type="submit" name="guardar" value="Guardar" onmouseUp="alert('Tus contactos han sido guadados')" >-->
<div data-role="fieldcontain">
    <a href="#verificarecarga" data-role="button">recargar</a>
</div>
</div>
               <!-- <p><a href="#page" data-role="button">Guardar</a></p>-->
		</div>
	</div>
</div>


 <!--nueva recarga-->

<div data-role="page" id="nvarecarga" style="background-image:url(fondo1.jpg);background-repeat:no-repeat; background-size:100%;" align="center" >
<div data-role="header" data-position="fixed" data-theme="b"> <a href="#" data-rel="back">Regresar</a><H2>CAPUFE-IAVE</H2>  </div>
<br><br><br><br><br><br>
	<div data-role="content" data-theme="b">	
		<div data-role="content" data-theme="b">
       <font face="Century Gothic" size="+3">Recarga IAVE</font>
				<p>elige la iave que quieres recargar:</p>
                
                <div data-role="content">
                <br>
        <div data-role="controlgroup">
        <ul data-role="listview">
			<li><a href="#altarecarga" rel="external">IMDM-22005057-6</a></li>
		</ul>
        </div>
        <br>
    <div data-role="collapsible">
    <p>1. Ingrese un nombre de usuario (en caso de que ya no este disponible ingrese uno diferente)
    </p>
        <p>2. Ingrese una contraseña que debe tener como mínimo 8 caracteres (puede ingresar números y letras mayúsculas o minúsculas).
    </p>
    <p>3. Este campo debe coincidir con el campo anterior</p>
    <p>4. El correo electrónico debe tener formato correcto(sin espacios en blancos y minúsculas)</p>
    <p>5. Ningún campo debe estar vacío.</p>
    <p>UNA VEZ LLENOS LOS 4 CAMPOS, DE CLICK EN EL BOTON<BR> 
“Insertar Nuevo”</p>
    <p><h3>Terminos y condiciones</h3></p>
</div>
                <!--<input type="submit" name="guardar" value="Guardar" onmouseUp="alert('Tus contactos han sido guadados')" >-->
<div data-role="fieldcontain">
    <a href="#finalizacomprobante" data-role="button">recargar</a>
</div>
</div>
               <!-- <p><a href="#page" data-role="button">Guardar</a></p>-->
		</div>
	</div>
</div>

 <!-- finalizar Comprobante-->

<div data-role="page" id="finalizacomprobante" style="background-image:url(fondo1.jpg);background-repeat:no-repeat; background-size:100%;" align="center" >
<div data-role="header" data-position="fixed" data-theme="b"> <a href="markers.php" data-rel="external">Salir</a><H2>CAPUFE-IAVE</H2>  </div>
<br><br><br><br><br><br>
	<div data-role="content" data-theme="b">	
		<div data-role="content" data-theme="b">
       <font face="Century Gothic" size="+3">Finalizacion RECARGA</font>
				<h3>Tu comprobante ha sido generado</h3>
                
                <div data-role="content">
                
    <h2>id: 4140076
    </h2>
        <h3>STATUS: Completado
    </h3>
    <a href="#descargarxml" data-role="button">Descargar XML</a>
    <a href="#descargarpdf" data-role="button">Descargar PDF</a>
    <a href="#enviarcorreo" data-role="button">Enviar Correo</a>
</div>

               <!-- <p><a href="#page" data-role="button">Guardar</a></p>-->
		</div>
	</div>
</div>


 <!-- finalizar Comprobante-->

<div data-role="page" id="descargarxml" style="background-image:url(fondo1.jpg);background-repeat:no-repeat; background-size:100%;" align="center" >
<div data-role="header" data-position="fixed" data-theme="b"> <a href="markers.php" data-rel="external">Salir</a><H2>CAPUFE-FACTURA</H2>  </div>
<br><br><br><br><br><br>
	<div data-role="content" data-theme="b">	
		<div data-role="content" data-theme="b">
       <font face="Century Gothic" size="+3">Finalizacion Comprobante</font>
				<h3>Tu comprobante ha sido descargado</h3>
                
                <div data-role="content">
                
    <h2>id: 4140076
    </h2>
        <h3>STATUS: tu xml ha sido descargado
    </h3>
</div>

               <!-- <p><a href="#page" data-role="button">Guardar</a></p>-->
		</div>
	</div>
</div>


 <!-- finalizar Comprobante-->

<div data-role="page" id="descargarpdf" style="background-image:url(fondo1.jpg);background-repeat:no-repeat; background-size:100%;" align="center" >
<div data-role="header" data-position="fixed" data-theme="b"> <a href="markers.php" data-rel="external">Salir</a><H2>CAPUFE-FACTURA</H2>  </div>
<br><br><br><br><br><br>
	<div data-role="content" data-theme="b">	
		<div data-role="content" data-theme="b">
       <font face="Century Gothic" size="+3">Finalizacion Comprobante</font>
				<h3>Tu comprobante ha sido descargado</h3>
                
                <div data-role="content">
                
    <h2>id: 4140076
    </h2>
        <h3>STATUS: PDF descargado
    </h3>

</div>

               <!-- <p><a href="#page" data-role="button">Guardar</a></p>-->
		</div>
	</div>
</div>


 <!-- envio Comprobante-->

<div data-role="page" id="enviarcorreo" style="background-image:url(fondo1.jpg);background-repeat:no-repeat; background-size:100%;" align="center" >
<div data-role="header" data-position="fixed" data-theme="b"> <a href="markers.php" data-rel="external">Salir</a><H2>CAPUFE-IAVE</H2>  </div>
<br><br><br><br><br><br>
	<div data-role="content" data-theme="b">	
		<div data-role="content" data-theme="b">
       <font face="Century Gothic" size="+3">Envio Comprobante</font>
				<h3>Tu comprobante ha sido enviado</h3>
                
                <div data-role="content">
                
    <h2>id: 4140076
    </h2>
        <h3>STATUS: correo enviado con exito
    </h3>
</div>

               <!-- <p><a href="#page" data-role="button">Guardar</a></p>-->
		</div>
	</div>
</div>
	</body>

</html>