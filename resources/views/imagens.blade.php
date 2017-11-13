@extends('app')

@section('content')
  <div class="container">
    <h1>Imagens</h1>

    <table class="table table-striped table-bordered table-hover">
      <thead>
        <tr>
          <th>Nome</th>
          <th>Id_cidade</th>
        </tr>
      </thead>
      <tbody>
      @foreach($imagens as $i)
        <tr>
          <td>{{$i->nome}}</td>
          <td>{{$i->id_cidade}}</td>
        </tr>
      @endforeach
      </tbody>
    </table>
  </div>
@endsection
