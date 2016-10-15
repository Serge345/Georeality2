<?php $__env->startSection('content'); ?>

<h1>Sitios de interés registrados:</h1>
<p class="lead">Lista de sitios. <a href="<?php echo e(url('sitio/create')); ?>">crear uno nuevo</a></p>
<hr>



<p>
    <a href="<?php echo e(url('sitio/show')); ?>" class="btn btn-info">ver sitio</a>
    <a href="<?php echo e(url('/')); ?>" class="btn btn-info">Volver al inicio</a>
    
</p>
<hr>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>