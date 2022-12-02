<?php echo $__env->make('mdb.codigo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="container">
   <form  method="POST" class="my-5">
   <h1 class="text-center my-5 font-weight-bold deep-orange-lighter-hover">Cadastrar Produto</h1>
      <div class="row">
        <?php echo csrf_field(); ?>
        <div class="rounded mx-auto d-block">
           <label>
              <p>Código do Fornecedor: <input value="<?php echo e(old('fornecedor_id')); ?>" type="number" id="fornecedor_id" name="fornecedor_id"></p>
              <?php $__errorArgs = ['fornecedor_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                  <p class="red-text"><?php echo e($message); ?></p>
              <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
           </label>

           <label>
           <p>Nome: <input value="<?php echo e(old('nome')); ?>" type="text" id="nome" name="nome"></p>
               <?php $__errorArgs = ['nome'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                  <p class="red-text"><?php echo e($message); ?></p>
              <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </label>
         </div>
      </div>

      <div class="row">
          <div class="rounded mx-auto d-block">
            <label>
            <p>Categoria: 
                    <select value="<?php echo e(old('categoria')); ?>"  name="categoria">
                    <option value="">Faça a sua escolha...</option>
                        <option value="Carro">Carro</option>
                        <option value="Moto">Moto</option>
                    </select>
                </p>
               <?php $__errorArgs = ['categoria'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                  <p class="red-text"><?php echo e($message); ?></p>
              <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

              
            </label>
           
            <label> 
            <p>Estoque: <input value="<?php echo e(old('estoque')); ?>" type="number" id="estoque" name="estoque"> </p>
                <?php $__errorArgs = ['estoque'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                  <p class="red-text"><?php echo e($message); ?></p>
              <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </label>
          </div>
      </div>

      <div class="row">
        <div class="rounded mx-auto d-block">
            

            <label> 
                <p class="ml-3">Preço: <input type="number" id="preco" name="preco"> </p>
                <?php $__errorArgs = ['preco'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                  <p class="red-text"><?php echo e($message); ?></p>
              <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </label>
        </div>			
      </div>
           <p><input type="submit" class="btn btn-success rounded mx-auto d-block" value="Cadastrar"></p>
           
   </form>
</div><?php /**PATH C:\Users\Visitante\Desktop\IFSP\Terceiro Semestre\Programação (Segunda)\Laravel\projeto\crm\resources\views/mdb/forms/produto.blade.php ENDPATH**/ ?>