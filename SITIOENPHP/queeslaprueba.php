<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="author" content="Samuel Gutierrez Caro" />
		<meta name="description" content="La prueba es un conjunto de actividades que pueden planearse por adelantado y realizarse de manera sistemática"/>
		<meta name="keywords" content="pruebas de software, pruebas funcionales, pruebas no funcionales, pruebas estructurales, software de regresión, repruebas"/>
		<title>¿Que es la prueba?</title>
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
										<head><h5><strong>¿QUE ES LA PRUEBA?</strong></h5></head><br>
										La prueba es un conjunto de actividades que pueden planearse por adelantado y realizarse de manera sistemática. Por esta razón, durante el proceso de software, debe definirse una plantilla para la prueba del software: un conjunto de pasos que incluyen métodos de prueba y técnicas de diseño de casos de prueba específicos.
									</p>
									<p>
										En la literatura sobre el tema, se han propuesto algunas estrategias de prueba de software todas proporcionan una plantilla para la prueba y tienen las siguientes características genéricas:
									</p>
									<ul>
										<li>	
											Para realizar una prueba efectiva, debe realizar revisiones técnicas efectivas, al hacerlo, eliminará muchos errores antes de comenzar la prueba.
										</li>
										<li>
											La prueba comienza en los componentes y opera “hacia afuera”, hacia la integración de todo el sistema de cómputo.
										</li>
										<li>
											Diferentes técnicas de prueba son adecuadas para distintos enfoques de ingeniería de software y en diferentes momentos en el tiempo.
										</li>
										<li>										
											Las pruebas las realiza el desarrollador del software y (para proyectos grandes) un grupo de prueba independiente.
										</li>
										<li>
											Prueba y depuración son actividades diferentes, pero la depuración debe incluirse en cualquier estrategia de prueba.
										</li>
									</ul>
									<p>	
										Una estrategia para la prueba de software debe incluir pruebas de bajo nivel, que son necesarias para verificar que un pequeño segmento de código fuente se implementó correctamente, así como pruebas de alto nivel, que validan las principales funciones del sistema a partir de los requerimientos del cliente. Una estrategia debe proporcionar una guía para el profesional y un conjunto de guías para el jefe de proyecto. Puesto que los pasos de la estrategia de prueba ocurren cuando comienza a aumentar la presión por las fechas límite, el avance debe ser medible y los problemas deben salir a la superficie tan pronto como sea posible.
									</p>
									<p>	
										Tomado de "Ingenieria del Software, Un enfoque práctico, Séptima edición", Roger S Pressman, McGrawHill
									</p>
								 </div>	
						</article>
					</div>
				</div>
					<br>
		<!-- ***********************************************************-->	
				<div class="container">	
					<div class="row">			
						<div class= "col-xs-12 col-sm-12 col-md-6 color7" >
							<center><img class="img-fluid" src="http://beyondthegeek.com/wp-content/uploads/2018/02/test.jpg" alt="UNAD"></center>	
						</div>
						<div class="col-xs-12 col-sm-12 col-md-6 color4" >
							<center><img class="img-fluid" src="https://postparaprogramadores.com/wp-content/uploads/2018/03/depuracion-en-programacion.png" alt="UNAD"></center>			
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
<!-------------------------------------------------------------------------------------------------->				<script src="js/jquery.js"></script>
		       <script src="js/bootstrap.min.js"></script>	
		</body>
</html>