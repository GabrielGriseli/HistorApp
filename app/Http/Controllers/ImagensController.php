<?php

namespace App\Http\Controllers;

use App\Imagem;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ImagensController extends Controller
{
    public function index(){
      $imagens = Imagem::all();
      return view('imagens', ['imagens'=>$imagens]);
    }
}
