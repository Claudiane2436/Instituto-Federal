
@extends('mdb.mdb-fullpage');

@section('content')

<img src="{{ asset('imagem/banner/carro.jpg') }}" class="img-fluid mx-auto d-block" />

@component('component.card-carro')
@endcomponent

@endsection