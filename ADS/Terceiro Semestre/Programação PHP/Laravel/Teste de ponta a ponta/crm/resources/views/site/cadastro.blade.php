@include('mdb.codigo')
<div style="height: 100vh">
    <div class="flex-center flex-column">
        <h1 class="animated fadeIn mb-4">Cadastros</h1>
        <div class="row">
            <div class="col-md-12">
                <p class="blue-text text-right mb-5 mr-5">
                    <a href="cadastroFornecedor">Fornecedor</a>
                    <a class="ml-5" href="{{url('cadastroCliente')}}">Cliente</a>
                    <a class="ml-5" href="{{url('cadastroVeiculo')}}">Veículo</a>
                    <a class="ml-5" href="{{url('cadastroProduto')}}">Produto</a>
                </p>
            </div>
        </div>

    </div>
