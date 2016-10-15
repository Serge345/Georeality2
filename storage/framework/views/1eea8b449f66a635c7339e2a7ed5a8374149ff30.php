<!doctype html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Georeality</title>
  <!--Import Google Icon Font-->
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
    $('select').material_select();
});
  </script>

</head>
<body>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header blue darken-3">
          <a class="navbar-brand bold" href="<?php echo e(url('/')); ?>">GEOREALIITY</a>
          <ul class="right hide-on-med-and-down">
            <li><a href="<?php echo e(url('/')); ?>">Perfil</a></li>
            

          </ul>
        </div>
        <div class="nav navbar-nav navbar-right">

        </div>
      </div>
    </nav>

    <section>
      <!-- Espacio para los mensajes flash enviados entre solicitudes -->

<?php if(Session::has('flash_message')): ?>
    <article class="alert alert-success">
          <?php echo e(Session::get('flash_message')); ?>

    </article>

<?php endif; ?>
        <!-- Espacio para el contenido de la página -->

        <article class="container">
          <?php if($errors->any()): ?>
              <div class="alert alert-danger">
                  <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                      <p><?php echo e($error); ?></p>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
              </div>
          <?php endif; ?>
            <?php echo $__env->yieldContent('content'); ?>
        </article>
    </section>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
     <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>
