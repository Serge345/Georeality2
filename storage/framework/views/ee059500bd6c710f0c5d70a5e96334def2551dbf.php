<?php $__env->startSection('content'); ?>

<h1>Bienvenido a Georeality</h1>
<h2>Seleccione una opción</h2>
<p class="lead">
</p>
<hr>
<a href="<?php echo e(url('sitio')); ?>" class="btn btn-info">Sitios</a>
<a href="<?php echo e(url('usuario')); ?>" class="btn btn-primary"> Usuarios</a>
<a href="<?php echo e(url('universidad')); ?>" class="btn btn-info">Universidades</a>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>