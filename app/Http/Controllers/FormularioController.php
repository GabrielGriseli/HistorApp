<?php

namespace App\Http\Controllers;

use App\FormularioImagem;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FormularioController extends Controller
{
    public function index(){
      $FormularioImagem = FormularioImagems::all();
      return view('formulario', ['formulario'=>$FormularioImagem]);
    }
}
