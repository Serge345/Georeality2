<?php $__env->startSection('content'); ?>

<h1>Informacion del campus</h1>
<h1><?php echo e($campus->Nombre); ?></h1>
<h3>Direccion:</h3>
<p class="flow-text"><?php echo e($campus->Direccion); ?></p>

<table class="striped">

  <td>Fecha Creación</td>
  <td><?php echo e($campus->created_at); ?></td>
</tr>
<tr>
  <td>Última modificación</td>
  <td><?php echo e($campus->updated_at); ?></td>
</tr>
</table>

<hr>
<p>
<a href="<?php echo e(route('campus.index')); ?>" class="waves-effect waves-light btn light-blue accent-3">Volver a la lista</a>
<?php echo Form::open([
    'method' => 'DELETE',
    'route' => ['campus.destroy', $campus->id]
]); ?>

    <?php echo Form::submit('Borrar campus', ['class' => 'btn red darken-4']); ?>

<?php echo Form::close(); ?>



<a href="<?php echo e(url('/')); ?>" class="waves-effect waves-light btn blue-darken-3">Volver al inicio</a>
</p>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>