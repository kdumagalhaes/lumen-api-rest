<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('offers', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->timestamps();
            $table->integer('category_id')->unsigned();
            $table->string('categoria');
            $table->text('titulo');
            $table->text('descricao');
            $table->decimal('valor', $precision = 8, $scale = 2);
            $table->integer('quantidade');
            $table->text('imagem');
            $table->text('loja');


            // Cria relação
            $table->foreign('category_id')->references('id')->on('category');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offer');
    }
}
