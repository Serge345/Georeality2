


<?php $__env->startSection('content'); ?>

<h1>Informacion del usuario</h1>
<h1><?php echo e($usuario->nombre); ?></h1>

<table class="striped">
  <td>Correo electronico</td>
  <td><?php echo e($usuario->email); ?></td>
</tr>
<tr>
  <td>Tipo de usuario</td>
  <td><?php echo e($usuario->privilegio); ?></td>
</tr>
<tr>
  <td>Fecha Creación</td>
  <td><?php echo e($usuario->created_at); ?></td>
</tr>
<tr>
  <td>Última modificación</td>
  <td><?php echo e($usuario->updated_at); ?></td>
</tr>
</table>

<hr>
<p>
<a href="<?php echo e(route('usuario.index')); ?>" class="waves-effect waves-light btn light-blue accent-3">Volver a la lista</a>
<?php echo Form::open([
    'method' => 'DELETE',
    'route' => ['usuario.destroy', $usuario->id]
]); ?>

    <?php echo Form::submit('Eliminar usuario', ['class' => 'btn red darken-4']); ?>

<?php echo Form::close(); ?>



<a href="<?php echo e(url('/')); ?>" class="waves-effect waves-light btn blue-darken-3">Volver al inicio</a>
</p>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>