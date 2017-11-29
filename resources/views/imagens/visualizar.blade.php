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
          <th>Pessoa da Foto</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>{{$pessoa->nome}}</td>
        </tr>
      </tbody>
    </table>
  </div>
@endsection
