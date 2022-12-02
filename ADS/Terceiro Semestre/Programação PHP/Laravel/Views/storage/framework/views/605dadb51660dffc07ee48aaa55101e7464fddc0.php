
;

<?php $__env->startSection('content'); ?>

<div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-1z" data-slide-to="1"></li>
        <li data-target="#carousel-example-1z" data-slide-to="2"></li>
      </ol>
    
      
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
          <img class="d-block w-100" src="<?php echo e(asset('imagem/carousel/banner01.jpg')); ?>" alt="Primeiro slide">
        </div>
        
        <div class="carousel-item">
          <img class="d-block w-100" src="<?php echo e(asset('imagem/carousel/banner02.jpg')); ?>" alt="Segundo slide">
        </div>

        <div class="carousel-item">
          <img class="d-block w-100" src="<?php echo e(asset('imagem/carousel/banner03.jpg')); ?>" alt="Terceiro slide">
        </div>
    </div>

    <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
    </a>

    <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Próximo</span>
    </a>
 
</div>
<img src="<?php echo e(asset('imagem/galeria.png')); ?>" alt="logo" class="rounded mx-auto d-block my-5">

    
<?php $__env->startComponent('component.galeria'); ?>
<?php echo $__env->renderComponent(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('mdb.mdb-fullpage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Nova pasta\crm\resources\views/mdb/mdb-home.blade.php ENDPATH**/ ?>