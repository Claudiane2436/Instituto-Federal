
;

<?php $__env->startSection('content'); ?>

<img src="<?php echo e(asset('imagem/banner/carro.jpg')); ?>" class="img-fluid mx-auto d-block" />

<?php $__env->startComponent('component.card-carro'); ?>
<?php echo $__env->renderComponent(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('mdb.mdb-fullpage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Nova pasta\crm\resources\views/mdb/mdb-carro.blade.php ENDPATH**/ ?>