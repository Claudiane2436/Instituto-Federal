@include('mdb.codigo')

<div style="height: 100vh">
    <div class="flex-center flex-column">
        <h1 class="animated fadeIn mb-4">Bem-vindo(a) ao Sistema da Empresa CustomerCar</h1>
        <div class="row">
            <div class="col-md-12">
                <p class="blue-text text-right mb-5 mr-5">
                    <a href="listagem">Listagem</a>
                    <a class="ml-5" href="cadastro">Cadastros</a>
                    <a class="ml-5" href="{{url('vendaLista')}}">Vendas</a>
                    <a class="ml-5" href="{{url('servicoLista')}}">Serviços</a>
                </p>
            </div>
        </div>

    </div>

</div>

