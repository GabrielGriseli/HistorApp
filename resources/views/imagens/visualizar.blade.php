@extends('app')

@section('content')
  <div class="container">
    <h1>Imagem</h1>

    <table class="table table-striped table-bordered table-hover">
      <thead>
        <tr>
          <th>Nome</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>{{$imagem->nome}}</td>
        </tr>
      </tbody>
      <thead>
        <tr>
          <th>Imagem</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><img src="{{$imagem->link_imagem}}" alt="" style="width:100%;"></td>
        </tr>
      </tbody>
      <thead>
        <tr>
          <th>Data Entrevista</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>{{$imagem->dt_entrevista}}</td>
        </tr>
      </tbody>
      <thead>
        <tr>
          <th>Descrição</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>{{$imagem->descricao}}</td>
        </tr>
      </tbody>
      <thead>
        <tr>
          <th>Informações Extra</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>{{$imagem->extra_info}}</td>
        </tr>
      </tbody>
      <thead>
        <tr>
          <th>Doador</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>{{$doador->nome}}
        </tr>
      </tbody>

    </table>


    <table class="table table-striped table-bordered table-hover">
    <thead>
      <tr>
        <th>Pessoas na foto</th>
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
