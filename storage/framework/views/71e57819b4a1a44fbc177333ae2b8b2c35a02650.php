<?php $__env->startSection('content'); ?>

<h1>Informacion de la universidad</h1>



<a href="<?php echo e(url('universidad')); ?>" class="waves-effect waves-light btn blue-darken-3">Volver</a>
<a href="<?php echo e(url('universidad/edit')); ?>" class="btn btn-primary">Guardar cambios</a>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>