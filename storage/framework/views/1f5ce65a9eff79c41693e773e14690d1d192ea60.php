 

<?php $__env->startSection('content'); ?>

<h2>Añadir universidad</h2>
<p class="lead"></p>
<hr>

<?php echo Form::open(['route' => 'universidad.store']); ?>


<div class="input-field col s3">
    <?php echo Form::label('Nombre', 'Nombre', ['class' => 'control-label']); ?>

    <?php echo Form::text('nombre', null, ['class' => 'form-control']); ?>

</div>

<div class="input-field col s3">
    <?php echo Form::label('Direccion', 'Direccion', ['class' => 'control-label']); ?>

    <?php echo Form::text('direccion', null, ['class' => 'form-control']); ?>

</div>


<?php echo Form::submit('Añadir universidad', ['class' => 'btn btn-primary']); ?>

<a href="<?php echo e(url('universidad')); ?>" class="btn btn-info">Cancelar</a>
<?php echo Form::close(); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>