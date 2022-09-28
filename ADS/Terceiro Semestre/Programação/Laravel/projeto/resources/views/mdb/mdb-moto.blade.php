
@extends('mdb.mdb-fullpage');

@section('content')

<img src="{{ asset('imagem/banner/moto.png') }}" class="img-fluid mx-auto d-block" />

@component('component.card-moto')
@endcomponent

@endsection