<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
        <link rel="stylesheet" href="mdb/css/bootstrap.min.css">
        <link rel="stylesheet" href="mdb/css/mdb.min.css">
        <link rel="stylesheet" href="mdb/css/style.css">
    </head>
<body  style="background-color:black;">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark black-gradient rounded">
        <a class="navbar-brand" href="#">
            <img src="<?php echo e(asset('imagem/logo.png')); ?>" alt="logo" class="ml-3 mt-2">
        </a>
                
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse " id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                        <a class="h4 nav-link" href="customer">Home</a>
                </li>
                        
                <li class="nav-item dropdown">
                    <a class="h4 nav-link dropdown-toggle ml-5" data-toggle="dropdown" href="#">Serviços</a>

                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="carro">Carro</a>
                        <a class="dropdown-item" href="moto">Moto</a>
                    </div>
                </li>

                <li class="nav-item ">
                    <a class="h4 nav-link ml-5" href="somos">Quem Somos?</a>
                </li>

                <li class="nav-item ">
                    <a class="h4 nav-link ml-5" href="contato">Contato</a>
                </li>

            </ul>
        </div>
    </nav>
<?php /**PATH D:\Nova pasta\crm\resources\views/mdb/cabecalho.blade.php ENDPATH**/ ?>