<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Orcamento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orcamento', function (Blueprint $table) {
            $table->bigIncrements('id', true);
            $table->foreignId('cliente');
            $table->text('observacao')->nullable();
            $table->integer('desconto')->nullable();
            $table->string('status',50);
            $table->decimal('valor_t_b', 8, 2);
            $table->decimal('valor_f', 8, 2);
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
        Schema::dropIfExists('orcamento');
    }
}
