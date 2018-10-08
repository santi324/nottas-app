<?php 
	global $user,$pass,$server,$db;
	$user="root";
	$pass="";
	$server="localhost";
	$db="proyecto1";
	@$conexion = mysqli_connect($server,$user,$pass, $db) or die("Error al conectar con la base de datos");

 ?>