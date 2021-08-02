<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MaterialProduto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('material_produto', function (Blueprint $table) {
            $table->bigIncrements('id', true);
            $table->foreignId('produto');
            $table->foreignId('material');
            $table->decimal('valor', 8, 2);
            $table->integer('quantidade');
            $table->foreign('produto')->references('id')->on('produto')->onDelete('CASCADE');
            $table->foreign('material')->references('id')->on('materiais')->onDelete('CASCADE');
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
        Schema::dropIfExists('material_produto');
    }
}
