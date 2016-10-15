<?php $__env->startSection('content'); ?>

<h2>Editar Campus</h2>
<p class="lead"></p>
<hr>

<?php echo Form::model($campus, [
    'method' => 'PUT',
    'route' => ['campus.update', $campus->id]
]); ?>


<div class="row">
      <div class="input-field col s3">
          <?php echo Form::label('Nombre', 'Nombre', ['for'=> 'Nombre']); ?>

          <?php echo Form::text('Nombre', null, ['class' => 'validate']); ?>

      </div>

      <div class="input-field col s3">
          <?php echo Form::label('Direccion', 'Direccion', ['for'=>'Direccion']); ?>

          <?php echo Form::text('Direccion', null, ['class' => 'validate']); ?>

      </div>
</div>

<?php echo Form::submit('Guardar cambios', ['class' => 'btn btn-primary']); ?>

<a href="<?php echo e(url('/campus')); ?>" class="btn btn-info">Cancelar</a>
<?php echo Form::close(); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>