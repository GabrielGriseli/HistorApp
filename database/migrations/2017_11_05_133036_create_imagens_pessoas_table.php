<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagensPessoasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imagens_pessoas', function (Blueprint $table) {
            $table->integer('id_imagens')->unsigned();
            $table->foreign('id_imagens')->references('id')->on('imagens')->onDelete('cascade');
            $table->integer('id_pessoas')->unsigned();
            $table->foreign('id_pessoas')->references('id')->on('pessoas');
            $table->primary(['id_imagens', 'id_pessoas']);
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
        Schema::dropIfExists('imagens_pessoas');
    }
}
