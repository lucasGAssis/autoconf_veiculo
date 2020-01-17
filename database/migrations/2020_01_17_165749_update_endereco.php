<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateEndereco extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('endereco');

        Schema::create('endereco', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('logradouro', 255);
            $table->string('cep', 8);
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
        //
    }
}
