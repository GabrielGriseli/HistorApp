<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagem extends Model
{
    protected $table = "imagens";
    protected $fillable = ['nome', 'link_imagem', 'dt_entrevista', 'descricao', 'extra_info', 'id_cidade', 'id_doador', 'id_user'];

    public function imagem_pessoa(){
      return $this->HasMany('App\Imagem_Pessoa');
    }
}
