<?php

namespace App\Http\Controllers;

use App\Imagem;
use App\Pessoa;
use App\Imagem_Pessoa;
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
    $imagens_pessoas = Imagem_Pessoa::where('id_imagens', $id)->get();




    return view('imagens.visualizar', compact('imagem', 'imagens_pessoas'));
  }

  public function create(){
    return view('imagens.create');
  }

  public function store(ImagemRequest $request){
    $nova_imagem = $request->all();
    $nova_imagem = Imagem::create($nova_imagem);

    $itens = $request->itens;
    foreach($itens as $key => $value ) {
        $pessoa_atual =  Pessoa::find($itens[$key]);
        Imagem_Pessoa::create(['id_imagens'  => $nova_imagem->id,'id_pessoas' => $itens[$key]]);
    }

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
