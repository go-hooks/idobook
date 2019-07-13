<?php
	include('includes/metatags.php'); 
?>

<body>
    
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
    <?php include('includes/header.php'); ?>
    </div>

<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
  <h1 class="display-4">Idobook Web</h1>
  <p class="lead">A continuación te invitamos a adquirir uno de nuestros planes de posicionamiento web:</p>
</div>

<div class="container">
  <div class="card-deck mb-3 text-center">
    <div class="card mb-4 box-shadow">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Standard</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">$29 MXN<small class="text-muted">/ mes</small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>Datos de contacto</li>
          <li>Acceso a publicidad especial</li>
          <li>Soporte por correo electrónico</li>
          <li>Help center access</li>
        </ul>
        <button type="button" class="btn btn-lg btn-block btn-primary">Adquirir Plan</button>
      </div>
    </div>
    <div class="card mb-4 box-shadow">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Premium</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">$59 MXN<small class="text-muted">/ mes</small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>Minisitio dentro de nuestro directorio</li>
          <li>Descripción detallada de servicios</li>
          <li>Acceso a banner promocionales</li>
          <li>Soporte Telefónico Lunes-Viernes</li>
        </ul>
        <button type="button" class="btn btn-lg btn-block btn-primary">Adquirir Plan</button>
      </div>
    </div>
    <div class="card mb-4 box-shadow">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Personalizado</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">Cotiza<small class="text-muted"></small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>Desarrollo en base a tus necesidades</li>
          <li>test 1</li>
          <li>test 2</li>
          <li>test 3</li>
        </ul>
        <button type="button" class="btn btn-lg btn-block btn-primary">Solicitar cotización</button>
      </div>
    </div>
  </div>

 <!--- Start Footer -->
 <?php include('includes/footer.php'); ?>
<!--- End of Footer -->
</div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="../../../../assets/js/vendor/popper.min.js"></script>
<script src="../../../../dist/js/bootstrap.min.js"></script>
<script src="../../../../assets/js/vendor/holder.min.js"></script>
<script>
  Holder.addTheme('thumb', {
    bg: '#55595c',
    fg: '#eceeef',
    text: 'Thumbnail'
  });
</script>
</body>