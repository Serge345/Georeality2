 

<?php $__env->startSection('content'); ?>

<script type="text/javascript">

$(document).ready(function() {
    $('select').material_select();
});

</script>
<h2>Agregar un nuevo sitio</h2>
<p class="lead"></p>
<hr>

<?php echo Form::open(['route' => 'sitio.store']); ?>


<div class="input-field col s3">
    <?php echo Form::label('Nombre', 'Nombre', ['class' => 'control-label']); ?>

    <?php echo Form::text('Nombre', null, ['class' => 'form-control']); ?>

</div>

<div class="input-field col s3">
    <?php echo Form::label('descripcion', 'Descripcion', ['class' => 'control-label']); ?>

    <?php echo Form::textarea('descripcion', null, ['class' => 'form-control']); ?>

</div>

<div class="input-field col s3">
    <?php echo Form::label('latitud', 'Latitud', ['class' => 'control-label', 'step' => '0']); ?>

    <?php echo Form::text('latitud', null, ['class' => 'form-control']); ?>

</div>

<div class="input-field col s3">
    <?php echo Form::label('longitud', 'Longitud', ['class' => 'control-label']); ?>

    <?php echo Form::text('longitud', null, ['class' => 'form-control']); ?>

</div>

<div class="input-field col s3">
  
     <?php echo Form::select('tipo', array('punto de interes'=>'punto de interes','dependencia'=> 'dependencia')); ?>

</div>

<?php echo Form::submit('Agregar sitio', ['class' => 'btn btn-primary']); ?>

<a href="<?php echo e(url('sitio')); ?>" class="btn btn-info">Cancelar</a>
<?php echo Form::close(); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>