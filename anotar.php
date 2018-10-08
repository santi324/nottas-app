<?php session_start();
	$id_us = $_SESSION['usuario'];
	$cont = $_POST['cont'];
	$tit = $_POST['tit'];
	if ($tit == '') {
		$tit = null;
	}
	//$cont = "INSERT INTO `notas` (`id`, `id_user`, `cont`, `titulo`) VALUES (NULL, '1', 'nota 3', 'Nota sin titulo');";

	include 'conectar.php';
	$cons = mysqli_query($conexion, "INSERT INTO notas (id, id_user, cont, titulo) VALUES (null, '".$id_us."', '".$cont."', '".$tit."') ");
	header('location: index.php');
 ?>