<?php $__env->startSection('content'); ?>

<h1>Campus encontrados:</h1>
<p class="lead">Estos son los campus disponibles <a href="<?php echo e(url('campus/create')); ?>">agregar uno nuevo</a></p>
<hr>



<p>
  <?php $__currentLoopData = $campus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $campus): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>

<h3><?php echo e($campus->Nombre); ?></h3>
<p><?php echo e($campus->Direccion); ?></p>

<p>
    <a href="<?php echo e(route('campus.show', $campus->id)); ?>" class="btn btn-info">Ver campus</a>
    <a href="<?php echo e(route('campus.edit', $campus->id)); ?>" class="btn btn-primary">Editar campus</a>
</p>

<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

    <a href="<?php echo e(url('/')); ?>" class="btn btn-info">Volver al inicio</a>

</p>
<hr>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>