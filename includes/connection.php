<?php
//Datos para conexión//
$host="127.0.0.1";
$user="root";
$password="yourpasswordhere";
$db="WebP";
//Creo una variable conexión//
$con=mysqli_connect($host,$user,$password)or die("problemas al conectar");
//Selecciono la base de datos//
mysqli_select_db($con,$db)or die("problemas al seleccionar la base de datos");
?>