<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Proyecto1</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width" />
	<script type="text/javascript" src="jquery.js"></script>
	<link rel="stylesheet" type="text/css" href="css/main.css" />
</head>
<body>

	<!--
		El objetivo del proyecto 1 es el de convetir usuarios en clientes
		cada visitante es un cliente potencial por ende es un futuro cliente

	<header>
		<ul>
			<li><img src="main.png" /></li>
		</ul>
	</header>
	-->


	<section class="main">
		<h1>Mis notas</h1>

		<?php 
		$_SESSION['usuario'] = 1;
			include 'conectar.php';
			$cons = mysqli_query($conexion, "SELECT * FROM notas WHERE id_user = 1");
			$cant_notas = mysqli_num_rows($cons);
			if ($cant_notas < 1) {
				echo "<article><p>No hay notas</p></article>";
			} else {

				while ($c = mysqli_fetch_array($cons)) {
					echo "
					<article>
						<h3>".$c['titulo']."</h3>
						<p class=\"green\">".$c['cont']."</p>
					</article>";
				}
			}
		 ?>

		
		
		<span class="nuevo">
			+
		</span>
	</section>

	

<div class="form">
	<h2>Nueva nota <button class="cerrar">Cerrar</button></h2>
	<form action="anotar.php" method="POST">  
		<input type="text" name="tit" placeholder="Titulo de la nota" />
		<textarea name="cont" placeholder="Nota"></textarea>
		<input class="guardar" type="Submit" value="Guardar nota" name="nota" />
	</form> 
</div>


<script type="text/javascript">
	$(document).ready(function () {
		$('span.nuevo').click(function() {
			$('.nuevo').addClass('spin')
			$('.form').css('transition', '.5s')
			$('.form').css('transform', 'scale(.8)')
			$('.form').css('right', '0%')
			$('.form').css('bottom', '0%')

			setTimeout(function() { 
				$('.nuevo').removeClass('spin') 
				$('.form').css('transform', 'scale(1)')
				}, 400)
		})
		$('button.cerrar').click(function() {
			$('.nuevo').addClass('spin')
			$('.form').css('transition', '.5s')
			$('.form').css('transform', 'scale(.8)')
			$('.form').css('right', '-100%')
			$('.form').css('bottom', '-100%')

			setTimeout(function() { 
				$('.nuevo').removeClass('spin') 
				$('.form').css('transform', 'scale(1)')
				}, 400)
		})
		$('.aviso button').click(function() {

			$('.aviso').css('transition', '.5s')
			$('.aviso').css('transform', 'scale(.8)')
			$('.aviso').hide(400)
		})
	})
</script>


</body>
</html>