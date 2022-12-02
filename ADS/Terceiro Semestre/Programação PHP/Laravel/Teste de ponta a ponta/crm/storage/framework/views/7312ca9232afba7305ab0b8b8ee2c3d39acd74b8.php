
;

<?php $__env->startSection('content'); ?>
<h2 class="h1-responsive font-weight-bold text-center text-white my-4">ENTRE EM CONTATO</h2>
<div class="container">
    <div class="row">
        <div class="col-md-9 mx-auto d-block">
            <section class="mb-4">
                <div class="row">
                    <div class="col-md-9 mb-md-0 mb-5">
                        <form id="contact-form" name="contact-form" method="POST">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input type="text" id="name" name="name" class="form-control">
                                        <label for="name" class="text-white">Nome</label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input type="text" id="email" name="email" class="form-control">
                                        <label for="email" class="text-white">Email</label>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="md-form mb-0">
                                        <input type="text" id="subject" name="subject" class="form-control">
                                        <label for="subject" class="text-white">Assunto</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="md-form">
                                        <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                                        <label for="message" class="text-white">Mensagem</label>
                                    </div>
                                </div>
                            </div>

                        </form>

                        <div class="text-center text-md-left">
                            <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Enviar</a>
                        </div>
                        <div class="status"></div>
                    </div>

                    <div class="col-md-3">
                        <ul class="list-unstyled">
                            <li>
                                <i class="fas fa-map-marker-alt fa-2x"></i>
                                <p  class="text-white">Rua das Oliveiras, 105</p>
                                <p class="text-white">São Paulo/SP </p>
                                <p class="text-white">CEP: 07458-874</p>
                            </li>

                            <li>
                                <i class="fas fa-phone mt-4 fa-2x"></i>
                                <p class="text-white">+ 55 11 98478-8745</p>
                            </li>

                            <li>
                                <i class="fas fa-envelope mt-4 fa-2x"></i>
                                <p class="text-white">josedasilva58745@hotmail.com</p>
                            </li>
                        </ul>
                    </div>
                </div>

            </section>
        </div>
    </div>
</div>
       


<?php $__env->stopSection(); ?>
<?php echo $__env->make('mdb.mdb-fullpage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Nova pasta\crm\resources\views/mdb/mdb-contato.blade.php ENDPATH**/ ?>