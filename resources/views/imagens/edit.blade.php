@extends('app')

@section('content')
  <div class="container">
    <h1>Cadastro de Imagem</h1>

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
      {!! Form::date('dt_entrevista', $imagem->dt_entrevista, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('id_cidade', 'Cidade') !!}
      {{ Form::select('id_cidade', \App\Cidade::orderBy('nome')->pluck('nome', 'id')->toArray(), $imagem->id_cidade, ['class'=>'form-control']) }}
    </div>

    <div class="form-group">
      {!! Form::label('id_doador', 'Doador') !!}
      {{ Form::select('id_doador', \App\Pessoa::orderBy('nome')->pluck('nome', 'id')->toArray(), $imagem->id_pessoa, ['class'=>'form-control']) }}
    </div>

    <div class="form-group">
      {!! Form::label('descricao', 'Descrição') !!}
      {!! Form::textarea('descricao', $imagem->descricao, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('extra_info', 'Demais Informações') !!}
      {!! Form::textarea('extra_info', $imagem->extra_info, ['class'=>'form-control']) !!}
    </div>

    {!! Form::submit('Atualizar', ['class'=>'btn btn-primary']) !!}

    {!!Form::close() !!}

  </div>
@endsection
