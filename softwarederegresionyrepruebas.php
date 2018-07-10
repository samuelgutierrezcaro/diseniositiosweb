<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>Software de regresión y repruebas</title>
		<meta name="author" content="Samuel Gutierrez Caro" />
		<meta name="description" content="Las Pruebas de Regresión consisten en volver a probar un componente, tras haber sido modificado, para descubrir cualquier defecto introducido, o no cubierto previamente, como consecuencia de los cambios"/>
		<meta name="keywords" content="pruebas de software, pruebas funcionales, pruebas no funcionales, pruebas estructurales, software de regresión, repruebas"/>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/myweb.css">
	</head>
	<!-- Inicio del cuerpo-->

<!-------------------------------------------------------------------------------------------------->
	<header>
		<?php
			include ("includes/menu.php");
		?>
	</header>
<!-------------------------------------------------------------------------------------------------->
	<br>
	<br>
	<div class="container">
						<div class="row">
		  					<div class="col-2"> 
		  						<img class="img-responsive" src="img/logo.png" alt="UNAD">
		  			   		</div>
						</div>
					</div>
	<br>
	<br>
		<body>		
				<!-- Final fila de la cabecera-->

				<!-- Inicio del contenedor principal que centra la información-->
				<div class="container">
					<!-- Inicio de la fila principal compuesta por 2 elementos article y aside -->
					<div class="row">			
						<article class= "col-xs-12 col-sm-12 col-md-12 col-lg-12 color1">
								<div>
									<p>
										<head><h5><strong>SOFTWARE DE REGRESION Y LAS RE-PRUEBAS</strong></h5></head><br>
										Una vez que un defecto ha sido corregido, toca volver a probar el software para confirmar que el defecto ha sido eliminado. Son pruebas repetidas o Re-Pruebas.
									</p>
									<p>
										Las Pruebas de Regresión consisten en volver a probar un componente, tras haber sido modificado, para descubrir cualquier defecto introducido, o no cubierto previamente, como consecuencia de los cambios. Los defectos pueden encontrarse tanto en el software que se ha cambiado como en algún otro componente. Se ejecutan cuando se cambia el software o su entorno. El criterio para decidir la extensión de estas Pruebas de Regresión está basado en el riesgo de no encontrar defectos en el software que anteriormente estaba funcionando correctamente.
									</p>
									<p>
										Las Pruebas de Regresión se realizan sobre un componente ya probado, para verificar que no presenta nuevos defectos cuando se realiza una modificación después de dichas prueba
									</p>
									<p>
										Este tipo de pruebas software deben ser repetibles si han de usarse para pruebas de confirmación (o aseguramiento) y regresión (como Sondas de Disponibilidad, por ejemplo). Los conjuntos de pruebas de regresión (“Regression test suites“) suelen ser bastante estables por lo que son muy buenos candidatos para actividades de automatización de pruebas software.
									</p>
									<p>	
										Tomado de "Panel.es, Creación inteligente de software, sistemas y servicios T.I . Web https://www.panel.es/blog/software-qa-cuales-son-los-tipos-de-pruebas-software/
									</p>
								 </div>	
						</article>
						
					</div>
				</div>
					<br>
					
		<!-- ***********************************************************-->	
				<div class="container">	
					<div class="row">			
						<div class= "col-xs-12 col-sm-12 col-md-6 color10" >
							<center><img class="img-fluid" src="img/regresion.jpg" alt="UNAD"></center>	
						</div>
						<div class="col-xs-12 col-sm-12 col-md-6 color9" >
							<p><br>
								Pruebas de regresión son pruebas de un programa previamente probado que ha sufrido modificaciones, para asegurarse que no se han introducido o descubierto defectos en áreas del software que no han sido modificadas como resultado de los cambios realizados. Se realiza cuando el software o su entorno han sido modificados. Tomado de "Globee", Pruebas de regresión. Web https://www.globetesting.com/pruebas-de-regresion/
							</p>		
						</div>
						
					</div>
				</div>
				<br>
<!-------------------------------------------------------------------------------------------------->
<footer>
	<?php
		include ("includes/footer.php");
	?>
</footer>
<!-------------------------------------------------------------------------------------------------->		
			<script src="js/jquery.js"></script>
		    <script src="js/bootstrap.min.js"></script>	
		</body>
</html>