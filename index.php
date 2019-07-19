<!DOCTYPE html>
<?php
	include('includes/metatags.php'); 
	include('includes/header.php')
?>
<body>
	<!--- Image Slider -->
	<div class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active"><img src="img/Idobbok_webbanner_prueba1.png"></div>
			<div class="carousel-item"><img src="img/Idobook_banners_prueba2.png"></div>
			<div class="carousel-item"><img src="img/Idobook_banners_prueba3.png"></div>
		</div>
	</div>
	<!--- End Image Slider -->

	<!--- BOOTSTRAP -->
	<div class="container">
		<div class="row justify-content-center text-center">
			<div class="col-10 py-5">
				<h2>¿Quiénes Somos? RAUL</h2>
				<p class="lead">Somos una start up que trae para todas nuestras Novia una agenda innovadora y amigable de conexión 
					entre los proveedores de servicios nupciales y nuestras novias; nuestra plataforma ofrece 
					una agenda impresa y servicios web para lograr crear excelentes relaciones de negocio. 
					Nuestros esfuerzos estarán siempre dirigidos a lograr esa perfecta conexión para que 
					nuestras novias encuentren los mejores productos y servicios para su día especial</p>
					<a class="btn btn-purple btn-lg" href="agenda.php">AGENDA IMPRESA</a>
					<a class="btn btn-purple btn-lg" href="web.php">POSICIONAMIENTO WEB</a>
			</div>
		</div>
	</div>
	<!--- BOOTSTRAP -->

	<!--- Start Jumbotron -->
	<div class="jumbotron">
		<div class="container">
			<h2 class="text-center pt-5 pb-3">NUESTRAS NOVIAS PODRÁN ENCONTRAR</h2>
			<div class="row justify-content-center text-center">
				<div class="col-10 col-md-4">
					<div class="feature">
						<img src="img/iconos_webidobook_foto-04.png">
						<h3>PROVEEDORES</h3>
						<p>Puro proveedor chingón</p>
					</div>
				</div>
				<div class="col-10 col-md-4">
					<div class="feature">
						<img src="img/iconos_webidobook_flores-07.png">
						<h3>SERVICIOS</h3>
						<p>Puros servicios bien vergas</p>
					</div>
				</div>
				<div class="col-10 col-md-4">
					<div class="feature">
						<img src="img/iconos_webidobook_wedplanner-12.png">
						<h3>LUGARES PARA EVENTOS</h3>
						<p>y los mejores eventos con Toño Antunes</p>
					</div>
				</div>
			</div><!--- End Row -->
		</div><!--- End Container -->
	</div>
	<!--- End Jumbotron -->

	<!--- Two Column Section -->
	<div class="container py-3">
		<div class="row justify-content-center py-5">
			<div class="col-lg-6">
				<h3 class="pb-4">Regístrate con nosotros</h3>
				<p>Forma parte de la comunidad mas grande de proveedores de bodas</p>
				<p>Vamos a ser los mas chingones!</p><a class="btn btn-purple btn-lg" href="#">Unete a nuestro equipo!</a>
			</div>
			<div class="col-lg-6"><img class="img-fluid" src="img/iconos_webidobook_invitaciones-13.png"></div>
		</div>
	</div>
	<!--- End Two Column Section -->

	<!--- Start Footer -->
	<?php include('includes/footer.php'); ?>
	<!--- End of Footer -->

<!--- Script Source Files -->
<script src="js/jquery-3.3.1.min.js"></script> 
<script src="bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
<!--- End of Script Source Files -->

</body>
</html>