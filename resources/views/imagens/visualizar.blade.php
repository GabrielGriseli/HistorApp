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
      @foreach($imagens_pessoas as $i)
        <tr>
          <td>{{$i->id_pessoas}}</td>
        </tr>
      @endforeach
      </tbody>
    </table>
  </div>
@endsection
