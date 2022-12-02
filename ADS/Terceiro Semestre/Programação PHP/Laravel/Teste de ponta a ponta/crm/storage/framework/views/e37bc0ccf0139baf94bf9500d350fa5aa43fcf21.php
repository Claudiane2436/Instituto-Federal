<?php echo $__env->make('mdb.codigo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div style="height: 100vh">
    <div class="flex-center flex-column">
        <h1 class="animated fadeIn mb-4">Cadastros</h1>
        <div class="row">
            <div class="col-md-12">
                <p class="blue-text text-right mb-5 mr-5">
                    <a href="cadastroFornecedor">Fornecedor</a>
                    <a class="ml-5" href="<?php echo e(url('cadastroCliente')); ?>">Cliente</a>
                    <a class="ml-5" href="<?php echo e(url('cadastroVeiculo')); ?>">Veículo</a>
                    <a class="ml-5" href="<?php echo e(url('cadastroProduto')); ?>">Produto</a>
                </p>
            </div>
        </div>

    </div>
<?php /**PATH C:\Users\Visitante\Desktop\IFSP\Terceiro Semestre\Programação (Segunda)\Laravel\projeto\crm\resources\views/site/cadastro.blade.php ENDPATH**/ ?>