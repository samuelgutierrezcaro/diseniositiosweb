<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="author" content="Samuel Gutierrez Caro" />
		<meta name="description" content="las Pruebas de software estructurales pueden ejecutarse en todos los niveles de prueba y encajan muy bien si hemos utilizado técnicas de especificación de la estructura o arquitectura del software."/>
		<meta name="keywords" content="pruebas de software, pruebas funcionales, pruebas no funcionales, pruebas estructurales, software de regresión, repruebas"/>
		<title>PRUEBAS ESTRUCTURALES</title>
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
										<head><h5><strong>PRUEBAS ESTRUCTURALES</strong></h5></head><br>
										A continuación, en tercer lugar, tenemos las Pruebas Software Estructurales. Nuevamente pueden ejecutarse en todos los niveles de pruebas (ya sabéis: componentes, integración, sistema, etc.) y encajan muy bien si hemos utilizado técnicas de especificación de la estructura o arquitectura del Software. Es posible aplicar técnicas estáticas de análisis de código.
									</p>
									<p>
										Para expresar el alcance con un conjunto de pruebas (“test suite”) que ha cubierto la estructura o arquitectura en cuestión, se utiliza el concepto de Cobertura (“Coverage”), normalmente en forma de porcentaje.
									</p>
									<p>
										Es especialmente habitual utilizar herramientas de apoyo para calcular la cobertura del código en el caso de Pruebas de Componentes o en Pruebas de Integración de Componentes (por ejemplo, trazando la jerarquía de llamadas entre elementos). Puesto que indagamos en el comportamiento interno, estas pruebas se denominan también Pruebas de Caja Blanca (“white-box testing”).
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
						<div class= "col-xs-12 col-sm-12 col-md-6 color8" >
							<center><img class="img-fluid" src="img/cajablanca.jpg" alt="UNAD"></center>	
						</div>
						<div class="col-xs-12 col-sm-12 col-md-6 color9" >
							<p><br>
								Las técnicas de testing de caja blanca se realiza cuando el tester accede al código fuente de la aplicación y en consecuencia a los diferentes algoritmos y estructuras de datos utilizadas. La implementación de este tipo de pruebas requiere habilidades de programación, un conocimiento del framework de desarrollo y un cierto conocimiento funcional que permita conocer qué misión tienen determinadas clases y métodos. Tomado de "Jummp Gestión de Proyectos y Desarrollo de Software", Testing de caja blanca. Web https://jummp.wordpress.com/2011/05/21/testing-de-caja-blanca-white-box-testing/
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