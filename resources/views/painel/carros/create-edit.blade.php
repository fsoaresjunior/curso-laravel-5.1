@extends('painel.templates.index')

@section('content')
<h1>Getão do Carro</h1>

    @if (isset($idCarro))
        <p>Exibe o carro: {{$idCarro}}</p>
    @endif
@endsection