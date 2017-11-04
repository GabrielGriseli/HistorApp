<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormularioImagensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formulario_imagens', function (Blueprint $table) {
            $table->increments('id');
            $table->datetime('dt_entrevista');
            $table->string('nome_foto', 100);
            $table->string('local', 100);
            $table->string('descri_imagem', 3000);
            $table->string('extra_info', 1000);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('formulario_imagens');
    }
}
