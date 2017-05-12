@extends('painel.templates.index')

@section('content')
<h1>Getão do Carro</h1>

    @if (isset($carro)) 
    
        {!!Form::open(['url' => "carros/editar/$carro->id"])!!}

    @else

        {!!Form::open(['url' => 'carros/adicionar'])!!}

    @endif

        {!!Form::text('nome', $carro->nome ?? null, ['placeholder' => 'Nome do Carro'])!!}

        {!!Form::text('placa', $carro->placa ?? null, ['placeholder' => 'Placa do Carro'])!!}

        {!!Form::submit('Enviar')!!}


    {!!Form::close()!!}
@endsection