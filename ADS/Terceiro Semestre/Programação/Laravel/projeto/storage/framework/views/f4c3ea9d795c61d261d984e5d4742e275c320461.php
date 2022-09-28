
;

<?php $__env->startSection('content'); ?>

<div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="<?php echo e(asset('imagem/banner/garagem.png')); ?>" class="img-fluid mx-auto d-block" />
            </div>

            <div class="col-md-6">
                <div class="card card-cascade wider">
                    <div class="view view-cascade gradient-card-header blue-gradient">
                        <h2 class="card-header-title mb-3">Quem Somos?</h2>
                    </div>

                    <div class="card-body card-body-cascade text-center">
                        <p class="card-text text-dark">A CustomerCar é especializada em transformar veículos para seus clientes, 
                            atendendo com extrema qualidade em seus serviços, priorizando acabamento e 
                            funcionalidade. </br> </br>
                            Tecnologia de ponta, emprego de materiais de altíssima qualidade e mão de obra 
                            altamente capacitada. Visamos ser únicos pela qualidade final de nossos produtos 
                            dando a certeza de sucesso ao cliente, para isso desenvolvemos projetos ousados e 
                            inovadores, dando a garantia de que tudo funcionara perfeitamente durante o uso real.
                        </p>
                    </div>
                </div>
            </div>
    </div>

  
<?php $__env->startComponent('component.comentario'); ?>
<?php echo $__env->renderComponent(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('mdb.mdb-fullpage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Nova pasta\projeto\resources\views/mdb/mdb-somos.blade.php ENDPATH**/ ?>