<?php $__env->startSection('content'); ?>

<h1>Sitios de interés registrados:</h1>
<p class="lead">Lista de sitios. <a href="<?php echo e(url('sitio/create')); ?>">crear uno nuevo</a></p>
<hr>



<p>
  <?php $__currentLoopData = $sitios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sitio): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>

<h3><?php echo e($sitio->Nombre); ?></h3>
<p><?php echo e($sitio->Descripcion); ?></p>

<p>
    <a href="<?php echo e(route('sitio.show', $sitio->id)); ?>" class="btn btn-info">Ver Sitio</a>
    <a href="<?php echo e(route('sitio.edit', $sitio->id)); ?>" class="btn btn-primary">Editar Sitio</a>
</p>

<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

    <a href="<?php echo e(url('/')); ?>" class="btn btn-info">Volver al inicio</a>

</p>
<hr>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>