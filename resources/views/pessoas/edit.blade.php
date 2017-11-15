@extends('app')

@section('content')
  <div class="container">
    <h1>Editando Pessoa: {{$pessoa->nome}}</h1>

    {!! Form::open(['route' => ["pessoas.update", $pessoa->id], 'method'=>'put']) !!}

    <div class="form-group">
      {!! Form::label('nome', 'Nome') !!}
      {!! Form::text('nome', $pessoa->nome, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::submit('Salvar', ['class'=>'btn btn-primary']) !!}
    </div>

    {!!Form::close() !!}

  </div>
@endsection
