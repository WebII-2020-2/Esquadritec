<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Materiais extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materiais', function (Blueprint $table) {
            $table->bigIncrements('id', true);
            $table->foreignId('unidade_medida');
            $table->foreignId('linha');
            $table->string('nome',50);
            $table->string('codigo',50);
            $table->string('peso',50)->nullable();
            $table->decimal('valor', 8, 2)->nullable();
            $table->foreign('unidade_medida')->references('id')->on('unidade_medida')->onDelete('CASCADE');
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
        Schema::dropIfExists('materiais');
    }
}
