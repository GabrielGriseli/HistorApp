<?php
namespace App\Http\Controllers;
use App\Imagem;
use App\Pessoa;
use App\Imagem_Pessoa;
use Illuminate\Support\Facades\Auth;
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
    $pessoa = Pessoa::find($imagem->id_doador);
    //return view('imagens.visualizar', compact('imagem', 'imagens_pessoas'));
    return view('imagens.visualizar') -> with(compact('imagem', 'imagens_pessoas', 'pessoa'));
  }
  public function create(){
    if (Auth::check()){
      return view('imagens.create');
    }
    return view('auth/login');
  }
  public function store(ImagemRequest $request){
    $id_user = Auth::user()->id;
    #injetar artificialmente dados no request. http://laraveldaily.com/how-to-artificially-add-values-to-request-array/
    $request->request->add(['id_user' => $id_user]);
    $nova_imagem = $request->all();
    $nova_imagem = Imagem::create($nova_imagem);
    $pessoas = $request->pessoas;
    if(!empty($pessoas)){
      foreach($pessoas as $key => $value ) {
        Imagem_Pessoa::create(['id_imagens'  => $nova_imagem->id,'id_pessoas' => $pessoas[$key]]);
      }
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
