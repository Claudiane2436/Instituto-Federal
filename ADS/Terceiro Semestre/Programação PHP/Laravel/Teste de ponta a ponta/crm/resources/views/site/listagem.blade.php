@include('mdb.codigo')
<div style="height: 100vh">
    <div class="flex-center flex-column">
        <h1 class="animated fadeIn mb-4">Listagem de Cadastros</h1>
        <div class="row">
            <div class="col-md-12">
                <p class="blue-text text-right mb-5 mr-5">
                    <a href="{{url('fornecedorLista')}}">Fornecedor</a>
                    <a class="ml-5" href="{{url('clienteLista')}}">Cliente</a>
                    <a class="ml-5" href="{{url('veiculoLista')}}">Veículo</a>
                    <a class="ml-5" href="{{url('produtoLista')}}">Produto</a>
                </p>
            </div>
        </div>

    </div>
