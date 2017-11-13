@extends('app')

@section('content')
  <div class="container">
    <h1>Editando Cidade: {{$cidade->nome}}</h1>

    {!! Form::open(['url' => "cidades/$cidade->id/update", 'method'=>'put']) !!}

    <div class="form-group">
      {!! Form::label('nome', 'Nome') !!}
      {!! Form::text('nome', $cidade->nome, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::submit('Salvar', ['class'=>'btn btn-primary']) !!}
    </div>

    {!!Form::close() !!}

  </div>
@endsection
