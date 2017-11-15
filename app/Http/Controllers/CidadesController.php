<?php

namespace App\Http\Controllers;

use App\Cidade;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CidadeRequest;

class CidadesController extends Controller
{
  public function index(){
    $cidades = Cidade::all();
    return view('cidades.index', ['cidades'=>$cidades]);
  }

  public function create(){
    return view('cidades.create');
  }

  public function store(CidadeRequest $request){
    $nova_cidade = $request->all();
    Cidade::create($nova_cidade);

    return redirect()->route('cidades');
  }

  public function destroy($id){
    Cidade::find($id)->delete();
    return redirect()->route('cidades');
  }

  public function edit($id){
    $cidade = Cidade::find($id);
    return view('cidades.edit', compact('cidade'));
  }

  public function update(CidadeRequest $request, $id){
    $cidade = Cidade::find($id)->update($request->all());
    return redirect()->route('cidades');
  }
}
