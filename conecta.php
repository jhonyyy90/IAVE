<?php
$hostname_cnop_conexion ="localhost";
$database_cnop_conexion ="dbcomere"; 
$username_cnop_conexion ="root"; 
$password_cnop_conexion ="";
// 
$cnop_conexion=mysql_connect($hostname_cnop_conexion, $username_cnop_conexion, $password_cnop_conexion) or die ("No se pudo conectar al servidor");
//Conexion a la BD
mysql_select_db($database_cnop_conexion) or die ("No se conecto a la Base de Datos");

//mysql_connect($servidor,$usuariomysql,$passwordmysql) 




?>


