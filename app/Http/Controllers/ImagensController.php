<?php

namespace App\Http\Controllers;

use App\Imagem;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ImagemRequest;

class ImagensController extends Controller
{
  public function index(){
    $imagens = Imagem::all();
    return view('imagens.index', ['imagens'=>$imagens]);
  }

  public function visualizar($id){
    $imagem = Imagem::find($id);
    return view('imagens.visualizar', compact('imagem'));
  }

  public function create(){
    return view('imagens.create');
  }

  public function store(ImagemRequest $request){
    $nova_imagem = $request->all();
    Imagem::create($nova_imagem);

    return redirect()->route('imagens');
  }

  public function destroy($id){
    Imagem::find($id)->delete();
    return redirect()->route('imagens');
  }

  public function edit($id){
    $imagem = Imagem::find($id);
    return view('imagens.edit', compact('imagem'));
  }

  public function update(ImagemRequest $request, $id){
    $imagem = Imagem::find($id)->update($request->all());
    return redirect()->route('imagens');
  }
}
