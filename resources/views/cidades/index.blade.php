@extends('app')

@section('content')
  <div class="container">
    <h1>Cidades</h1>

    <table class="table table-striped table-bordered table-hover">
      <thead>
        <tr>
          <th>Nome</th>
        </tr>
      </thead>
      <tbody>
      @foreach($cidades as $i)
        <tr>
          <td>{{$i->nome}}</td>
        </tr>
      @endforeach
      </tbody>
    </table>
  </div>
@endsection
