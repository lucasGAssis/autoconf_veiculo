<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVeiculoLoja extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('veiculo');
        Schema::create('veiculo', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('placa', 7);
            $table->timestamps();
            $table->string('chassi', 16);
            $table->year('anoFabricacao');
            $table->year('anoModelo');
            $table->unsignedBigInteger('modeloId');
            $table->foreign('modeloId')->references('id')->on('modelo');
            $table->unsignedBigInteger('lojaId');
            $table->foreign('lojaId')->references('id')->on('lojas');
            $table->unsignedBigInteger('userId');
            $table->foreign('userId')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
    }
}
