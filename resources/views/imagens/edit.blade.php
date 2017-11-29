@extends('app')

@section('content')
  <div class="container">
    <h1>Cadastro de Imagem</h1>

    {!! Form::open(['route' => 'imagens.store']) !!}

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

    {!! Form::label('Pessoas na imagem') !!}
    <div class="input_fields_wrap">
        <button class="add_field_button btn btn-default">Adicionar Pessoas</button>
        {!! Form::submit('Salvar', ['class'=>'btn btn-primary']) !!}
        <p></p>
    </div>

    {!!Form::close() !!}

  </div>
@endsection

@section('dyn_scripts')
    <script>
        $(document).ready(function() {
            var wrapper         = $(".input_fields_wrap"); //Fields wrapper
            var add_button      = $(".add_field_button"); //Add button ID

            $(add_button).click(function(e){ //on add input button click
                console.log("clicou");
                e.preventDefault();
                $(wrapper).append('<div style="width: 90%; float:left">{!! Form::select('pessoas[]', \App\Pessoa::orderBy('nome')->pluck('nome', 'id')->toArray(), null, ['class'=>'form-control', 'required']) !!}<a href="#" class="remove_field">Remover</a></div>');
            });
            $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
                e.preventDefault();
                $(this).parent('div').remove();
            })
        });
    </script>
@endsection
