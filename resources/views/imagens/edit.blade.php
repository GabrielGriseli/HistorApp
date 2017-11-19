@extends('app')

@section('content')
  <div class="container">
    <h1>Editar Imagem: {{$imagem->nome}}</h1>

    {!! Form::open(['route' => ["imagens.update", $imagem->id], 'method'=>'put']) !!}



    {!! Form::label('Pessoas:') !!}
        <div class="input_fields_wrap">

            <button class="add_field_button btn btn-default">Adicionar Outra</button>
            <hr>
            <div class="form-group">{!! Form::select('itens[]', \App\Pessoa::orderBy('nome')->pluck('nome', 'id')->toArray(), null, ['class'=>'form-control']) !!}
                <a href="#" class="remove_field">Remover</a></div>
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
                $(wrapper).append('<div class="form-group">{!! Form::select('itens[]', \App\Pessoa::orderBy('nome')->pluck('nome', 'id')->toArray(), null, ['class'=>'form-control']) !!}<a href="#" class="remove_field">Remover</a></div>');
            });
            $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
                e.preventDefault(); $(this).parent('div').remove();
            })
        });
    </script>
@endsection
