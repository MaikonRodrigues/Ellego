<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExerciciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exercicies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pergunta');
            $table->string('opResposta1')->nullable();
            $table->string('opResposta2')->nullable();
            $table->string('opResposta3')->nullable();
            $table->string('opResposta4')->nullable();
            $table->integer('tipo')->insigned();

            // $table->integer('conteudo_id')->unsigned()->nullable();
            
            $table->timestamps();
        });
        // Schema::table('exercicies', function($table) {
            
        //     $table->foreign('conteudo_id')->references('id')->on('conteudos')->onDelete('cascade');
        // });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exercicies');
    }

    
}
