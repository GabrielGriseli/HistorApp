@extends('app')

@section('content')
  <div class="container">
    <h1>Cidades</h1>

    <table class="table table-striped table-bordered table-hover">
      <thead>
        <tr>
          <th>Nome</th>
          <th>Ação</td>
        </tr>
      </thead>
      <tbody>
      @foreach($cidades as $i)
        <tr>
          <td>{{$i->nome}}</td>
          <td>
            <a href="{{route('cidades.edit', ['id'=>$i->id])}}" class="btn-sm btn-success">Editar</a>
            <a href="{{route('cidades.destroy', ['id'=>$i->id])}}" class="btn-sm btn-danger">Remover</a>
          </td>
        </tr>
      @endforeach
      </tbody>
    </table>
    <a href="{{route('cidades.create')}}" class="btn-sm btn-primary">Nova Cidade</a>
  </div>
@endsection
