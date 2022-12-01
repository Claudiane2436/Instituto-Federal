
;

<?php $__env->startSection('content'); ?>

<img src="<?php echo e(asset('imagem/banner/moto.png')); ?>" class="img-fluid mx-auto d-block" />

<?php $__env->startComponent('component.card-moto'); ?>
<?php echo $__env->renderComponent(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('mdb.mdb-fullpage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Nova pasta\projeto\resources\views/mdb/mdb-moto.blade.php ENDPATH**/ ?>