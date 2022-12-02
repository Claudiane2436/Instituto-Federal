    <div class="row">
        <div class="col-md-10 my-4 mx-auto d-block" style="background-color:white;">
            <section class="mb-4">
                <h2 class="h1-responsive font-weight-bold text-center my-4">DEIXE UM COMENTÁRIO</h2>
                    <div class="row">
                        <div class="col-md-12 mb-md-0 mb-5">
                            <form id="contact-form" name="contact-form" method="POST">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="md-form mb-0">
                                            <input type="text" id="name" name="name" class="form-control">
                                            <label for="name" class="text-dark">Seu nome</label>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="md-form mb-0">
                                            <input type="text" id="email" name="email" class="form-control">
                                            <label for="email" class="text-dark">Email</label>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="md-form">
                                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                                            <label for="message" class="text-dark">Comentário</label>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <div class="text-center">
                                <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Publicar</a>
                            </div>
                            <div class="status"></div>
                        </div>
    
                    </div>
            </section>
        </div>
    </div>
</div>
<?php /**PATH D:\Nova pasta\crm\resources\views/component/comentario.blade.php ENDPATH**/ ?>