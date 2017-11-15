@extends('app')

@section('content')
  <div class="container">
    <h1>Nova Pessoa</h1>

    {!! Form::open(['route' => 'pessoas.store']) !!}

    <div class="form-group">
      {!! Form::label('nome', 'Nome') !!}
      {!! Form::text('nome', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::submit('Salvar', ['class'=>'btn btn-primary']) !!}
    </div>

    {!!Form::close() !!}

  </div>
@endsection
