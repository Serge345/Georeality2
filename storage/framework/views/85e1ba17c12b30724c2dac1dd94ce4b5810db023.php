

<?php $__env->startSection('content'); ?>

<h2>Modificar un sitio</h2>
<p class="lead"></p>
<hr>

<?php echo Form::model($sitio, [
    'method' => 'PUT',
    'route' => ['sitio.update', $sitio->id]
]); ?>



<div class="input-field">
    <?php echo Form::label('Nombre', 'Nombre', ['class' => 'control-label']); ?>

    <?php echo Form::text('Nombre', null, ['class' => 'form-control']); ?>

</div>

<div class="input-field">
    <?php echo Form::label('descripcion', 'Descripcion', ['class' => 'control-label']); ?>

    <?php echo Form::textarea('Descripcion', null, ['class' => 'form-control']); ?>

</div>

<div class="input-field">
    <?php echo Form::label('latitud', 'Latitud', ['class' => 'control-label', 'step' => '0']); ?>

    <?php echo Form::text('Latitud', null, ['class' => 'form-control']); ?>

</div>

<div class="input-field">
    <?php echo Form::label('longitud', 'Longitud', ['class' => 'control-label']); ?>

    <?php echo Form::text('Longitud', null, ['class' => 'form-control']); ?>

</div>

<div class="input field col s3">
  <?php echo Form::label('Tipo', 'Tipo', ['for' => 'Tipo']); ?>

  <?php echo Form::select('Tipo', array('punto de interes' => 'Punto de interes', 'dependencia' => 'Dependencia')); ?>

</div>

<?php echo Form::submit('Actualizar sitio', ['class' => 'btn btn-primary']); ?>

<a href="<?php echo e(url('/')); ?>" class="btn btn-info">Cancelar</a>
<?php echo Form::close(); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>