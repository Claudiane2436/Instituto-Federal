<?php echo $__env->make('mdb.codigo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<form  method="POST" class="my-5">
   <h1 class="text-center my-5 font-weight-bold deep-orange-lighter-hover">Cadastrar Fornecedor</h1>
   <?php echo csrf_field(); ?>
   <div class="row" class="col-md-12">
      <label class="rounded mx-auto d-block">
         <p>Nome: <input value="<?php echo e(old('nome')); ?>"type="text" id="nome" name="nome"></p>
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

    <div class="row" class="col-md-12">
      <label class="rounded mx-auto d-block"> 
          <p>Telefone: <input value="<?php echo e(old('telefone')); ?>" type="text"  id="telefone" name="telefone"> </p>
          <?php $__errorArgs = ['telefone'];
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
      <p><input type="submit" dusk="submit" class="btn btn-success rounded mx-auto d-block" value="Cadastrar"></p>
      
   </form>

   <?php /**PATH C:\Users\Visitante\Desktop\IFSP\Terceiro Semestre\Programação (Segunda)\Laravel\AT 03\projeto\crm\resources\views/mdb/forms/fornecedor.blade.php ENDPATH**/ ?>