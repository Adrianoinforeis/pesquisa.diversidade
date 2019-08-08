<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAvaliacaoPreliminarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avaliacao_preliminares', function (Blueprint $table) {
            $table->increments('avaliacao_preliminar_id');
            $table->unsignedBigInteger('doutor_id'); //Temporario
            $table->unsignedBigInteger('avaliador_id'); //Temporario
            $table->string('pergunta1')->nullable(); //Temporario
            $table->smallInteger('opcao1')->nullable(); //Temporario
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
        Schema::dropIfExists('avaliacao_preliminares');
    }
}
