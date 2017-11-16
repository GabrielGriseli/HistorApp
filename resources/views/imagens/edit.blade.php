@extends('app')

@section('content')
  <div class="container">
    <h1>Editar Imagem: {{$imagem->nome}}</h1>

    {!! Form::open(['route' => ["imagens.update", $imagem->id], 'method'=>'put']) !!}

    <div class="form-group">
      {!! Form::label('nome', 'Nome da Imagem') !!}
      {!! Form::text('nome', $imagem->nome, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('link_imagem', 'Link da Imagem') !!}
      {!! Form::text('link_imagem', $imagem->link_imagem, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('dt_entrevista', 'Data da Entrevista') !!}
      {!! Form::date('dt_entrevista', '2017-05-18 00:00:00', ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('id_cidade', 'Cidade') !!}
      {{ Form::select('id_cidade', \App\Cidade::orderBy('nome')->pluck('nome', 'id')->toArray(), $imagem->id_cidade, ['class'=>'form-control']) }}
      <p></p>
      <a href="{{route('cidades.create')}}" class="btn-sm btn-primary">Cadastrar Nova Cidade</a>
    </div>

    <div class="form-group">
      {!! Form::label('descricao', 'Descrição') !!}
      {!! Form::textarea('descricao', $imagem->descricao, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('extra_info', 'Demais Informações') !!}
      {!! Form::textarea('extra_info', $imagem->extra_info, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::submit('Salvar', ['class'=>'btn btn-primary']) !!}
    </div>

    {!!Form::close() !!}

  </div>
@endsection
