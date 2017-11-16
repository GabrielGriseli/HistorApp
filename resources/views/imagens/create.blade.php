@extends('app')

@section('content')
  <div class="container">
    <h1>Cadastro de Imagem</h1>

    {!! Form::open(['route' => 'imagens.store']) !!}

    <div class="form-group">
      {!! Form::label('nome', 'Nome da Imagem') !!}
      {!! Form::text('nome', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('link_imagem', 'Link da Imagem') !!}
      {!! Form::text('link_imagem', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('dt_entrevista', 'Data da Entrevista') !!}
      {!! Form::date('dt_entrevista', '2017-05-18 00:00:00', ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('id_cidade', 'Cidade') !!}
      {{ Form::select('id_cidade', \App\Cidade::orderBy('nome')->pluck('nome', 'id')->toArray(), null, ['class'=>'form-control']) }}
    </div>



    <div class="form-group">
      {!! Form::label('id_pessoa', 'Pessoas') !!}
      <?php $pessoas = array()?>
      {{ Form::select('id_pessoa', \App\Pessoa::orderBy('nome')->pluck('nome', 'id')->toArray(), null, ['class'=>'form-control']) }}
      <table class="table table-striped table-bordered table-hover">
        <thead>
          <tr>
            <th>Nome</th>
            <th>Ação</td>
          </tr>
        </thead>
        <tbody>
        @foreach($pessoas as $i)
          <tr>
            <td>{{$i->nome}}</td>
          </tr>
        @endforeach
        </tbody>
      </table>
    </div>




    <div class="form-group">
      {!! Form::label('descricao', 'Descrição') !!}
      {!! Form::textarea('descricao', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('extra_info', 'Demais Informações') !!}
      {!! Form::textarea('extra_info', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::submit('Salvar', ['class'=>'btn btn-primary']) !!}
    </div>

    {!!Form::close() !!}

  </div>
@endsection
