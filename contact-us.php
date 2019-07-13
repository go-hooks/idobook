<?php
	include('includes/metatags.php'); 
?>

<body>
<?php include('includes/header.php'); ?>

<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">

</div>

	<!--- BOOTSTRAP -->
<div class="container">
		<div class="row justify-content-center text-center">
			<div class="col-10 py-5">
				<h2>CONTÁCTANOS</h2>
				<p class="lead">Queremos saber más de ti, llena el siguiente formulario con tus datos</p>
			</div>
		</div>
	</div>
	<form class="form-signin">
	  <h1 class="h3 mb-3 font-weight-normal">Ingresa tus datos:</h1>
	  <label for="inputName" class="sr-only">Nombre</label>
	  <input type="email" id="inputName" class="form-control" placeholder="Nombre" required autofocus>
	  <label for="inputLastName" class="sr-only">Apellido</label>
      <input type="email" id="inputLastName" class="form-control" placeholder="Apellido" required autofocus>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="inputEmail" class="form-control" placeholder="Correo" required autofocus>
      <label for="inputPhone" class="sr-only">Password</label>
	  <input type="password" id="inputPhone" class="form-control" placeholder="Móvil" required autofocus>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Subscribirme al newsletter
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Enviar</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2019 GRUPO IDOBOOK SAS DE CV</p>
    </form>
<!--- BOOTSTRAP -->
</body>
