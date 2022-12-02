
;

<?php $__env->startSection('content'); ?>

<img src="<?php echo e(asset('imagem/banner/moto.png')); ?>" class="img-fluid mx-auto d-block" />

<?php $__env->startComponent('component.card-moto'); ?>
<?php echo $__env->renderComponent(); ?>

<div class="row">
    <a href="<?php echo e(url('cadastroVenda')); ?>" class="col-5 mx-auto d-block btn btn-info btn-lg">Comprar Produto</a>
    <a href="#"class="col-5 mx-auto d-block btn btn-info btn-lg">Agenda Serviço</a>      
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('mdb.mdb-fullpage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Visitante\Desktop\IFSP\Terceiro Semestre\Programação (Segunda)\Laravel\projeto\crm\resources\views/mdb/mdb-moto.blade.php ENDPATH**/ ?>