<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Endereco extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('endereco', function (Blueprint $table) {
            $table->bigIncrements('id', true);
            $table->foreignId('cliente');
            $table->string('cidade',50);
            $table->string('rua',50);
            $table->string('bairro',50);
            $table->string('numero',50);
            $table->text('observacao')->nullable();
            $table->foreign('cliente')->references('id')->on('cliente')->onDelete('CASCADE');
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
        Schema::dropIfExists('endereco');
    }
}
