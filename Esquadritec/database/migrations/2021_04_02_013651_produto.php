<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Produto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produto', function (Blueprint $table) {
            $table->bigIncrements('id', true);
            $table->foreignId('orcamento');
            $table->foreignId('modelo');
            $table->foreignId('linha');
            $table->string('nome',50);
            $table->decimal('valor', 8, 2);
            $table->foreign('orcamento')->references('id')->on('orcamento')->onDelete('CASCADE');
            $table->foreign('modelo')->references('id')->on('modelo')->onDelete('CASCADE');
            $table->foreign('linha')->references('id')->on('linha')->onDelete('CASCADE');
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
        Schema::dropIfExists('produto');
    }
}
