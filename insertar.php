<?php
//obtener los datos que envia del formulario de contactos
$email=$_POST['email'];
$user=$_POST['usuario'];
$pass=$_POST['phone'];
$deleg=$_POST['deleg'];
$contac1=$_POST['contac1'];
$contac2=$_POST['contac3'];
$contac3=$_POST['contac3'];
$contac4=$_POST['contac4'];
$contac5=$_POST['contac5'];
$contac6=$_POST['contac6'];
$mail1=$_POST['mail1'];
$mail2=$_POST['mail2'];


/*$fam1=$_POST['fam1'];
$fam2=$_POST['fam2'];
$fam3=$_POST['fam3'];
$fam4=$_POST['fam4'];*/


function generaPass(){
//Se define una cadena de caractares. Te recomiendo que uses esta.
$cadena = "abcdefghijklmnopqrstuvwxyz1234567890";
//Obtenemos la longitud de la cadena de caracteres
$longitudCadena=strlen($cadena);
//Se define la variable que va a contener la contraseña
$pass = "";
//Se define la longitud de la contraseña, en mi caso 10, pero puedes poner la longitud que quieras
$longitudPass=5;
//Creamos la contraseña
for($i=1 ; $i<=$longitudPass ; $i++){
//Definimos numero aleatorio entre 0 y la longitud de la cadena de caracteres-1
$pos=rand(0,$longitudCadena-1);
//Vamos formando la contraseña en cada iteraccion del bucle, añadiendo a la cadena $pass la letra correspondiente a la posicion $pos en la cadena de caracteres definida.
$pass .= substr($cadena,$pos,1);
}

return $pass;
}
$random= generaPass();

//echo rand_string(8);

//insertar los datos en la base de datos y redireccionar a panel de usuarios
require('conecta.php');
$sql="INSERT INTO users VALUES ('NULL','".$email."','".$random."','".$user."','".$mail1."','".$mail2."','".$pass."','".$deleg."','".$contac1."','".$contac2."','".$contac3."','".$contac4."','".$contac5."','".$contac6."','".$mail1."','".$mail2."')";
//hace el guardado de los datos
$result=mysql_query($sql);
//regresar al panel para verificar los datos
mail("$email","Envio de contraseña"," Su contraseña del Boton de Pánico es: \n\n\n\n$random  ");


//adduser.php

$addres="index.html";
echo  "<a href=".$addres.">Click aqui para regresar</a>";
?>

<!DOCTYPE html>
<html>
	<head>
		
		<title>jQuery Mobile: Theme Download</title>
	</head>
	<body>
		<div>
        <br>        <br>        <br>        <br>        <br>        <br>        <br>
        Sus datos han sido registrados exitosamente <br> revise su correo para ver su password <br> <a href=index.html>Click aqui para regresar</a>
		</div>
	</body>
</html>


