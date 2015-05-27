<?php 
//obtener los datos del formulario (user & password)
$user = $_POST['usuario'];
$pass = $_POST['password'];
//si es de la base de datos revisar si el usuario y password es el correcto
//if($user=='admin' && $pass=='pass'){
//si es correcto se redirecciona a la pág principal 
	//header('location:principal.html');	
//}
//si no se queda en validar.php

//conexion y validacion a la base de datos
//1 conectate a la base de datos
require('conectaloca.php');
//2 consultar el usuario en la tabla users
$sql="select * from users where usuario = '".$user."'";
$result=mysql_query($sql);
//3 contar los registros encontrados
$contar=mysql_num_rows($result); 
//4 si encontro usuario en la tabla valida el password y redirecciona
$row=mysql_fetch_array($result);
$passwordsql=$row[password];

if($contar==1){
	if($passwordsql==$pass){
		//iniciar y crear una variable de sesion
		//inicio de sesion
		//session_start();
		//configurar un elemento usuario dentro del arreglo global
		//$_SESSION['usuario']=$user;
		//echo "hola que hace";
		//$fila=mysql_fetch_array($result);
		$expire=time()+60*60*24*365;
		setcookie("user", $user, $expire);
		setcookie("pass", $pass, $expire);
		//echo $_COOKIE['usuario_nombre'];
		//setcookie('usuario_login',$fila[password],3600);
		
		//location="validalocal2.php?user='.$user.'&pass='.$pass.'"';
		
		echo '<body>';
                echo '<script type="text/javascript">window.location="inicio2.php"';
                echo '</script>';
                echo '</body>';
				
//header('location:inicio2.php');
	}
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Error de acceso</title>
</head>

<body>
<h1>ERROR DE ACCESO
</h1>
<hr />
<p>USUARIO O PASSWORD INCORRECTO</p>
<p><a href="index.php">VOLVER A INTENTARLO</a></p>
<!--<p><a href="registro.php">REGISTRO</a></p>-->
</body>
</html>