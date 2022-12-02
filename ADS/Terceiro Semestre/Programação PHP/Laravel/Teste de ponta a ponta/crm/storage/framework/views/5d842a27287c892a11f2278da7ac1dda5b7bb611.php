<?php echo $__env->make('mdb.codigo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="container">
   <form  method="POST" class="my-5">
   <h1 class="text-center my-5 font-weight-bold deep-orange-lighter-hover">Comprar Produto</h1>
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
                <p>Produto: 
                    <select value="<?php echo e(old('produto')); ?>"  name="produto">
                    <option value="">Faça a sua escolha...</option>
                        <option dusk="1" value="Difusor Traseiro">Difusor Traseiro</option>
                        <option dusk="2" value="Aro">Aro</option>
                        <option dusk="3" value="Volante">Volante</option>
                        <option dusk="4" value="Motor">Motor</option>
                        <option dusk="5" value="Tinta">Tinta</option>
                        <option dusk="6" value="Luz de LED">Luz de LED</option>
                        <option dusk="7" value="Farol">Farol</option>
                    </select>
                </p>
            <?php $__errorArgs = ['produto'];
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
                        <option dusk="moto" value="Moto">Moto</option>
                        <option dusk="carro" value="Carro">Carro</option>
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
            <p>Quantidade: <input value="<?php echo e(old('quantidade')); ?>" type="number" id="quantidade" name="quantidade"> </p>
               <?php $__errorArgs = ['quantidade'];
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
                <p class="ml-3">
                <p>Pagamento: 
                    <select value="<?php echo e(old('pagamento')); ?>"  name="pagamento">
                    <option value="">Escolha a forma de pagar...</option>
                        <option dusk="dinheiro" value="Dinheiro">Dinheiro</option>
                        <option dusk="cartao" value="Cartão">Cartão</option>
                    </select>
                </p>
                <?php $__errorArgs = ['pagamento'];
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
        <input type="submit" dusk="submit" class="col-3 btn btn-success rounded mx-auto d-block" value="Cadastrar">
        <a href="<?php echo e(url('cadastroServico')); ?>" dusk="agenda" class="col-3 btn btn-danger rounded mx-auto d-block" value=""> Agenda Serviço</a>
      </div>
           
           
   </form>
</div><?php /**PATH C:\Users\Visitante\Desktop\IFSP\Terceiro Semestre\Programação (Segunda)\Laravel\AT 03\projeto\crm\resources\views/mdb/forms/venda.blade.php ENDPATH**/ ?>