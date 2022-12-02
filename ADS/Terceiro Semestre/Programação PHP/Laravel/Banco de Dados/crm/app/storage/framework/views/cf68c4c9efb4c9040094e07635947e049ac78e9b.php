<?php echo $__env->make('mdb.codigo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="container">
   <form  method="POST" class="my-5">
   <h1 class="text-center my-5 font-weight-bold deep-orange-lighter-hover">Agendar Serviço</h1>
      <div class="row">
        <?php echo csrf_field(); ?>
        <div class="rounded mx-auto d-block">
           <label>
              <p>Email do Cliente: <input value="<?php echo e(old('email')); ?>" type="text" id="email" name="email"></p>
              <?php $__errorArgs = ['email'];
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
                <p>Servico: 
                    <select value="<?php echo e(old('servico')); ?>"  name="servico">
                    <option value="">Escolha o serviço...</option>
                        <option value="Difusor Traseiro">Modificação Interna</option>
                        <option value="Iluminação de LED">Iluminação de LED</option>
                        <option value="Pintura">Pintura</option>
                    </select>
                </p>
            <?php $__errorArgs = ['servico'];
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
                    <option value="">Escolha a categoria...</option>
                        <option value="Moto">Moto</option>
                        <option value="Carro">Carro</option>
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
            <p>Data: <input value="<?php echo e(old('dia')); ?>" type="date" id="dia" name="dia"> </p>
               <?php $__errorArgs = ['dia'];
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


        <input type="submit" class="col-3 btn btn-success rounded mx-auto d-block" value="Cadastrar">
          
           
   </form>
</div><?php /**PATH C:\Users\Visitante\Desktop\IFSP\Terceiro Semestre\Programação (Segunda)\Laravel\projeto\crm\resources\views/mdb/forms/servico.blade.php ENDPATH**/ ?>