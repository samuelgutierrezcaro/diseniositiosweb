<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="author" content="Samuel Gutierrez Caro" />
		<meta name="description" content="Son tipos de prueba en función del objetivo, típicamente encontraremos el comportamiento del sistema, subsistema o componente software descrito en especificaciones de requisitos o casos de uso"/>
		<meta name="keywords" content="pruebas de software, pruebas funcionales, pruebas no funcionales, pruebas estructurales, software de regresión, repruebas"/>
		<title>Pruebas funcionales</title>
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
										<head><h5><strong>PRUEBAS FUNCIONALES</strong></h5></head><br>
										Son tipos de prueba en función del objetivo, típicamente encontraremos el comportamiento del sistema, subsistema o componente software descrito en especificaciones de requisitos o casos de uso, aunque también puede no estar documentado (“que funcione como el sistema al que sustituye”) . Es decir, con las funciones establecemos “lo que el sistema hace”.
									</p>
									<p>
										Estas pruebas se definen a partir de funciones o características (como decimos, bien descritas en documentos o bien interpretadas por los probadores) y su interoperabilidad con sistemas específicos, pudiendo ejecutarse en todos los niveles de pruebas (componentes, integración, sistema, etc).
									</p>
									<p>
										Se consideran Pruebas de Caja Negra (“black-box testing”) puesto que valoramos el comportamiento externo del sistema. Las Pruebas de Seguridad o las Pruebas de Interoperabilidad entre sistemas o componentes son casos especializados de las pruebas funcionales.
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
							<center><img class="img-fluid" src="img/cajanegra.jpg" alt="UNAD"></center>	
						</div>
						<div class="col-xs-12 col-sm-12 col-md-6 color9" >
							<p><br>
								Las pruebas de caja negra se limitan a que el tester pruebe con “datos” de entrada y estudie como salen, sin preocuparse  de lo que ocurre en el interior. Principalmente, se centran en módulos o charters de interfaz de usuario (pantalla, ficheros, canales de comunicación…) pero suelen ser útiles en cualquier módulo ya que todos o la mayoría tienen datos de entrada y salida que se pueden comprobar y verificar. Como cualquier otra prueba, las de caja negra se apoyan y basan en la especificación de requisitos y documentación funcional, estos requisitos suelen ser más complejos que los internos, para ello realizaremos una “cobertura de especificación” que será muy recomendable para conseguir probar el mayor campo posible. Tomado de "Globe, Pruebas de caja  negra. Web https://www.globetesting.com/2012/08/pruebas-de-caja-negra/		
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