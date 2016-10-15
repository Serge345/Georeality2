

<?php $__env->startSection('content'); ?>

<h1>Universidades</h1>
<p class="lead">Lista de universidades. <a href="<?php echo e(url('universidad/create')); ?>">Añadir nueva</a></p>
<hr>



<p>
    <a href="<?php echo e(url('universidad/show')); ?>" class="btn btn-info">Ver universidad</a>
    <a href="<?php echo e(url('/')); ?>" class="btn btn-info">Volver al inicio</a>
</p>
<hr>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>