<?php echo $__env->make('mdb.cabecalho', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;

<?php echo $__env->yieldContent('content'); ?>;
  
<?php echo $__env->make('mdb.futter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
<?php /**PATH D:\Nova pasta\projeto\resources\views/mdb/mdb-fullpage.blade.php ENDPATH**/ ?>