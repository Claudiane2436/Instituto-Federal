<?php echo $__env->make('mdb.codigo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="container">
   <form  method="POST" class="my-5">
   <h1 class="text-center my-5 font-weight-bold deep-orange-lighter-hover">Cadastrar Cliente</h1>
      <div class="row">
        <?php echo csrf_field(); ?>
        <div class="rounded mx-auto d-block">
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

           <label>
            <p>Sobrenome: <input value="<?php echo e(old('snome')); ?>" type="text" id="snome" name="snome"></p>
            <?php $__errorArgs = ['snome'];
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
               <p>Email: <input value="<?php echo e(old('email')); ?>" type="text" MAXLENGTH="30" id="email" name="email"></p>
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
                <p>CPF: <input value="<?php echo e(old('cpf')); ?>" type="text" MAXLENGTH="15" id="cpf" name="cpf"> </p>
                <?php $__errorArgs = ['cpf'];
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
               <p class="ml-3">Sexo: <input class="ml-3" type="radio" value="1" name="genero" id="Sexo_0"> Masculino
                <input type="radio" class="ml-3" name="genero" value="2" id="Sexo"> Feminino
                <input type="radio" class="ml-3" name="genero" value="0" id="Sexo"> Não informado
               </p>
               <?php $__errorArgs = ['genero'];
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
                <p class="ml-3">Telefone: <input type="text" id="telefone" name="telefone"> </p>
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
      </div>
           <p><input type="submit" class="btn btn-success rounded mx-auto d-block" value="Cadastrar"></p>
           
   </form>
</div><?php /**PATH C:\Users\Visitante\Desktop\IFSP\Terceiro Semestre\Programação (Segunda)\Laravel\projeto\crm\resources\views/mdb/forms/cliente.blade.php ENDPATH**/ ?>