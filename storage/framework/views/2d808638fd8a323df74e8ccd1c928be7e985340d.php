<?php $__env->startSection('content'); ?>

<h1>Informacion de Usuario</h1>



<a href="<?php echo e(url('usuario')); ?>" class="waves-effect waves-light btn blue-darken-3">Volver</a>
<a href="<?php echo e(url('usuario/edit')); ?>" class="btn btn-primary">editar usuario</a>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>