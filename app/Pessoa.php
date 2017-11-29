<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    protected $fillable = ['nome'];

    public function imagens(){
      return $this->belongsToMany('App\Imagem', 'imagens_pessoas', 'id_pessoas', 'id_imagens');
    }
}
