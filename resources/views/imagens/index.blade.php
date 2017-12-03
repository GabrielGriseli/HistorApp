@extends('app')

@section('content')
  <div class="container">
    <h1>Imagens</h1>

    <table class="table table-striped table-bordered table-hover">
      <thead>
        <tr>
          <th>Nome</th>
          <th>Ação</td>
        </tr>
      </thead>
      <tbody>
      @foreach($imagens as $i)
        <tr>
          <td>{{$i->nome}}</td>
          <td>
            <a href="{{route('imagens.visualizar', ['id'=>$i->id])}}" class="btn-sm btn-success">Visualiar</a>
            <a href="{{route('imagens.edit', ['id'=>$i->id])}}" class="btn-sm btn-success">Editar</a>
            <a href="{{route('imagens.destroy', ['id'=>$i->id])}}" class="btn-sm btn-danger">Remover</a>
          </td>
        </tr>
      @endforeach
      </tbody>
    </table>
    <a href="{{route('imagens.create')}}" class="btn-sm btn-primary">Cadastrar Nova Imagem</a>
    <a href="/" class="btn-sm btn-primary">Voltar</a>
  </div>
@endsection
