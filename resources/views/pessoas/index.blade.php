@extends('app')

@section('content')
  <div class="container">
    <h1>Pessoas</h1>

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
          <td>
            <a href="{{route('pessoas.edit', ['id'=>$i->id])}}" class="btn-sm btn-success">Editar</a>
            <a href="{{route('pessoas.destroy', ['id'=>$i->id])}}" class="btn-sm btn-danger">Remover</a>
          </td>
        </tr>
      @endforeach
      </tbody>
    </table>
    <a href="{{route('pessoas.create')}}" class="btn-sm btn-primary">Nova Pessoa</a>
    <a href="/" class="btn-sm btn-primary">Voltar</a>
  </div>
@endsection
