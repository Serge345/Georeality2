


<?php $__env->startSection('content'); ?>

<h2>Editar usuario</h2>
<p class="lead"></p>
<hr>

<?php echo Form::model($usuario, [
    'method' => 'PUT',
    'route' => ['usuario.update', $usuario->id]
]); ?>




<div class="input-field col s3">
    <?php echo Form::label('Nombre', 'Nombre', ['class' => 'control-label']); ?>

    <?php echo Form::text('Nombre', null, ['class' => 'form-control']); ?>

</div>

<div class="input-field col s3">
    <?php echo Form::label('Email', 'Email', ['class' => 'control-label']); ?>

    <?php echo Form::email('Email', null, ['class' => 'form-control']); ?>

</div>

<div class="input-field col s3">
    <?php echo Form::label('Password', 'Password', ['class' => 'control-label', 'step' => '0']); ?>

    <?php echo Form::password('Password', null, ['class' => 'form-control']); ?>

</div>
<div class="input field col s3">
  <?php echo Form::label('Privilegios', 'Privilegios', ['for' => 'Tipo']); ?>

  <?php echo Form::select('Tipo', array('usuario' => 'Usuario', 'administrador' => 'Administrador')); ?>

</div>



<?php echo Form::submit('Actualizar Usuario', ['class' => 'btn btn-primary']); ?>

<a href="<?php echo e(url('/usuario')); ?>" class="btn btn-info">Cancelar</a>
<?php echo Form::close(); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>