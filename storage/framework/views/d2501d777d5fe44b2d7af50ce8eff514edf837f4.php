

<?php $__env->startSection('content'); ?>

<h1>Informacion del sitio</h1>
<h1><?php echo e($sitio->Nombre); ?></h1>
<h2>Descripcion:</h2>
<p class="lead"><?php echo e($sitio->Descripcion); ?></p>

<table class="striped">
  <td>Latitud</td>
  <td><?php echo e($sitio->Latitud); ?></td>
</tr>
<tr>
  <td>Longitud</td>
  <td><?php echo e($sitio->Longitud); ?></td>
</tr>
<tr>
  <td>Fecha Creación</td>
  <td><?php echo e($sitio->created_at); ?></td>
</tr>
<tr>
  <td>Última modificación</td>
  <td><?php echo e($sitio->updated_at); ?></td>
</tr>
</table>

<hr>
<p>
<a href="<?php echo e(route('sitio.index')); ?>" class="waves-effect waves-light btn light-blue accent-3">Volver a la lista</a>
<?php echo Form::open([
    'method' => 'DELETE',
    'route' => ['sitio.destroy', $sitio->id]
]); ?>

    <?php echo Form::submit('¿Borrar sitio?', ['class' => 'waves-effect waves-light btn red darken-4']); ?>

<?php echo Form::close(); ?>



<a href="<?php echo e(url('/')); ?>" class="waves-effect waves-light btn blue-darken-3">Volver al inicio</a>
</p>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>