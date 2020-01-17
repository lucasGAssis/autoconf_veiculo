<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstadoCidadeBairroEnderecoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estado', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome', 50);
            $table->timestamps();
        });

        Schema::create('cidade', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome', 50);
            $table->timestamps();
            $table->unsignedBigInteger('estadoId');
            $table->foreign('estadoId')->references('id')->on('estado');
        });

        Schema::create('bairro', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome', 50);
            $table->timestamps();
            $table->unsignedBigInteger('cidadeId');
            $table->foreign('cidadeId')->references('id')->on('cidade');
        });

        Schema::create('endereco', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('lagradouro', 50);
            $table->string('cep', 8);
            $table->string('numeroInicio', 8);
            $table->string('numeroFim', 8);
            $table->timestamps();
            $table->unsignedBigInteger('bairroId');
            $table->foreign('bairroId')->references('id')->on('bairro');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {   
        Schema::dropIfExists('endereco');
        Schema::dropIfExists('bairro');
        Schema::dropIfExists('cidade');
        Schema::dropIfExists('estado');  
    }
}
