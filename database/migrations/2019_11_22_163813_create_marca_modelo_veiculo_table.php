<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarcaModeloVeiculoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marca', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome', 50);
            $table->timestamps();
        });
        Schema::create('modelo', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome', 50);
            $table->timestamps();
            $table->unsignedBigInteger('marcaId');
            $table->foreign('marcaId')->references('id')->on('marca');
        });
        Schema::create('veiculo', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('placa', 7);
            $table->timestamps();
            $table->string('chassi', 16);
            $table->year('anoFabricacao');
            $table->year('anoModelo');
            $table->unsignedBigInteger('modeloId');
            $table->foreign('modeloId')->references('id')->on('modelo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('veiculo');
        Schema::dropIfExists('modelo');
        Schema::dropIfExists('marca');
    }
}
