<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostosTrabalhoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postos_trabalho', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('funcionario_id')->nullable()->unsigned();
            $table->string('setor');
            $table->string('tipo');
            $table->string('local');
            $table->string('pais');
            $table->date('data_habilitado');
            $table->date('data_validade');
            $table->timestamps();

            $table->foreign('funcionario_id')->references('id')->on('funcionarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('postos_trabalho');
    }
}
