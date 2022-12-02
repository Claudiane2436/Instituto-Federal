
@extends('mdb.mdb-fullpage');

@section('content')

<img src="{{ asset('imagem/banner/carro.jpg') }}" class="img-fluid mx-auto d-block" />

@component('component.card-carro')


@endcomponent
<div class="row">
    <a href="{{url('cadastroVenda')}}" dusk="compra" class="col-5 mx-auto d-block btn btn-info btn-lg">Comprar Produto</a>
    <a href="{{url('cadastroServico')}}" dusk="servico" class="col-5 mx-auto d-block btn btn-info btn-lg">Agenda Serviço</a>      
</div>
@endsection