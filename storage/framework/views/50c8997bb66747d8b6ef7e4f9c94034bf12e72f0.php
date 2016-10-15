

<?php $__env->startSection('content'); ?>

<h1>Usuarios en el sistema:</h1>
<p class="lead">Lista de usuarios. <a href="<?php echo e(url('usuario/create')); ?>">crear uno nuevo</a></p>
<hr>

<p>
  <?php $__currentLoopData = $usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>

<h3><?php echo e($usuario->Nombre); ?></h3>
<p><?php echo e($usuario->Email); ?></p>

<p>
    <a href="<?php echo e(route('usuario.show', $usuario->id)); ?>" class="btn btn-info">Ver usuario</a>
    <a href="<?php echo e(route('usuario.edit', $usuario->id)); ?>" class="btn btn-primary">Editar usuario</a>
</p>

<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

    <a href="<?php echo e(url('/')); ?>" class="btn btn-info">Volver al inicio</a>
</p>
<hr>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>