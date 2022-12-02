<?php echo $__env->make('mdb.codigo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="container">
   <form  method="POST" class="my-5">
   <h1 class="text-center my-5 font-weight-bold deep-orange-lighter-hover">Cadastrar Veículo</h1>
      <div class="row">
        <?php echo csrf_field(); ?>
        <div class="rounded mx-auto d-block">
           <label>
              <p>Código do Cliente: <input value="<?php echo e(old('cliente_id')); ?>" type="number" id="cliente_id" name="cliente_id"></p>
              <?php $__errorArgs = ['cliente_id'];
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
                <p>Tipo de Veículo: 
                    <select value="<?php echo e(old('tipo')); ?>"  name="tipo">
                    <option value="">Faça a sua escolha...</option>
                        <option value="Carro">Carro</option>
                        <option value="Moto">Moto</option>
                    </select>
                </p>
            <?php $__errorArgs = ['tipo'];
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
               <p>Marca: <input value="<?php echo e(old('marca')); ?>" type="text" id="marca" name="marca"></p>
               <?php $__errorArgs = ['marca'];
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
                <p>Modelo: <input value="<?php echo e(old('modelo')); ?>" type="text" id="modelo" name="modelo"> </p>
                <?php $__errorArgs = ['modelo'];
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
            <p>Placa: <input value="<?php echo e(old('placa')); ?>" type="text" id="placa" name="placa"> </p>
               <?php $__errorArgs = ['placa'];
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
                <p class="ml-3">Ano: <input type="number" id="ano" name="ano"> </p>
                <?php $__errorArgs = ['ano'];
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
</div><?php /**PATH C:\Users\Visitante\Desktop\IFSP\Terceiro Semestre\Programação (Segunda)\Laravel\projeto\crm\resources\views/mdb/forms/veiculo.blade.php ENDPATH**/ ?>