@extends('app')

@section('content')
  <div class="container">
    <h1>{{$imagem->nome}}</h1>

    <div class="first-div-inner"><img style='height: 100%; width: 100%; object-fit: contain' src="{!! asset($imagem->link_imagem) !!}"/></div>

    <p>{{$imagem->descricao}}</p>

    







    <table class="table table-striped table-bordered table-hover">
      <thead>
        <tr>
          <th>Nome</th>
        </tr>
      </thead>
      <tbody>
      @foreach($imagem->pessoas as $pessoa)
        <tr>
          <td>{{$pessoa->nome}}</td>
        </tr>
      @endforeach
      </tbody>
    </table>
  </div>
@endsection
