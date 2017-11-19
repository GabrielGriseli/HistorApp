<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagem_Pessoa extends Model
{
    protected $table = "imagens_pessoas";
    protected $fillable = ['id_imagens', 'id_pessoas'];

    public function imagem(){
      return $this->belongsTo('App\Imagem', 'id_pessoa', 'id');
    }
}
